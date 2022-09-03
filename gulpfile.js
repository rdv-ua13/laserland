"use strict";

/* прокси проекта */
let rootDir = "laserland";

/* пути к исходным файлам (src), к готовым файлам (build), а также к тем, за изменениями которых нужно наблюдать (watch) */
let path = {
    build: {
        php:                "build/",
        js:                 "build/js/",
        css:                "build/css/",
        img:                "build/img/",
        favicon:            "build/",
        fonts:              "build/fonts/",
        video:              "build/video/",
        docs:               "build/docs/",
    },
    src: {
        php:                "src/pages/**/*.php",
        js:                 "src/js/**/*.js",
        style:              ["src/styles/main.scss", "src/styles/**/*.css"],
        img:                "src/img/*.*",
        svg:                "src/img/svg/*.*",
        favicon:            "src/img/favicon/*.*",
        fonts:              "src/fonts/**/*.*",
        video:              "src/video/**/*.*",
        docs:               "src/docs/**/*.*",
    },
    watch: {
        php:                "src/pages/**/*.php",
        js:                 "src/js/**/*.js",
        css:                ["src/styles/**/*.scss", "src/styles/**/*.css"],
        img:                "src/img/*.*",
        svg:                "src/img/svg/*.*",
        favicon:            "src/img/favicon/*.*",
        fonts:              "srs/fonts/**/*.*",
        video:              "src/video/**/*.*",
        docs:               "src/docs/**/*.*"
    },
    clean:                  "./build"
};

/* подключаем gulp и плагины */
let gulp           = require("gulp"),  // подключаем Gulp
    browserSync    = require("browser-sync").create(),  // сервер для работы и обновления страниц
    cache          = require("gulp-cache"), // модуль для кэширования
    cheerio        = require("gulp-cheerio"), // модуль для удаления атрибутов из svg
    concat         = require("gulp-concat"),   // модуль для конкатенации библиотек
    del            = require("del"),  // плагин для удаления файлов и каталогов
    group_media    = require("gulp-group-css-media-queries"),  // модуль для группирования медиазапросов
    /*imagemin       = require("gulp-imagemin"), // плагин для сжатия PNG, JPEG, GIF и SVG изображений*/
    notify         = require("gulp-notify"),  // модуль для уведомления об ошибках
    php            = require("gulp-connect-php"),  // модуль для обработки php
    plumber        = require("gulp-plumber"),  // модуль для отслеживания ошибок
    pngquant       = require("imagemin-pngquant"), // плагин для сжатия png
    prefixer       = require("gulp-autoprefixer"),  // модуль для установки автопрефиксов
    replace        = require("gulp-replace"), // модуль для фиксинга некоторых багов
    sass           = require('gulp-sass')(require('sass')),  // модуль для компиляции SASS (SCSS) в CSS
    sourcemaps     = require("gulp-sourcemaps"),  // модуль для генерации карты исходных файлов
    svgSprite      = require("gulp-svg-sprite"),  // модуль для объединения всех svg в sprite
    uglify         = require("gulp-uglify"); // модуль для минимизации JavaScript

/* задачи */
// сбор php
gulp.task("php:build", function () {
  return gulp.src(path.src.php)
    .pipe(plumber())
    .pipe(gulp.dest(path.build.php))
    .pipe(browserSync.stream())
});

// сбор стилей вендоров
gulp.task("vendorsCss:build", function () {
    return gulp.src([
        "node_modules/bootstrap/dist/css/bootstrap.min.css",
        "node_modules/swiper/swiper-bundle.min.css",
        "node_modules/slick-carousel/slick/slick.css",
        "node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css",
    ])
        .pipe(concat("vendors.css"))
        .pipe(plumber())
        /*.pipe(sourcemaps.init())*/
        .pipe(sass({
            outputStyle: "expanded"
        }).on("error", notify.onError()))
        .pipe(group_media())
        .pipe(prefixer({
            cascade: false,
        }))
        /*.pipe(sourcemaps.write("./"))*/
        .pipe(gulp.dest(path.build.css))
        .pipe(browserSync.stream())
});

// сбор стилей
gulp.task("css:build", function () {
  return gulp.src(path.src.style)
    .pipe(concat("main.css"))
    .pipe(plumber())
    /*.pipe(sourcemaps.init())*/
    .pipe(sass({
        outputStyle: "expanded"
    }).on("error", notify.onError()))
    .pipe(group_media())
    .pipe(prefixer({
        cascade: false,
    }))
    /*.pipe(sourcemaps.write("./"))*/
    .pipe(gulp.dest(path.build.css))
    .pipe(browserSync.stream())
});

// сбор подключаемых библиотек js
gulp.task("libsJs:build", function () {
  return gulp.src([
    "node_modules/jquery/dist/jquery.js",
    "node_modules/@popperjs/core/dist/umd/popper.js",
    "node_modules/bootstrap/dist/js/bootstrap.bundle.js",
    "node_modules/swiper/swiper-bundle.js",
    "node_modules/slick-carousel/slick/slick.min.js",
    "node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js",
    "node_modules/jquery.maskedinput/src/jquery.maskedinput.js",
    "node_modules/jquery-validation/dist/jquery.validate.js",
    'node_modules/jquery-validation/dist/localization/messages_ru.js',
  ])
    .pipe(concat("libs.min.js"))
    /*.pipe(sourcemaps.init())*/
    .pipe(uglify().on("error", notify.onError()))
    /*.pipe(sourcemaps.write("./"))*/
    .pipe(gulp.dest(path.build.js))
    .pipe(browserSync.stream())
});

// сбор js
gulp.task("js:build", function () {
  return gulp.src(path.src.js)
    .pipe(plumber())
    /*.pipe(sourcemaps.init())
    .pipe(sourcemaps.write("./"))*/
    .pipe(gulp.dest(path.build.js))
    .pipe(browserSync.stream())
});

// перенос шрифтов
gulp.task("fonts:build", function() {
  return gulp.src(path.src.fonts)
    .pipe(gulp.dest(path.build.fonts))
    .pipe(browserSync.stream())
});

// обработка картинок
gulp.task("image:build", function () {
  return gulp.src(path.src.img)
    /*.pipe(cache(imagemin([
      imagemin.mozjpeg({quality: 75, progressive: true}),
      imagemin.optipng({optimizationLevel: 5}),
      imagemin.svgo({
        plugins: [
          {removeViewBox: false},
          {cleanupIDs: false}
        ]
      })
    ])))*/
    .pipe(gulp.dest(path.build.img))
    .pipe(browserSync.stream())
});

// сбор sprite.svg
gulp.task("sprite:build", function () {
  return gulp.src(path.src.svg)
    .pipe(svgSprite({
      mode: {
        stack: {
          sprite: "../sprite.svg"
        }
      }
    }))
    .pipe(gulp.dest(path.build.img))
    .pipe(browserSync.stream())
});

// перенос favicon
gulp.task("favicon:build", function () {
  return gulp.src(path.src.favicon)
    .pipe(gulp.dest(path.build.favicon))
    .pipe(browserSync.stream())
});

// перенос видео
gulp.task("video:build", function() {
  return gulp.src(path.src.video)
    .pipe(gulp.dest(path.build.video))
    .pipe(browserSync.stream())
});

// перенос документов
gulp.task("docs:build", function() {
    return gulp.src(path.src.docs)
        .pipe(gulp.dest(path.build.docs))
        .pipe(browserSync.stream())
});

// удаление каталога build 
gulp.task("clean:build", function () {
  return del(path.clean);
});

// очистка кэша
gulp.task("cache:clear", function () {
  return cache.clearAll();
});

// запуск сервера и слежения за изменениями в файлах
gulp.task("watch", function () {
  php.server({}, function (){
    browserSync.init({
        baseDir: "./build",
        index: "index.php",
        injectChanges: true,
        proxy: rootDir + "/build/index.php",
        port: 8000,
        notify: false
    })
  });

  gulp.watch(path.watch.php, gulp.series("php:build"));
  gulp.watch(path.watch.css, gulp.series("vendorsCss:build"));
  gulp.watch(path.watch.css, gulp.series("css:build"));
  gulp.watch(path.watch.js, gulp.series("js:build"));
  gulp.watch(path.watch.fonts, gulp.series("fonts:build"));
  gulp.watch(path.watch.img, gulp.series("image:build"));
  gulp.watch(path.watch.svg, gulp.series("sprite:build"));
  gulp.watch(path.watch.favicon, gulp.series("favicon:build"));
  gulp.watch(path.watch.video, gulp.series("video:build"));
  gulp.watch(path.watch.video, gulp.series("docs:build"));
});


gulp.task("default", gulp.series(
  "clean:build",
  gulp.parallel(
    "php:build",
    "libsJs:build",
    "js:build",
    "fonts:build",
    "image:build",
    "sprite:build",
    "favicon:build",
    "video:build",
    "docs:build",
  ),
  "vendorsCss:build",
  "css:build",
  "watch"
));