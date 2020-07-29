<?php
/**
 * Layout: views/layouts/app.php
 *
 * The main template file.
 *
 * This is the template that is used for displaying:
 * - posts
 * - single posts
 * - archive pages
 * - search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyApp
 */

$name = get_field('nombre');
$Job = get_field('cargo');
$description = get_field('descripcion');

$one_skill = get_field('primera_habilidad');
$two_skill = get_field('segundad_habilidad');

$contact = get_field('contact');

?>

<section class="home__hero pt-4">
    <div class="container">
        <div class="row">
            <div class="col-3 d-flex align-items-end"><img class="home__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/cloud.svg') ?>" alt="cloud"></div>
            <div class="col-6">
                <div class="home__hero-name text-center"><?php echo $name ?></div>
                <div class="home__hero-job text-center"><?php echo $Job ?></div>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-start"><img class="home__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/cloud.svg') ?>" alt="cloud"></div>
        </div>
        <div class="row d-flex justify-content-center">
            <div col="col-12">
                <img class="home__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/land.svg') ?>" alt="Logo">
            </div>
        </div>
    </div>
</section>

<section class="home__aboutme">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center"><img class="home__aboutme-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/cabin.svg') ?>" alt="Logo"></div>
            <div class="col-12 home__aboutme-hi text-center">Hi</div>
            <div class="col-12 home__aboutme-description text-center paragraph"><?php echo $description ?></div>
            <div class="col-12 line"> <hr> </div>
        </div>
    </div>
</section>

<section class="home__skill">
    <div class="container">
        <div class="row">
            <div class="col-12 home__skill-title text-center"> <h2>What I can do.</h2> </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
                <div class="home__skill-content">
                    <h3 class="home__skill-name"><?php echo $one_skill['titulo'] ?></h3>
                    <p class="paragraph"><?php echo $one_skill['descripcion'] ?></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                <img class="home__skill-img" src="<?php echo $one_skill['imagen']['url'] ?>" alt="Logo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center change_order">
                <img class="home__skill-img" src="<?php echo $two_skill['imagen']['url'] ?>" alt="Logo">
            </div>
            <div class="col-lg-6 col-md-12 d-flex align-items-center">
                <div class="home__skill-content">
                    <h3 class="home__skill-name"><?php echo $two_skill['titulo'] ?></h3>
                    <p class="paragraph"><?php echo $two_skill['descripcion'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

