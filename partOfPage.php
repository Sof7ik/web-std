<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel='stylesheet' href='styles/general.css'>
    <link rel='stylesheet' href='styles/header.css'>
    <link rel='stylesheet' href='styles/portfolio.css'>
    <link rel='stylesheet' href='styles/our-team.css'>
    <link rel='stylesheet' href='styles/swiper.min.css'>
    <link rel='stylesheet' href='styles/usligi.css'>
    <link rel='stylesheet' href='styles/price.css'>
    <link rel='stylesheet' href='styles/novosti.css'>
    <link rel='stylesheet' href='styles/comments.css'>
    <link rel="stylesheet" href="styles/footer.css">
    <link rel='stylesheet' href='styles/media.css'>

    <script src="./js/send_feedback.js" defer></script>

    <title>partOfPage</title>
</head>

<body>

    <header id="header" >
        <div class="container">


            <nav>
                <div class="closeNavMobile">×</div>

                <a href="#uslugi">Услуги</a>
                <a href="#price">Цены</a>
                <a href="#portfolio">Портфолио</a>
                <a href="#contact">Контакты</a>
                <a href="#comments">Отзывы</a>
                <a href="#news">Новости</a>
                <a href="#our-team">О нас</a>
                <a href="#map">Как добраться</a>
                <a href="admin.php">Админ</a>
            </nav>

            <div class="navMobile">
                <p class="hide-unhide">|||</p>
                <p class="nav-title">Название студии</p>
            </div>


            <div class="header-info">
                <img src="./img/log_blog.png" alt="logo" class="studio-logo">

                <span class='web-studio'>Веб студия</span>
                <span class='studio-name'>«Название студии»</span>
            </div>


            <a href="#uslugi"><img src="img/icons/arrow_down1.png" alt="you-down" class="next-page-arrow"></a>
        </div>
    </header>

    <section class="block_uslugi" id="uslugi">
        <div class="container">
            <h1 class="section-title">НАШИ УСЛУГИ</h1>
            <div class="uslugi">
                <div class="usluga">
                    <img src="./img/icons/site.png">
                    <p>СОЗДАНИЕ САЙТОВ</p>
                </div>
                <div class="usluga">
                    <img src="./img/icons/search.png">
                    <p>ПРОДВИЖЕНИЕ САЙТОВ</p>
                </div>
                <div class="usluga">
                    <img src="./img/icons/support.png">
                    <p>ПОДДЕРЖКА САЙТОВ</p>
                </div>
            </div>

            <div class="uslugi" style="padding-top: 65px;">
                <div class="usluga">
                    <img src="./img/icons/optimization.png">
                    <p>ОПТИМИЗАЦИЯ САЙТОВ</p>
                </div>
                <div class="usluga">
                    <img src="./img/icons/organization.png">
                    <p>ПРОЕКТИРОВАНИЕ СТРУКТУРЫ</p>
                </div>
                <div class="usluga">
                    <img src="./img/icons/content.png">
                    <p>АНАЛИЗ ИНФОРМАЦИИ</p>
                </div>
            </div>
        </div>
    </section>

    <section class="block_price" id="price">

        <div class="container">
            <h1 class="section-title">ЦЕНЫ</h1>
            <div class="prices">
                <div class="price one">
                    <p class="name"> Лендинг страница</p>
                    <p class="pr"> 20 000 р </p>
                    <a href="#contact"> Заказать </a>
                </div>

                <div class="price price_center">
                    <p class="name"> Сайт-магазин </p>
                    <p class="pr"> 80 000 р </p>
                    <a href="#contact"> Заказать </a>
                </div>

                <div class="price three">
                    <p class="name"> Корпоративный сайт </p>
                    <p class="pr"> 50 000 р </p>
                    <a href="#contact"> Заказать </a>
                </div>

            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <h1 class="section-title">НАШИ РАБОТЫ</h1>
            <div class="portfolio-wrapper">
                <div class="portfolio-item n1">
                    <div class="hover-block">
                        <span class="portfolio-item-description">НАЗВАНИЕ САЙТА</span>
                    </div>
                </div>

                <div class="portfolio-item n2">
                    <div class="hover-block">
                        <span class="portfolio-item-description">НАЗВАНИЕ САЙТА</span>
                    </div>
                </div>

                <div class="portfolio-item n3">
                    <div class="hover-block">
                        <span class="portfolio-item-description">НАЗВАНИЕ САЙТА</span>
                    </div>
                </div>

                <div class="portfolio-item n4">
                    <div class="hover-block">
                        <span class="portfolio-item-description">НАЗВАНИЕ САЙТА</span>
                    </div>
                </div>

                <div class="portfolio-item n5">
                    <div class="hover-block">
                        <span class="portfolio-item-description">НАЗВАНИЕ САЙТА</span>
                    </div>
                </div>

                <div class="portfolio-item n6">
                    <div class="hover-block">
                        <span class="portfolio-item-description">НАЗВАНИЕ САЙТА</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h1 class="section-title" style="padding-top: 90px">ФОРМА СВЯЗИ</h1>
            <form action="#" class="forma" id="feedback_form">
                <div class="box-form">
                    <div class="form-submit">
                        <input class="fio" id="fio_feedback" type="text" placeholder="Введите ФИО..." required>
                        <input class="fio" id="email_feedback" type="text" placeholder="Введите E-mail..." required>
                    </div>
                    <textarea id="text_feedback" placeholder="Введите текст..." class="text-enter"></textarea>
                </div>
                    <input type="submit" value="ОТПРАВИТЬ" class="submit">
            </form>
        </div>
        
        </div>
    </section>

    <hr>

    <section class="comments" id="comments">
            <h1 class="section-title"> Комментарии</h1>
        
            <div class="swiper-container">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                      <div class="comment">
                          <p class="author"> Имя Фамилия0</p>
                          <p class="text"> Lorem ipsum dolor sit, ametipsum dolor sit ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet, ametipsum dolor sit, ametipsum dolor sit, amet ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, fugit ratione modi recusandae porro ullam ipsum id sint totam molestias unde sequi, cupiditate ad architecto deserunt asperiores, aspernatur fuga omnis.</p>
                          <p class="who"> Он </p>
                      </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="comment">
                        <p class="author"> Имя Фамилия1</p>
                        <p class="text"> Lorem ipsum dolor sit, ametipsum dolor sit ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet, ametipsum dolor sit, ametipsum dolor sit, amet ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, fugit ratione modi recusandae porro ullam ipsum id sint totam molestias unde sequi, cupiditate ad architecto deserunt asperiores, aspernatur fuga omnis.</p>
                        <p class="who"> Он </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="comment">
                        <p class="author"> Имя Фамилия2</p>
                        <p class="text"> Lorem ipsum dolor sit, ametipsum dolor sit ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet, ametipsum dolor sit, ametipsum dolor sit, amet ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, fugit ratione modi recusandae porro ullam ipsum id sint totam molestias unde sequi, cupiditate ad architecto deserunt asperiores, aspernatur fuga omnis.</p>
                        <p class="who"> Он </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="comment">
                        <p class="author"> Имя Фамилия3</p>
                        <p class="text"> Lorem ipsum dolor sit, ametipsum dolor sit ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet ipsum dolor sit, amet, ametipsum dolor sit, ametipsum dolor sit, amet ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, fugit ratione modi recusandae porro ullam ipsum id sint totam molestias unde sequi, cupiditate ad architecto deserunt asperiores, aspernatur fuga omnis.</p>
                        <p class="who"> Он </p>
                    </div>
                </div>
                
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
    </section>

    <section class="blok_novosti" id="news">
        <div class="container">
            <h1 class="section-title">НОВОСТИ</h1>
            <div class="picture">
            <?php 
                require_once './php/all_news.php';
            ?>  
                <!-- <a href="" class="picture_1">
                    <p>НОВОСТЬ</p>
                    <p class="nososv_date">03.02.2020</p>
                </a>

                <a href="" class="picture_2">
                    <p>НОВОСТЬ</p>
                    <p class="nososv_date">03.02.2020</p class="nososv_date">
                </a>
                    
                <a href="" class="picture_2">
                    <p>НОВОСТЬ</p>
                    <p class="nososv_date">03.02.2020</p class="nososv_date">
                </a>

                <a href="" class="picture_2">
                    <p>НОВОСТЬ</p>
                    <p class="nososv_date">03.02.2020</p class="nososv_date">
                </a> -->
            </div>
        </div>
    </section>

    <section class="our-team" id="our-team">
        <div class="container">
            <h1 class="section-title">НАША КОМАНДА</h1>

            <div class="members">

                <!-- Slider main container -->
                <div class="swiper-container-our">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper members">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="member">
                                <div class="hover-block">
                                    <span class="member-position">ДОЛЖНОСТЬ</span>
                                    <span class="member-name">Имя Фамилия</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="member">
                                <div class="hover-block">
                                    <span class="member-position">ДОЛЖНОСТЬ</span>
                                    <span class="member-name">Имя Фамилия</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="member">
                                <div class="hover-block">
                                    <span class="member-position">ДОЛЖНОСТЬ</span>
                                    <span class="member-name">Имя Фамилия</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="member">
                                <div class="hover-block">
                                    <span class="member-position">ДОЛЖНОСТЬ</span>
                                    <span class="member-name">Имя Фамилия</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <footer>
        <div class="container" id="map">
            <h1 class="section-title map">МЫ НА КАРТЕ</h1>
            <div class="box-maps">
                <div id="map-inner">
                    <iframe src="https://yandex.ru/map-widget/v1/-/CKQVzINP" width="560" height="400" frameborder="1" allowfullscreen="true"></iframe>
                </div>

                <div class="lef-bar">
                <h2 class="left-box"> Открыто до 17:00 </h2>
                <h2 class="left-box"> +7 (496) 556-96-83  </h2>
                <h2 class="left-box"> Россия, Щёлково<br> Малопролетарская ул.28</h2>
            </div>
        </div>

        
        
        <div class='arrowDiv'>
            <a class="arrow-up" href='#header'></a>
         </div>
    </footer>
    <h2 class="license">Юридические данные</h2>
    
    <script type="text/javascript" src="./js/swiper.min.js"></script>
    <script type="text/javascript" src="./js/smooth-scroll.min.js"></script>

    <script type="text/javascript" src="./js/my.js"></script>
</body>

</html>