<?php
    get_header();
?>

<!-- <div class="home-hero">
    <div class="home-hero__circle"></div>
    <div class="home-hero__text">
        <h1 class="home-hero__heading">Aroa Cain</h1>
        <h2 class="home-hero__subheading">PHP/Wordpress Developer</h2>
    </div>
</div> -->

<!-- navbar start -->
<nav class="navbar">
    <div><a href="#" class="navbar__logo">Aroa Cain</a></div>
    <div class="navbar__menu">
        <?php
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation',
              ));
        ?>
    </div>
    <div class="navbar__menu-btn">
        <i class="fas fa-bars"></i>
    </div>
</nav>



<!-- home section start -->
<section class="hero" id="hero">
    <div class="hero__container max-width">
        <div class="hero__content">
            <div class="hero__text-1">Hello, my name is</div>
            <div class="hero__text-2">Aroa Cain</div>
            <div class="hero__text-3">I can help you with <span class="typing">PHP</span></div>
            <a class="hero__btn" href="#">Hire me</a>
        </div>
    </div>
</section>


<!-- footer section start -->
<footer>
    <span>Created By Aroa Cain</a> | <span class="far fa-copyright"></span>
        2022 All rights reserved.</span>
</footer>

<?php
    get_footer();
?>