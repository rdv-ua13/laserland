<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<section class="top-screen">
    <div class="container-fluid">
        <div class="row">
            <div class="top-screen__wrapper">
                <div class="top-screen__decor">
                    <div class="container ml-lg-0 top-screen__content">
                        <h1 class="h1 top-screen__title">Космические праздники в Чите</h1>
                        <div class="top-screen__subtitle">Здесь вас ждут: увлекательные лазерные бои, уникальные игровые аппараты и аттракционы, самые лучшие праздники и море веселья!</div>

                        <form class="top-screen__form" action="" method="post">
                            <div class="field-wrapper field-wrapper-titled">
                                <label class="field-input-label" for="topScreenFormPhone">Номер телефона</label>
                                <input id="topScreenFormPhone"
                                       class="field-input isPhone"
                                       type="tel"
                                       name="signUpForm[phone]"
                                       placeholder="+7 (___) ___-__-__"
                                       autocomplete="off"
                                       required
                                >
                            </div>
                            <div class="field-wrapper">
                                <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="requestCallSuccess">
                                    <span class="text-content">Записаться</span>
                                </button>
                            </div>
                            <div class="field-wrapper field-wrapper-agreement">
                                <input class="field-checkbox"
                                       type="checkbox"
                                       name="agree"
                                       checked
                                       required
                                >
                                <div class="field-agreement-msg">
                                    <span>Я даю свое согласие на обработку персональных данных и соглашаюсь с условиями и </span>
                                    <a class="link-tdu" href="javascript:;">политикой&nbsp;конфиденциальности</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light bg-textured">
    <div class="container block-pt-md block-pb-md">
        <div class="h2 block-mb-md block-title">
            <div class="block-title__accent">
                <span>Сделаем</span>
            </div>
            <div class="block-title__accent-next">
                <span>невероятным любое событие</span>
            </div>
        </div>

        <div class="event">
            <div class="event__item" style="background-image: url('/build/img/content-image-1.jpg')">
                <div class="event__title">дни рождения и выпускные</div>
            </div>
            <div class="event__item" style="background-image: url('/build/img/content-image-2.jpg')">
                <div class="event__title">школьные каникулы</div>
            </div>
            <div class="event__item" style="background-image: url('/build/img/content-image-3.jpg')">
                <div class="event__title">новый год и рождество</div>
            </div>
            <div class="event__item" style="background-image: url('/build/img/content-image-4.jpg')">
                <div class="event__title">любой повод или событие</div>
            </div>
        </div>

        <div class="block-pt-lg block-pb-lg">
            <div class="row reviews">
                <div class="col col-12 col-lg-4 col-xl-3">
                    <div class="h2 block-mb-md block-title">
                        <div class="block-title__accent">
                            <span>Что говорят наши</span>
                        </div>
                        <div class="block-title__accent-next">
                            <span class="color-orange">счастливые гости</span>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-8 col-xl-9">
                    <div class="reviews-wrapper">
                        <div class="swiper reviews-slider js-reviews-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="reviews-slider__content">
                                        <iframe src="https://vk.com/video_ext.php?oid=-211192260&id=456239053&hash=5324ec2b238dbdec&hd=2"
                                                allow="autoplay; encrypted-media; fullscreen; picture-in-picture;"
                                                frameborder="0"
                                                allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="reviews-slider__content">
                                        <iframe src="https://vk.com/video_ext.php?oid=-211192260&id=456239050&hash=812484b8c2e355e4&hd=2"
                                                allow="autoplay; encrypted-media; fullscreen; picture-in-picture;"
                                                frameborder="0"
                                                allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="reviews-slider__content">
                                        <iframe src="https://vk.com/video_ext.php?oid=-211192260&id=456239051&hash=dec7e759ad1bc25c&hd=2"
                                                allow="autoplay; encrypted-media; fullscreen; picture-in-picture;"
                                                frameborder="0"
                                                allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="reviews-slider__content">
                                        <iframe src="https://vk.com/video_ext.php?oid=-211192260&id=456239052&hash=d0b6ef459e0c21a1&hd=2"
                                                allow="autoplay; encrypted-media; fullscreen; picture-in-picture;"
                                                frameborder="0"
                                                allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="reviews-slider__content">
                                        <iframe src="https://vk.com/video_ext.php?oid=-211192260&id=456239049&hash=0a9ddefae3996365&hd=2"
                                                allow="autoplay; encrypted-media; fullscreen; picture-in-picture;"
                                                frameborder="0"
                                                allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-prev">
                                <svg class="icon rotate-left">
                                    <use href="/build/img/sprite.svg#arrow-r"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#arrow-r"></use>
                                </svg>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-darkblue bg-textured">
    <div class="container block-pt-xl block-pb-xl quiz-price">
        <div class="quiz-price__content">
            <div class="h2 block-mb-sm block-title color-orange quiz-price__title">УЗНАЙТЕ СТОИМОСТЬ ВАШЕГО ПРАЗДНИКА</div>
            <div class="quiz-price__subtitle">Пройдите опрос за 30 секунд и получите гарантированный подарок!</div>
            <div class="quiz-price__btn">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="quiz">
                    <span class="text-content">пройти тест</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-light bg-textured">
        <div class="container block-pt-xl block-pb-xl program-intro">
            <div class="h2 block-title program-intro__title">
                <div class="block-title__accent">
                    <span>Как мы создаем</span>
                </div>
                <div class="block-title__accent-next">
                    <span class="color-orange">идеальный праздник</span>
                    <span>для вас?</span>
                </div>
            </div>
            <div class="program-intro__subtitle">Для детей и взрослых мы составляем разную программу, с учетом ваших пожеланий, а сложность сценариев игры и активностей зависит от возраста вашей компании.</div>

        </div>
    </div>
    <div class="bg-darkblue bg-textured">
        <div class="container block-pt-lg block-pb-lg program-features">
            <div class="program-features__cards-wrapper">
                <div class="program-features__cards">
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>Объемная </span>
                            <span class="color-orange">шоу-программа</span>
                        </div>
                        <div class="program-features__card-descr">Продолжительностью 150 минут</div>
                    </div>
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>развлечения </span>
                            <span class="color-orange">на выбор</span>
                        </div>
                        <div class="program-features__card-descr">Дискотека, виртуальная реальность, хайп-шоу и многое другое</div>
                    </div>
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>уникальное </span>
                            <span class="color-orange">оборудование</span>
                        </div>
                        <div class="program-features__card-descr">Единственный в регионе аренный лазертаг</div>
                    </div>
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>банкетные зоны </span>
                            <span class="color-orange">на 60 мест</span>
                        </div>
                        <div class="program-features__card-descr">Посуда, холодильник, микроволновка, праздничное оформление</div>
                    </div>
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>фирменный </span>
                            <span class="color-orange">торт</span>
                        </div>
                        <div class="program-features__card-descr">Закажем авторский десерт для вас</div>
                    </div>
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>следим </span>
                            <span class="color-orange">за трендами</span>
                        </div>
                        <div class="program-features__card-descr">Новые разработки индустрии развлечений на вашем мероприятии</div>
                    </div>
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>разное наполнение </span>
                            <span class="color-orange">программ</span>
                        </div>
                        <div class="program-features__card-descr">Делаем праздник на любой бюджет</div>
                    </div>
                    <div class="program-features__card">
                        <div class="program-features__card-title">
                            <span>Фотограф и </span>
                            <span class="color-orange">видеограф</span>
                        </div>
                        <div class="program-features__card-descr">До 200 ярких и эмоциональных фотографий</div>
                    </div>
                </div>
            </div>
            <div class="program-features__bottom">
                <div class="program-features__caption">Готовы обсудить детали вашего праздника и забронировать дату?</div>
                <div class="program-features__btn">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="requestCall">
                        <span class="text-content">забронировать дату</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-light bg-textured">
        <div class="container block-pt-md block-pb-lg past-events">
            <div class="h2 block-title past-events__title">
                <div class="block-title__accent block-title__accent-bottom">
                    <span>Посмотрите </span>
                    <span class="color-orange">фото и видео </span>
                    <span class="w-100">с недавних праздников</span>
                </div>
            </div>
        </div>
        <div class="past-events-gallery">
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-9.jpg" alt="">
            </div>
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-10.jpg" alt="">
            </div>
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-11.jpg" alt="">
            </div>
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-12.jpg" alt="">
            </div>
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-13.jpg" alt="">
            </div>
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-14.jpg" alt="">
            </div>
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-15.jpg" alt="">
            </div>
            <div class="past-events-gallery__item">
                <img src="/build/img/content-image-16.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-light bg-textured">
        <div class="container block-pt-md block-pb-lg reservation">
            <div class="h2 block-title block-mb-lg">
                <div class="block-title__accent block-title__accent-bottom">
                    <span>Условия </span>
                    <span class="color-orange">бронирования</span>
                </div>
            </div>

            <ul class="reservation__stages">
                <li class="reservation__stages-item">
                    <div class="reservation__stages-view">
                        <svg class="icon">
                            <use href="/build/img/sprite.svg#reservation-tel"></use>
                        </svg>
                    </div>
                    <div class="reservation__stages-descr">1. Оставляйте заявку, либо звоните нам</div>
                </li>
                <li class="reservation__stages-item">
                    <div class="reservation__stages-view">
                        <svg class="icon">
                            <use href="/build/img/sprite.svg#reservation-info"></use>
                        </svg>
                    </div>
                    <div class="reservation__stages-descr">2. Мы рассказываем, как у нас все происходит</div>
                </li>
                <li class="reservation__stages-item">
                    <div class="reservation__stages-view">
                        <svg class="icon">
                            <use href="/build/img/sprite.svg#reservation-date"></use>
                        </svg>
                    </div>
                    <div class="reservation__stages-descr">3. Выбираем дату и время. Заключаем договор</div>
                </li>
                <li class="reservation__stages-item">
                    <div class="reservation__stages-view">
                        <svg class="icon">
                            <use href="/build/img/sprite.svg#reservation-pay"></use>
                        </svg>
                    </div>
                    <div class="reservation__stages-descr">4. Вносите минимальную предоплату</div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="bg-light bg-textured">
    <div class="container block-pt-md block-pb-lg staff">
        <div class="h2 block-title block-mb-md">
            <div class="block-title__accent block-title__accent-bottom">
                <span>Наш космический </span>
                <span class="color-orange">экипаж</span>
            </div>
        </div>

        <div class="staff__subtitle">
            <p>LaserLand — это настоящая космическая станция, замаскированная под развлекательный центр.</p>
            <p>Наш центр — это идеальное место чтобы провести День Рождения, или организовать оригинальное Корпоративное Мероприятие. Наполним праздник внеземными развлечениями: детская вечеринка, квест -шоу, увлекательные масштабные лазерные бои, захватывающий лазерный лабиринт,  турниры на игровых аппаратах, и многое другое!</p>
        </div>

        <div class="block-pt-sm block-pb-sm">
            <div class="staff-slider-wrapper">
                <div class="swiper staff-slider js-staff-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-1.jpg')">
                            <div class="staff-slider__name">Анастасия</div>
                            <div class="staff-slider__pos">Инженер телескопа</div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-2.jpg')">
                            <div class="staff-slider__name">Евгения</div>
                            <div class="staff-slider__pos">Ведущий пилот</div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-3.jpg')">
                            <div class="staff-slider__name">Ольга</div>
                            <div class="staff-slider__pos">Менеджер космотуризма</div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-4.jpg')">
                            <div class="staff-slider__name">Юлия</div>
                            <div class="staff-slider__pos">Управляющий станцией</div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-5.jpg')">
                            <div class="staff-slider__name">Дарья</div>
                            <div class="staff-slider__pos">Менеджер космотуризма</div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-6.jpg')">
                            <div class="staff-slider__name">Павел</div>
                            <div class="staff-slider__pos">Ведущий пилот</div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-7.jpg')">
                            <div class="staff-slider__name">Алексей</div>
                            <div class="staff-slider__pos">Борт акустики</div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/build/img/staff-8.jpg')">
                            <div class="staff-slider__name">Алёна</div>
                            <div class="staff-slider__pos">Борт акустики</div>
                        </div>
                    </div>
                </div>
                <?/*<div class="swiper-navigation">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>*/?>
            </div>
        </div>

    </div>
</section>

<section class="bg-darkblue bg-textured">
    <div class="container block-pt-xl block-pb-xl contacts">
        <div class="row">
            <div class="col col-12 col-lg-5 contacts__bg-area"></div>
            <div class="col col-12 col-lg-7">
                <div class="h2 block-title block-mb-lg">
                    <div class="block-title__accent block-title__accent-bottom">
                        <span class="color-orange">Наши контакты </span>
                        <span class="w-100">приезжайте на экскурсию</span>
                    </div>
                </div>
                <div class="contacts__info">
                    <div class="contacts__info-address">
                        <a class="js-scrollto"
                           href="#contactMap"
                           onclick="$([document.documentElement, document.body]).animate({scrollTop: $('#contactData').offset().top}, 1000);"
                        >г. Чита</a>
                        <div>ул. Генерала Белика 1, ТРЦ Столица</div>
                    </div>
                    <div class="contacts__info-tel">
                        <a href="tel:+73022270482">+7 (302) 227-04-82</a>
                    </div>
                </div>
                <div class="contacts__soc">
                    <div class="contacts__soc-title">Подпишитесь на нас вконтакте</div>
                    <ul class="contacts__soc-list">
                        <li>
                            <a href="https://vk.com/laserlandchita">
                                <svg class="icon">
                                    <use href="/build/img/sprite.svg#soc-vk"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contacts__btn">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="requestCall">
                        <span class="text-content">хочу на экскурсию</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light bg-textured">
    <div id="contactMap" class="contacts-map"></div>
</section>

<section class="bg-darkblue bg-textured">
    <div class="container block-pt-lg block-pb-lg contacts-request">
        <div class="row">
            <div class="col col-12 col-lg-6 contacts-request__heading">
                <div class="h2 block-title block-mb-lg">
                    <div class="block-title__accent">
                        <span class="color-orange">Оставьте заявку </span>
                        <span class="w-100">прямо сейчас</span>
                    </div>
                </div>
                <div class="contacts-request__subtitle">И получите гарантированный подарок при бронировании!</div>
            </div>
            <div class="col col-12 col-lg-6">
                <form class="contacts-request__form" action="" method="post">
                    <div class="field-wrapper field-wrapper-titled">
                        <label class="field-input-label" for="getСostFormName">Ваше Имя</label>
                        <input id="getСostFormName"
                               class="field-input"
                               type="tel"
                               name="getСostForm[name]"
                               placeholder=""
                               autocomplete="off"
                               required
                        >
                    </div>
                    <div class="field-wrapper field-wrapper-titled">
                        <label class="field-input-label" for="getСostFormPhone">Номер телефона</label>
                        <input id="getСostFormPhone"
                               class="field-input isPhone"
                               type="tel"
                               name="getСostForm[phone]"
                               placeholder="+7 (___) ___-__-__"
                               autocomplete="off"
                               required
                        >
                    </div>
                    <div class="field-wrapper">
                        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="requestCallSuccess">
                            <span class="text-content">узнать стоимость</span>
                        </button>
                    </div>
                    <div class="field-wrapper field-wrapper-agreement">
                        <input class="field-checkbox"
                               type="checkbox"
                               name="agree"
                               checked
                               required
                        >
                        <div class="field-agreement-msg">
                            <span>Я даю свое согласие на обработку персональных данных и соглашаюсь с условиями и </span>
                            <a class="link-tdu" href="javascript:;">политикой&nbsp;конфиденциальности</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>