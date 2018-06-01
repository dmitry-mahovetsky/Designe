<?php
/*
Template Name: Главная страница
*/
get_header(); ?>

    <div class="wrap">

        <?php if (get_field('создать_слайд')) : ?>

            <section class="slider">
                <div id="carousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators slider-indicators">
                        <?php

                        $a = 0;

                        foreach (get_field('создать_слайд') as $item): ?>
                            <li data-target="#carousel"
                                data-slide-to="<?php echo $a; ?>" <?php echo ($a == 0) ? 'class="active"' : ''; ?>></li>
                            <?php

                            $a++;

                        endforeach; ?>
                    </ol>

                    <div class="carousel-inner">


                        <?php

                        $b = 1;

                        foreach (get_field('создать_слайд') as $item): ?>

                            <div class="carousel-item <?php echo ($b == 1) ? 'active' : ''; ?>">
                                <img class="d-block w-100"
                                     src="<?php echo $item["слайд"]["url"]; ?>"
                                     alt="<?php echo $item["название_кнопки"]; ?>">
                                <div class="carousel-caption d-none d-md-block carusel-content">
                                    <p class="carousel-title"><?php echo $item["текст_н1"]; ?></p>
                                    <a href="<?php echo $item["кнопка_слайд"]; ?>"
                                       class="btn carousel-btn"><?php echo $item["название_кнопки"]; ?></a>
                                </div>
                            </div>

                            <?php

                            $b++;

                        endforeach; ?>


                    </div>

                </div>
            </section>

        <?php endif; ?>

        <section id="service">
            <div class="container">
                <header class="section-title">
                    <h2>
                        <?php echo get_field('заголовок_блока_сервис'); ?>
                    </h2>
                    <p class="sub-title"><?php echo get_field('подзаголовок_блока_сервис'); ?></p>
                </header>
                <div class="section-content">
                    <div class="row">
                        <?php

//                        var_dump(get_field('контент_блока_сервис'));

                        foreach (get_field('контент_блока_сервис') as $item): ?>

                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                <div class="card card-service">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?php echo $item["изображение_иконки"]["url"]; ?>"
                                                     style="width: 100%"
                                                     alt="<?php echo $item["текст_подзаголовка"]; ?>">
                                            </div>
                                        </div>
                                        <h3 class="card-title"><?php echo $item["текст_подзаголовка"]; ?></h3>
                                        <p class="card-text"><?php echo $item["контент"]; ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>


                    </div>
                </div>

            </div>
        </section>
        <section id="projects">
            <div class="container">
                <header class="section-title">
                    <h2>
                        <span>Our</span>
                        <span>RECENT PROJECTS</span>
                    </h2>
                    <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem
                        Ipsum is simply dummy
                        text of the printing and typesetting industry.</p>
                </header>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="card card-project">
                                <img class="card-img"
                                     src="<?php echo get_template_directory_uri(); ?>/img/slice-3-min.png"
                                     alt="Card image cap">

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="card card-project">
                                <img class="card-img"
                                     src="<?php echo get_template_directory_uri(); ?>/img/slice-4-min.png"
                                     alt="Card image cap">

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="card card-project">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/slice-5.png"
                                     alt="Card image cap">

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="card card-project">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/slice-6.png"
                                     alt="Card image cap">

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="card card-project">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/slise-2.png"
                                     alt="Card image cap">

                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="card card-project">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/slise-1.png"
                                     alt="Card image cap">

                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-load">load more</a>

            </div>
        </section>
        <section id="team">
            <div class="container">
                <header class="section-title">
                    <h2>
                        <span>Our</span>
                        <span>Team members</span>
                    </h2>
                    <p class="sub-title">We are a small team of passionate, creative and digital marketers with big
                        ambitions. We always look
                        at the big picture and believe every business can find their audience online...</p>
                </header>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-team">
                                <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/img/team-1.jpg"
                                     alt="Card image cap">
                                <div class="card-hover">
                                    <div class="text-bottom">

                                        <p class="card-title">MD ATIKUR RAHMAN</p>

                                        <div class="social">
                                            <a href="#" class="social-link">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-vimeo" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card card-team">
                                <img class="card-img"
                                     src="<?php echo get_template_directory_uri(); ?>/img/Layer 529-min.jpg"
                                     alt="Card image cap">
                                <div class="card-hover">
                                    <div class="text-bottom">

                                        <p class="card-title">MD ATIKUR RAHMAN</p>

                                        <div class="social">
                                            <a href="#" class="social-link">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-vimeo" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-team">
                                <img class="card-img"
                                     src="<?php echo get_template_directory_uri(); ?>/img/Layer 536-min.jpg"
                                     alt="Card image cap">
                                <div class="card-hover">
                                    <div class="text-bottom">

                                        <p class="card-title">MD ATIKUR RAHMAN</p>

                                        <div class="social">
                                            <a href="#" class="social-link">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-vimeo" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-team">

                                <img class="card-img"
                                     src="<?php echo get_template_directory_uri(); ?>/img/Layer 528-min.jpg"
                                     alt="Card image cap">
                                <div class="card-hover">
                                    <div class="text-bottom">

                                        <p class="card-title">MD ATIKUR RAHMAN</p>

                                        <div class="social">
                                            <a href="#" class="social-link">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="social-link">
                                                <i class="fa fa-vimeo" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section id="testimonial">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                                <div id="carouselTestimonia" class="carousel carouselTestimonia slide"
                                     data-ride="carouselTestimonia">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselTestimonia" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselTestimonia" data-slide-to="1"></li>
                                        <li data-target="#carouselTestimonia" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="wrap-picture">
                                                <div class="picture">
                                                    <div class="picture-rotate">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Layer 529-min.jpg"
                                                             alt="" width="80" height="80"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="description">Designing is a matter of concentration. You go deep
                                                into what you want to do.
                                                It's about intensive research, really. The concentration is warm and
                                                intimate
                                                and like</p>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="wrap-picture">
                                                <div class="picture">
                                                    <div class="picture-rotate">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Layer 528-min.jpg"
                                                             alt="" width="80" height="80"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="description">Designing is a matter of concentration. You go deep
                                                into what you want to do.
                                                It's about intensive research, really. The concentration is warm and
                                                intimate
                                                and like</p>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="wrap-picture">
                                                <div class="picture">
                                                    <div class="picture-rotate">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Layer 536-min.jpg"
                                                             alt="" width="80" height="80"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="description">Designing is a matter of concentration. You go deep
                                                into what you want to do.
                                                It's about intensive research, really. The concentration is warm and
                                                intimate
                                                and like</p>

                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="partners">
            <div class="container">

                <div class="section-content">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-sm-4 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-1.png" alt="microsoft">
                        </div>
                        <div class="col-md-2 col-sm-4 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-2.png" alt="microsoft">
                        </div>
                        <div class="col-md-2 col-sm-4 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-3.png" alt="microsoft">
                        </div>
                        <div class="col-md-2 col-sm-4 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-4.png" alt="microsoft">
                        </div>
                        <div class="col-md-2 col-sm-4 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-5.png" alt="microsoft">
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section id="blog">
            <div class="container">
                <header class="section-title">
                    <h2>Recent Blog</h2>
                </header>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <img class="card-img img-blog"
                                     src="<?php echo get_template_directory_uri(); ?>/img/blog-1-min.jpg" alt="#">
                                <div class="card-body">

                                    <h3 class="card-title">web development</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's
                                        content.
                                    </p>
                                </div>
                                <div class="blog-details d-flex justify-content-between">
                                    <div class="data">
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </span>
                                            <span>Sep 10’ 15</span>
                                        </a>

                                    </div>
                                    <div class="comment">
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                            </span>
                                            <span>5 Coments</span>
                                        </a>


                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <img class="card-img img-blog"
                                     src="<?php echo get_template_directory_uri(); ?>/img/blog-2-min.jpg" alt="#">
                                <div class="card-body">
                                    <h3 class="card-title">web development</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's
                                        content.
                                    </p>
                                </div>
                                <div class="blog-details d-flex justify-content-between">
                                    <div class="data">
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </span>
                                            <span>Sep 10’ 15</span>
                                        </a>
                                    </div>
                                    <div class="comment">
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                            </span>
                                            <span>5 Coments</span>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <img class="card-img img-blog"
                                     src="<?php echo get_template_directory_uri(); ?>/img/blog-3-min.jpg" alt="#">
                                <div class="card-body">

                                    <h3 class="card-title">web development</h3>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's
                                        content.
                                    </p>
                                </div>
                                <div class="blog-details d-flex justify-content-between">
                                    <div class="data">
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </span>
                                            <span>Sep 10’ 15</span>
                                        </a>

                                    </div>
                                    <div class="comment">
                                        <a href="#">
                                            <span class="icon">
                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                            </span>
                                            <span>5 Coments</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </section>
        <section id="contact">
            <div class="container">
                <div class="section-content">

                    <div class="row flex-wrap">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 oder1">
                            <div class="title">Don’t be shy, Say Hello!</div>

                            <?php echo do_shortcode('[contact-form-7 id="32" html_id="form" html_class="block-form"]'); ?>
                        </div>

                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 oder0">
                            <div class="block-location">
                                <span class="section-title">Our Office</span>
                                <div class="row location">
                                    <div class="col-md-3 icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="col-md-9 location-link p-0">
                                        Kandintie 16 3/B
                                        <br> Oulu, Finland
                                    </div>
                                </div>
                                <div class="row location">
                                    <div class="col-md-3 icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="col-md-9 location-link p-0">
                                        <a>+358465657634</a>
                                    </div>
                                </div>
                                <div class="row location">
                                    <div class="col-md-3 icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="col-md-9 location-link p-0">
                                        <a>atikur.ux@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="social-networks">
            <header class="section-title">
                <h2>GO BUSINESS</h2>
                <div class="social">
                    <a href="#" class="social__link">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social__link">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social__link">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social__link">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social__link">
                        <i class="fa fa-rss" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social__link">
                        <i class="fa fa-vimeo" aria-hidden="true"></i>
                    </a>
                </div>


            </header>
        </section>


    </div>

<?php

get_footer();
