<!doctype html>
<html lang="eu">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/jquery.arcticmodal-0.3.css" media="all">
    <link rel="stylesheet" href="assets/css/animate.min.css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <link rel="icon" href="assets/img/favicon.svg">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    <meta name="robots" content="noindex">
</head>

<body> 

<?php include 'header.php'; ?>

    <main>
        <div class="hero-box">
            <section class="hero">
                <picture class="hero-bgbefore">
                    <source srcset="assets/img/bg-m.webp" media="(max-width: 768px)" >
                    <source srcset="assets/img/bgbefore.webp">
                    <img src="assets/img/bgbefore.png" alt="baza">
                </picture>
                <picture class="hero-bgafter">
                    <source srcset="assets/img/bgafter.webp">
                    <img src="assets/img/bgafter.png" alt="baza">
                </picture>

                <picture class="hero-title">
                    <source srcset="assets/img/baza.svg" media="(min-width: 768px)" >
                    <img src="assets/img/baza2.svg" alt="baza">
                </picture>

                <div class="hero-timer">
                    <p class="body-14mu">Открытие 10 января 2025</p>
                    <p class="body-12mu">20:00 GMT +3</p>
                    <div class="hero-timer-wrap">
                        <div class="hero-timer-wrap-item">
                            <p class="days h4">23</p>
                            <p class="days-text body-12mu">дней</p>
                        </div>
                        <div class="hero-timer-wrap-item">
                            <p class="hours h4">06</p>
                            <p class="hours-text body-12mu">часов</p>
                        </div>
                        <div class="hero-timer-wrap-item">
                            <p class="minutes h4">55</p>
                            <p class="minutes-text body-12mu">минут</p>
                        </div>
                    </div>
                </div>
                
                <div class="stories">
                    <div class="stories-item"><img src="assets/img/story1.png" alt="story"></div>
                    <div class="stories-item"><img src="assets/img/story2.png" alt="story"></div>
                    <div class="stories-item"><img src="assets/img/story3.png" alt="story"></div>
                    <div class="stories-item"><img src="assets/img/story4.png" alt="story"></div>
                </div>

                <a href="#" class="gift">
                    <img src="assets/img/chest.png" alt="chest">
                    <p class="h8">Хочешь предстартовую коробку?</p>
                    <div class="gift-line">
                        <div class="gift-line-current"></div>
                        <span class="body-12mu">Осталось 1103 из 3000</span>
                    </div>
                    <div class="link body-14mu">забрать подарок</div>
                </a>
            </section>
        </div>

        <script>
          jQuery(document).ready(function($) {
            function num_word(value, words){  
              value = Math.abs(value) % 100; 
              var num = value % 10;
              if(value > 10 && value < 20) return words[2]; 
              if(num > 1 && num < 5) return words[1];
              if(num == 1) return words[0]; 
              return words[2];
            }

            var endDate = new Date(2025, 1, 10);
            setInterval(function() {
              var currentDate = new Date();
              var secondsLeft = Math.floor((endDate - currentDate) / 1000);
              var days = Math.floor(secondsLeft / (24 * 60 * 60));
              var hours = Math.floor((secondsLeft % (24 * 60 * 60)) / (60 * 60));
              var minutes = Math.floor((secondsLeft % (60 * 60)) / 60);

              
              $(".hero-timer .days-text").text(num_word(days, ['день', 'дня', 'дней']));
              $(".hero-timer .hours-text").text(num_word(hours, ['час', 'часа', 'часов']));
              $(".hero-timer .minutes-text").text(num_word(minutes, ['минута', 'минуты', 'минут']));

              if(days < 10) {
                days = "0" + days;
              }

              if(hours < 10) {
                hours = "0" + hours;
              }

              if(minutes < 10) {
                minutes = "0" + minutes;
              }

              $(".hero-timer .days").text(days);
              $(".hero-timer .hours").text(hours);
              $(".hero-timer .minutes").text(minutes);

            }, 1000);
          });
        </script>

        <div style="display: none;">
            <div class="box-modal stories-modal" id="storiesModal">
                <div class="stories-modal-wrap">
                    <div class="arcticmodal-close stories-modal-close">
                        <img src="assets/img/close.svg" alt="svg" class="svg">
                        <span class="body-14mu">закрыть</span>
                    </div>
                    <div class="swiper stories-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide stories-swiper-slide">
                                <video preload="none" loop playsinline>
                                    <source src="assets/img/story1-big.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="swiper-slide stories-swiper-slide">
                                <video preload="none" loop playsinline>
                                  <source src="assets/img/story2-big.mp4" type="video/mp4">
                                </video>
                                <a href="#" class="secondary-btn body-14mu">Подробнее</a>
                            </div>
                            <div class="swiper-slide stories-swiper-slide">
                                <img loading="lazy" src="assets/img/story3-big.webp" alt="">
                                <a href="https://discord.gg/baza" class="secondary-btn body-14mu">Подробнее</a>
                            </div>
                            <div class="swiper-slide stories-swiper-slide">
                                <img loading="lazy" src="assets/img/story4-big.webp" alt="">
                                <a href="https://t.me/bazaproject_bot" class="secondary-btn body-14mu">Подробнее</a>                              
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="modal-overlay arcticmodal-close"></div>
            </div>
        </div>

        <section class="features">
            <div class="container">
                <div class="features-wrap">
                    <div class="features-item-wrap wow newFadeInUp animated" data-wow-duration="1s"
                    data-wow-offset="300">
                        <a href="#" class="features-item">
                            <p class="h4">быстрые<br> обновления</p>
                            <div class="features-spans">
                                <div class="features-span">
                                    <span class="body-12mu">обновление</span>
                                    <p class="body-14mu">высшие эльфы</p>
                                </div>
                                <div class="features-span">
                                    <span class="body-12mu">патч</span>
                                    <p class="body-14mu">тамплиеры</p>
                                </div>
                            </div>
                            <video preload="none" class="features-img" autoplay loop muted playsinline>
                                <source src="assets/img/features1.mp4" type="video/mp4">
                            </video>
                        </a>
                    </div>
                    <div class="features-item-wrap wow newFadeInUp animated" data-wow-duration="1s"
                    data-wow-offset="300">
                        <a href="#" class="features-item">
                            <div class="h3">
                                <p>Project Eva</p>
                                <p class="plus-item">essence</p>
                            </div>
                            <span class="body-18rp">
                                Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров
                            </span>
                            <video preload="none" class="features-img" autoplay loop muted playsinline>
                                <source src="assets/img/features2.mp4" type="video/mp4">
                            </video>
                        </a>
                    </div>
                    <div class="features-item-wrap wow newFadeInUp animated" data-wow-duration="1s"
                    data-wow-offset="300">
                        <a href="#" class="features-item">
                            <p class="h3">о нас</p>
                            <span class="body-18rp">
                                Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить
                            </span>
                            <picture preload="none" class="features-img">
                                <source loading="lazy" srcset="assets/img/features3.webp">
                                <img loading="lazy" src="assets/img/features3.png" alt="">
                            </picture>
                        </a>
                    </div>
                    <div class="features-item-wrap wow newFadeInUp animated" data-wow-duration="1s"
                    data-wow-offset="300">
                        <div class="features-item steps-btn">
                            <p class="h4">продуманная Экономика</p>
                            <span class="body-18rp">
                                Система для оценки силы персонажа: чем мощнее персонаж, тем выше его BAZA SCORE
                            </span>
                            <div class="primary-btn body-14mu">этапы</div>
                            <picture preload="none" class="features-img">
                                <source srcset="assets/img/features4.webp">
                                <img src="assets/img/features4.png" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="features-item-wrap wow newFadeInUp animated" data-wow-duration="1s"
                    data-wow-offset="300">
                        <a href="#" class="features-item">
                            <p class="h3">система<br> дивизионов<br> кланов</p>
                            <video preload="none" class="features-img" autoplay loop muted playsinline>
                                <source src="assets/img/features5.mp4" type="video/mp4">
                            </video>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div style="display: none;">
            <div class="box-modal steps-modal" id="stepsModal">
                <div class="steps-modal-wrap">
                    <div class="steps-modal-head">
                        <p class="h8">Current limints</p>
                        <div class="arcticmodal-close steps-modal-close">
                            <img src="assets/img/close.svg" alt="svg" class="svg">
                        </div>
                    </div>
                    <div class="steps-modal-list">
                        <div class="steps-modal-list-item">
                            <span class="body-14mu">items base</span>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                        </div>
                        <div class="steps-modal-list-item">
                            <span class="body-14mu">items base</span>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Dyes</p>
                                <span>Lv. 12</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Dolls</p>
                                <span>Lv. 2</span>
                            </div>
                            <div class="steps-modal-list-item-inner body-14mp">
                                <img src="assets/img/table.png" alt="">
                                <p>Epic Jewels</p>
                                <span>+2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-overlay arcticmodal-close"></div>
            </div>
        </div>

        <section class="minuses">
            <div class="minuses-bg"></div>
            <div class="container">
                <div class="minuses-list">
                    <div class="minuses-list-item active">
                        <span class="body-12mu">01</span>
                        <p class="h4">не рисуем балик</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">02</span>
                        <p class="h4">коллекции удалены</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">03</span>
                        <p class="h4">нет реферальной системы</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">04</span>
                        <p class="h4">discord теперь в игре</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">05</span>
                        <p class="h4">не рисуем балик</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">06</span>
                        <p class="h4">Ограничение на заточку</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">07</span>
                        <p class="h4">коллекции удалены</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">08</span>
                        <p class="h4">нет реферальной системы</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">09</span>
                        <p class="h4">discord теперь в игре</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">10</span>
                        <p class="h4">Ограничение на заточку</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">11</span>
                        <p class="h4">не рисуем балик</p>
                    </div>
                    <div class="minuses-list-item">
                        <span class="body-12mu">12</span>
                        <p class="h4">коллекции удалены</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner">
            <picture class="banner-bgbefore">
                <source loading="lazy" srcset="assets/img/banner.webp">
                <img loading="lazy" src="assets/img/banner.png" alt="baza">
            </picture>
            <picture class="banner-bgafter">
                <source loading="lazy" srcset="assets/img/banner2.webp">
                <img loading="lazy" src="assets/img/banner2.png" alt="baza">
            </picture>
            <canvas id="canvas"></canvas>
            <div class="container">
                <p class="h1">Погрузись в атмосферу project eva</p>
                <div class="btns">
                    <a href="#" class="main-btn body-14mu">регистрация</a>
                    <a href="#" class="primary-btn body-14mu">Скачать файлы</a>
                </div>
            </div>
        </section>

        <section class="faq">
            <div class="container">
                <img loading="lazy" src="assets/img/ice-1.webp" class="ice ice1" value="1.3">
                <img loading="lazy" src="assets/img/ice-2.webp" class="ice ice2" value="-0.8">
                <img loading="lazy" src="assets/img/ice-3.webp" class="ice ice3" value="0.4">
                <img loading="lazy" src="assets/img/ice-4.webp" class="ice ice4" value="-0.6">
                <img loading="lazy" src="assets/img/ice-5.webp" class="ice ice5" value="0.9">
                <div class="faq-nav">
                    <div class="faq-nav-item h3">что за сборка?</div>
                    <div class="faq-nav-item active h3">Как предложить свою идею? </div>
                    <div class="faq-nav-item h3">как клану перейти на сервер?</div>
                    <div class="faq-nav-item h3">не рисуете балик? Это как?</div>
                </div>
                <div class="faq-wrap">                 
                    <div class="faq-content">
                        <div class="faq-content-item">
                            <p class="body-18mp">
                                Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров
                            </p>
                            <a href="#" class="main-btn body-14mu">Связаться с нами</a>
                        </div>
                        <div class="faq-content-item active">
                            <p class="body-18mp">
                                2 Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров
                            </p>
                            <a href="#" class="main-btn body-14mu">Связаться с нами</a>
                        </div>
                        <div class="faq-content-item">
                            <p class="body-18mp">
                                3 Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров
                            </p>
                            <p class="body-18mp">
                                3 Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров
                            </p>
                        </div>
                        <div class="faq-content-item">
                            <p class="body-18mp">
                                4 Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров Испытай Essence по-новому! Вас ждет упрощенная добыча экипировки, покупку которой можно совершить за обычное внутриигровое золото, которое добывается с монстров
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="container">
                <p class="h2">Последние новости</p>
                <div class="news-nav">
                    <div class="news-nav-item ghost-btn body-14mu active">Все</div>
                    <div class="news-nav-item ghost-btn body-14mu">Новости</div>
                    <div class="news-nav-item ghost-btn body-14mu">Обновления</div>
                    <div class="news-nav-item ghost-btn body-14mu">События</div>
                    <div class="news-nav-item ghost-btn body-14mu">акции</div>
                </div>
                <div class="news-tab">
                    <div class="news-tab-item active">
                        <div class="news-tab-row">
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">обновления</div>
                                <img src="assets/img/news1.webp">
                                <p class="h5">Древние руины</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">события</div>
                                <img src="assets/img/news2.webp">
                                <p class="h5">обновление игрового контента</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">Акции</div>
                                <img src="assets/img/news3.webp">
                                <p class="h5">в погоне за розовым кроликом</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                        </div>
                    </div>
                    <div class="news-tab-item">
                        <div class="news-tab-row">
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">обновления</div>
                                <img src="assets/img/news3.webp">
                                <p class="h5">Древние руины</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">события</div>
                                <img src="assets/img/news2.webp">
                                <p class="h5">обновление игрового контента</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">Акции</div>
                                <img src="assets/img/news1.webp">
                                <p class="h5">в погоне за розовым кроликом</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                        </div>
                    </div>
                    <div class="news-tab-item">
                        <div class="news-tab-row">
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">обновления</div>
                                <img src="assets/img/news3.webp">
                                <p class="h5">Древние руины</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">события</div>
                                <img src="assets/img/news1.webp">
                                <p class="h5">обновление игрового контента</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">Акции</div>
                                <img src="assets/img/news2.webp">
                                <p class="h5">в погоне за розовым кроликом</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                        </div>
                    </div>
                    <div class="news-tab-item">
                        <div class="news-tab-row">
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">обновления</div>
                                <img src="assets/img/news1.webp">
                                <p class="h5">Древние руины</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">события</div>
                                <img src="assets/img/news3.webp">
                                <p class="h5">обновление игрового контента</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">Акции</div>
                                <img src="assets/img/news2.webp">
                                <p class="h5">в погоне за розовым кроликом</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                        </div>
                    </div>
                    <div class="news-tab-item">
                        <div class="news-tab-row">
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">обновления</div>
                                <img src="assets/img/news3.webp">
                                <p class="h5">Древние руины</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">события</div>
                                <img src="assets/img/news1.webp">
                                <p class="h5">обновление игрового контента</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                            <a href="#" class="article-item">
                                <div class="tag body-12mu">Акции</div>
                                <img src="assets/img/news2.webp">
                                <p class="h5">в погоне за розовым кроликом</p>
                                <span class="body-14r">09/07/24</span>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="secondary-btn body-14mu">Все новости</a>
            </div>
        </section>

        <section class="contacts">
            <picture class="contacts-bg">
                <source loading="lazy" srcset="assets/img/socials.webp">
                <img loading="lazy" src="assets/img/socials.png" alt="baza">
            </picture>
            <div class="container">
                <p class="h2">вступай в ряды<br> нашего сообщества</p>
                <div class="socials">
                    <a href="#" class="socials-item">
                        <img src="assets/img/ds.svg">
                        <div class="socials-item-inner">
                            <p class="h4">discord</p>
                            <span class="body-14m">3 000 участников</span>
                        </div>
                    </a>
                    <a href="#" class="socials-item">
                        <img src="assets/img/tg.svg">
                        <div class="socials-item-inner">
                            <p class="h4">telegram</p>
                            <span class="body-14m">3 000 участников</span>
                        </div>
                    </a>
                    <a href="#" class="socials-item">
                        <img src="assets/img/bot.svg">
                        <div class="socials-item-inner">
                            <p class="h4">telegram-бот</p>
                            <span class="body-14m">Ваш верный помощник</span>
                        </div>
                    </a>
                    <a href="#" class="socials-item">
                        <img src="assets/img/fb.svg">
                        <div class="socials-item-inner">
                            <p class="h4">facebook</p>
                            <span class="body-14m">3 000 участников</span>
                        </div>
                    </a>
                </div>
                <ul class="contacts-menu">
                    <li class="contacts-menu-item body-14mu"><a href="#">О сервере</a></li>
                    <li class="contacts-menu-item body-14mu"><a href="#">Новости</a></li>
                    <li class="contacts-menu-item body-14mu"><a href="#">Скачать файлы</a></li>
                    <li class="contacts-menu-item body-14mu"><a href="#">Помощь</a></li>
                    <li class="contacts-menu-item body-14mu"><a href="#">Личный кабинет</a></li>
                    <li class="contacts-menu-item body-14mu"><a href="#">Пожертвования</a></li>
                </ul>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="footer-left">
            <a href="#" class="logo">
                <img src="assets/img/logo-dark.svg" alt="logo" class="svg">
            </a>
            <p class="body-14m">
                © 2024 BAZA. Все товарные знаки являются собственностью их владельцев.
            </p>
        </div>
        <div class="footer-mid">
            <div class="footer-mid-partners">
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/visa.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/mc.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/mir.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/bitcoin.svg" class="svg">
                </div>
                <div class="footer-mid-partners-item hover">
                    <img src="assets/img/sbp.svg" class="svg">
                </div>
            </div>
            <p class="body-14m">HONKONG TANG DYNASTY INDUSTRY TRADE LIMITED.<br> Company Registration No. : 2658020</p>
        </div>
        <div class="footer-right">
            <a href="#" class="body-14m">Политика конфиденциальности</a>
            <a href="#" class="body-14m">Пользовательское соглашение</a>
            <a href="#" class="body-14m">Политика Cookie</a>
        </div>
    </footer>

    

<?php include 'footer.php'; ?>