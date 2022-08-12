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
    <div class="hero__overlay"></div>
    <div class="hero__container max-width">
        <div class="hero__content">
            <div class="hero__text-1">Hello, my name is</div>
            <div class="hero__text-2">Aroa Cain</div>
            <div class="hero__text-3">I can help you with <span class="typing">PHP</span></div>
            <a class="hero__btn" href="#">Let's talk!</a>
        </div>
    </div>
</section>

<!-- about section start -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="typo__title">About me</h2>
        <div class="about__content">
            <div class="about__column-left">
                <img src="<?php echo get_theme_file_uri('/assets/img/AroaCain.jpg') ?>" alt="">
            </div>
            <div class="about__column-right">
                <div class="typo__subheading">I'm Aroa and I'm a <span class="typing-2 typo--primary">PHP</span>
                    developer</div>
                <p class="typo__par">Hi! My name is Aroa (in case you're wondering, it's pronounced <i>ah-row-ah</i>)
                    and I am a web developer. I am based in Malaga (Spain) and
                    Raleigh (North Carolina). I specialize in developing custom Wordpress websites, themes and
                    plugins. I am fully bilingual English/Spanish.</p>
            </div>
        </div>
    </div>
</section>

<!-- services section start -->
<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="typo__title typo--white">My skills</h2>
        <div class="skills__container">
            <div class="card">
                <div class="card__box">
                    <div class="circle skills__html">
                        <div class="circle__inner"></div>
                    </div>
                    <h2 class="typo__subheading typo--white">HTML5</h2>
                    <p class="typo__par typo--white">Proficient in HTML5, including the use of semantic HTML to create
                        accessible
                        websites.</p>
                </div>
            </div>
            <div class="card">
                <div class="card__box">
                    <div class="circle skills__css">
                        <div class="circle__inner"></div>
                    </div>
                    <h2 class="typo__subheading typo--white">CSS/SCSS</h2>
                    <p class="typo__par typo--white">Proficient in CSS3 and SCSS, including methodologies such as BEM.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card__box">
                    <div class="circle skills__wp">
                        <div class="circle__inner"></div>
                    </div>
                    <h2 class="typo__subheading typo--white">Wordpress</h2>
                    <p class="typo__par typo--white">Extensive knowledge of the Wordpress code base, including theme and
                        plugin
                        development.</p>
                </div>
            </div>

            <div class="card">
                <div class="card__box">
                    <div class="circle skills__php">
                        <div class="circle__inner"></div>
                    </div>
                    <h2 class="typo__subheading typo--white">PHP</h2>
                    <p class="typo__par typo--white">Good knowledge and experience with PHP to create Wordpress sites
                        and
                        maintain
                        Laravel sites.</p>
                </div>
            </div>

            <div class="card">
                <div class="card__box">
                    <div class="circle skills__js">
                        <div class="circle__inner"></div>
                    </div>
                    <h2 class="typo__subheading typo--white">Javascript</h2>
                    <p class="typo__par typo--white">Good working knowledge of Javascript for manipulating the DOM and
                        working with
                        APIs.</p>
                </div>
            </div>

            <div class="card">
                <div class="card__box">
                    <div class="circle skills__npm">
                        <div class="circle__inner"></div>
                    </div>
                    <h2 class="typo__subheading typo--white">NPM</h2>
                    <p class="typo__par typo--white">Proficient in the use of NPM for compiling and as a development
                        tool.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card__box">
                    <div class="circle skills__git">
                        <div class="circle__inner"></div>
                    </div>
                    <h2 class="typo__subheading typo--white">Git</h2>
                    <p class="typo__par typo--white">Experience using Git as a collaboration tool and for automatic
                        deployment of
                        sites using hooks.
                    </p>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

<!-- soft skills section start -->
<section class="soft-skills" id="soft-skills">
    <div class="max-width">
        <h2 class="typo__title">Soft Skills</h2>
        <div class="carousel owl-carousel">
            <p class="typo__par">Inquisitive, independent learner.</p>
            <p class="typo__par">Willingness and desire to learn new skills.</p>
            <p class="typo__par">Creative problem solver.</p>
            <p class="typo__par">Interest in creating and maintaining well-documented and reusable code.</p>
            <p class="typo__par">More than a decade of experience working remotely and virtually collaborating with
                teams.</p>
            <p class="typo__par">Inquisitive, independent learner.</p>
            <p class="typo__par"> Great communication and inter-personal skills.</p>
            <p class="typo__par"> Excellent organization and time-management skills.</p>
        </div>
    </div>
</section>

<!-- work section start -->
<section class="work" id="work">
    <div class="max-width">
        <h2 class="typo__title typo--white">My Work</h2>
        <div class="work__container">
            <div class="card">
                <div class="card__box">
                    <a href="https://aroacain.github.io/The-Beer-Academy/" target="_blank"><img
                            src="<?php echo get_theme_file_uri('/assets/img/2.png') ?>" alt=""></a>
                    <h2 class="typo__subheading typo--white">The Beer Academy</h2>
                    <p class="typo__par typo--white">Product landing page created with HTML and vanilla CSS.</p>
                </div>
            </div>

            <div class="card">
                <div class="card__box">
                    <a href="https://aroacain.github.io/simonGame/" target="_blank"><img
                            src="<?php echo get_theme_file_uri('/assets/img/3.png') ?>" alt=""></a>
                    <h2 class="typo__subheading typo--white">Simon Game</h2>
                    <p class="typo__par typo--white">Simon memory game created with Javascript and jQuery.</p>
                </div>
            </div>

            <div class="card">
                <div class="card__box">
                    <a href="https://aroacain.github.io/tailwind-porfolio/" target="_blank"><img
                            src="<?php echo get_theme_file_uri('/assets/img/1.png') ?>" alt=""></a>
                    <h2 class="typo__subheading typo--white">Tailwind Portfolio</h2>
                    <p class="typo__par typo--white">Portfolio created with Tailwind.</p>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

<!-- Contact form -->
<section class="contact" id="contact">
    <?php echo apply_shortcodes( '[contact-form-7 id="22" title="Contact form 1"]' ); ?>
</section>

<!-- Scroll up button -->
<div class="scroll-up-btn show">
    <i class="fas fa-angle-up"></i>
</div>

<!-- footer section start -->
<footer>
    <span>Created By Aroa Cain</a> | <span class="far fa-copyright"></span>
        <?php echo date("Y"); ?> All rights reserved.</span>
</footer>

<?php
    get_footer();
?>