<?php 
//Template name: Notes

$title = get_field('notes_title');
$subtitle = get_field('notes_subtitle');
$img = get_field('notes_img');
$description = get_field('notes_description');

get_header();

?>

<section class="notes__hero pt-4">
    <div class="container pt-4">
        <div class="row pt-4">
            <div class="col-md-3 col-sm-6 d-flex align-items-center">
                <img class="notes__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/cloud.svg') ?>" alt="cloud">
            </div>
            <div class="col-md-1">
                <img class="notes__hero-img flag" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/flag.svg') ?>" alt="cloud">
            </div>
            <div class="col-md-4 col-sm-12 notes__hero-name text-center">Notes</div>
            <div class="col-md-1">
                <img class="notes__hero-img flag" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/flag.svg') ?>" alt="cloud">
            </div>
            <div class="col-md-3 col-sm-6 d-flex justify-content-end align-items-start">
                <img class="notes__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/cloud.svg') ?>" alt="cloud">
            </div>
        </div>
    </div>
</section>

<section class="notes__content">
    <div class="container">
        <div class="row">
            <div class="col-12 notes__content-title text-center"><?php echo $title ?></div>
            <div class="col-12 notes__content-subtitle text-center"><?php echo $subtitle ?></div>
            <div class="col-12 notes__content-img"><img src="<?php echo $img['url'] ?>" alt=""></div>
            <div class="col-12 notes__content-description text-center"><?php echo $description ?></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>