<?php
/*
	Template Name: Home Page
 */

get_header();
?>


<section id="slider" class="revslider-wrap slider-parallax clearfix">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home-cover-one.jpg" alt="first-slide-image">
                <div class="carousel-caption">
                    <div class="carousel-caption-holder">
                        <h1 class="slideInDown animated carousel-caption-h1" data-animate="slideInDown">assignment UNIVERSITY CAMPUS</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home-cover-one.jpg" alt="second-slide-image">
                <div class="carousel-caption">
                    <div class="carousel-caption-holder">
                        <h1 class="slideInDown animated carousel-caption-h1" data-animate="slideInDown">PROPOSED UNIVERSITY, AMULIA</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev custom-carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next custom-carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>


<?php get_footer(); ?>
