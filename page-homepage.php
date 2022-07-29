<?php
    get_header();
?>

<div class="home-hero">
    <div class="home-hero__circle"></div>
    <div class="home-hero__text">
        <h1 class="home-hero__heading">Aroa Cain</h1>
        <h2 class="home-hero__subheading">PHP/Wordpress Developer</h2>
    </div>
</div>

<div class="navbar">
    <div class="navbar__menu">
        <?php
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation',
              ));
        ?>
    </div>
</div>

<section class="about utility__bb">
    <div class="container">
        <h1 class="section__heading">About Me</h1>
        <div class="columns">
            <div class="columns__25">
                <img class="container__circle" src="<?php echo get_theme_file_uri('/assets/img/Aroa1.jpg')?>" alt="">
            </div>
            <div class="columns__66 columns__center-aligned">
                <p class="section__par">Hi! My name is Aroa (in case you're wondering, it's pronounced <i>ah-row-ah</i>)
                    and I am a web developer. I am based in Malaga (Spain) and
                    Raleigh (North Carolina). I specialize in developing custom Wordpress websites, themes and
                    plugins. I am fully bilingual English/Spanish.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="skills utility__bb">
    <div class="container">
        <h1 class="section__heading">My Skills</h1>
        <div class="columns">
            <div class="columns__25 columns__center-justified">
                <div class="circle skills__wp">
                    <div class="circle__inner"></div>
                </div>
                <h2 class="section__subheading">HTML5</h2>
                <p class="section__par">Proficient in HTML5, including the use of semantic HTML to create accessible
                    websites.</p>
            </div>
            <div class="columns__25 columns__center-justified">
                <div class="circle skills__wp">
                    <div class="circle__inner"></div>
                </div>
                <h2 class="section__subheading">CSS/SCSS</h2>
                <p class="section__par">Proficient in CSS3 and SCSS, including methodologies such as BEM.</p>
            </div>
            <div class="columns__25 columns__center-justified">
                <div class="circle skills__wp">
                    <div class="circle__inner"></div>
                </div>
                <h2 class="section__subheading">Wordpress</h2>
                <p class="section__par">Extensive knowledge of the Wordpress code base, including theme and plugin
                    development.
                </p>
            </div>
            <div class="columns__25 columns__center-justified">
                <div class="circle skills__wp">
                    <div class="circle__inner"></div>
                </div>
                <h2 class="section__subheading">PHP</h2>
                <p class="section__par">Good knowledge and experience with PHP to create Wordpress sites and maintain
                    Laravel sites.
                </p>
            </div>
            <div class="columns__25 columns__center-justified">
                <div class="circle skills__wp">
                    <div class="circle__inner"></div>
                </div>
                <h2 class="section__subheading">Javascript</h2>
                <p class="section__par">Good working knowledge of Javascript for manipulating the DOM and working with
                    APIs.
                </p>
            </div>
            <div class="columns__25 columns__center-justified">
                <div class="circle skills__wp">
                    <div class="circle__inner"></div>
                </div>
                <h2 class="section__subheading">NPM</h2>
                <p class="section__par">Proficient in the use of NPM for compiling and as a development tool.</p>
            </div>
            <div class="columns__25 columns__center-justified">
                <div class="circle skills__wp">
                    <div class="circle__inner"></div>
                </div>
                <h2 class="section__subheading">Git</h2>
                <p class="section__par">Experience using Git as a collaboration tool and for automatic deployment of
                    sites using hooks.</p>
            </div>
        </div>
    </div>

</section>
<?php
    get_footer();
?>