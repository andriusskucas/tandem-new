<?php
/*
Template Name: Pagrindinis puslapis
*/
?>
<?php get_header(); ?>

<?php get_template_part('parts/home-page/top-image'); ?>

<section class="main-quote">
   <div class="wrap align-center">
       <h3 class="no-margin"><?php the_field('main_quote_text'); ?></h3>
   </div>
</section>

<section class="portfolio">
    <h2 class="section-title align-center">Darbai</h2>

    <ul class="portfolio__list wrap cf">
        <li class="portfolio-list-item col-big-4 align-center"><a href="">pavadinimas</a></li>
        <li class="portfolio-list-item col-big-4 align-center"><a href="">pavadinimas</a></li>
        <li class="portfolio-list-item col-big-4 align-center"><a href="">pavadinimas</a></li>
        <li class="portfolio-list-item col-big-4 align-center"><a href="">pavadinimas</a></li>
        <li class="portfolio-list-item col-big-4 align-center"><a href="">pavadinimas</a></li>
        <li class="portfolio-list-item col-big-4 align-center"><a href="">pavadinimas</a></li>
    </ul>

    <div class="wrap align-center padding-big-vertical">
        <a href="" class="btn more">Rodyti visus</a>
    </div>
</section>

<section class="services">
    <h2 class="section-title section-title--invert no-margin align-center">Paslaugos</h2>
    <ul class="services__list no-margin cf">
        <li class="service-item align-center">
            <a href="">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-foto.svg" alt="Fotografija">
                    <figcaption>Fotografija</figcaption>
                </figure>
            </a>
        </li>
        <li class="service-item align-center">
            <a href="">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-grafinis.svg" alt="">
                    <figcaption>Grafinis dizainas</figcaption>
                </figure>
            </a>
        </li>
        <li class="service-item align-center">
            <a href="">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-firminis.svg" alt="">
                    <figcaption>Firminis stilius</figcaption>
                </figure>
            </a>
        </li>
        <li class="service-item align-center">
            <a href="">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-web.svg" alt="">
                    <figcaption>WEB sprendimai</figcaption>
                </figure>
            </a>
        </li>
        <li class="service-item align-center">
            <a href="">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-360.svg" alt="">
                    <figcaption>360 ir VR</figcaption>
                </figure>
            </a>
        </li>
        <li class="service-item align-center">
            <a href="">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-kiti.svg" alt="">
                    <figcaption>Interaktyvas</figcaption>
                </figure>
            </a>
        </li>
    </ul>
</section>
<section class="clients padding-big-vertical">
    <h2 class="section-title no-margin align-center">Klientai</h2>
    <div class="wrap padding-small-vertical align-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laudantium debitis quasi, sapiente, minima optio, et, sit sed beatae enim amet. A ex quae libero voluptate at blanditiis laudantium placeat!</p>
    </div>
    <ul class="cliesnts-list wrap padding-big-vertical no-margin cf">
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo-2.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo-2.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo-2.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo-2.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo-2.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo-2.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo.png" alt="Klientas"></a></li>
        <li class="client-list__item align-center"><a href="<?php the_field(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp-logo-2.png" alt="Klientas"></a></li>
    </ul>

    <div class="wrap align-center padding-big-vertical">
        <a href="" class="btn more">Rodyti visus</a>
    </div>

</section>


<?php get_template_part('parts/home-page/map'); ?>
<?php get_footer(); ?>
