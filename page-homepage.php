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
            <div class="columns__33">
                <img class="container__circle" src="<?php echo get_theme_file_uri('/assets/img/Aroa1.jpg')?>" alt="">
            </div>
            <div class="columns__66 columns__center-aligned">
                <p class="section__par">Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit
                    tempus ardua ridiculus sed magna. Salutantibus vitae elit libero, a pharetra augue. Lorem ipsum
                    dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna
                    aliqua. Me non paenitet nullum festiviorem excogitasse ad hoc. Ambitioni dedisse scripsisse
                    iudicaretur. Unam incolunt Belgae, aliam Aquitani, tertiam. Morbi fringilla convallis sapien, id
                    pulvinar odio volutpat. A communi observantia non est recedendum.</p>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>