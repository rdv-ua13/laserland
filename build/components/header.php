<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="apple-touch-icon" sizes="144x144" href="/build/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/build/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/build/favicon-16x16.png">
    <link rel="manifest" href="/build/site.webmanifest">
    <link rel="mask-icon" href="/build/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/build/css/vendors.css">
    <link rel="stylesheet" href="/build/css/main.css">

    <title>TITLE</title>

	<?/*<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            var z = null;m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(90041074, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90041074" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->*/?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col col-4 col-md-3 col-xl-2 header__item">
                    <a class="logo" href="/">
                        <img src="/build/img/logo.png">
                    </a>
                </div>
                <div class="col col-8 col-md-9 col-xl-10 header__item">
                    <div class="row header__contacts">
                        <div class="col col-md-6 col-lg-7 col-xl-8">
                            <div class="header__contacts-wrapper">
                                <a class="header__contacts-item js-scrollto"
                                   href="#contactMap"
                                   onclick="$([document.documentElement, document.body]).animate({scrollTop: $('#contactData').offset().top}, 1000);"
                                >
                                    <svg class="icon mobile-only">
                                        <use href="/build/img/sprite.svg#location"></use>
                                    </svg>
                                    <span class="desktop-only">г. Чита, ул. Генерала Белика 1, ТРЦ Столица</span>
                                </a>
                                <a class="header__contacts-item header__contacts-tel" href="tel:+73022270482">
                                    <svg class="icon mobile-only">
                                        <use href="/build/img/sprite.svg#phone"></use>
                                    </svg>
                                    <span class="desktop-only">+7 (302) 227-04-82</span>
                                </a>
                            </div>
                        </div>
                        <div class="col col-md-6 col-lg-5 col-xl-4 header__contacts-btn-wrapper">
                            <div class="header__contacts-btn">
                                <button class="btn btn-small btn-primary" type="button" data-toggle="modal" data-target="requestCall">
                                    <span class="text-content">Заказать звонок</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main">