<?php 
//Template name: Work

$title = get_field('work_title');
$description = get_field('work_description');

get_header();

?>

<section class="work__hero pt-4">
    <div class="container pt-4">
        <div class="row pt-4">
            <div class="col-3 d-flex align-items-center">
                <img class="work__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/cloud.svg') ?>" alt="cloud">
            </div>
            <div class="col-1">
                <img class="work__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/flag.svg') ?>" alt="cloud">
            </div>
            <div class="col-4 work__hero-name text-center">Work</div>
            <div class="col-1">
                <img class="work__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/flag.svg') ?>" alt="cloud">
            </div>
            <div class="col-3 d-flex justify-content-end align-items-start">
                <img class="work__hero-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/cloud.svg') ?>" alt="cloud">
            </div>
        </div>
    </div>
</section>

<section class="work__description mb-5">
    <div class="container resized-container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <img class="work__description-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/nature.svg') ?>" alt="Logo">
            </div>
            <div class="col-12 work__description-title text-center"><?php echo $title ?></div>
            <div class="col-12 work__description-text text-center paragraph"><?php echo $description ?></div>
        </div>
    </div>
</section>

<?php 
$args = array(
    'post_type' => 'trabajos',
    'posts_per_page' => 9,
    'order' => 'ASC',
    'orderby' => 'title'
    /*'tax_query' => array(
        array(
            'taxonomy' => 'categoria-trabajo',
            'field' => 'slug',
            'terms' => 'board' 
    ))*/
);

$works = new WP_Query($args);
?>

<?php if($works->have_posts()){ ?>
    <?php while($works->have_posts()) { 
        $works->the_post();
        $term_list = wp_get_post_terms( get_the_ID(), 'categoria-trabajo');?>
        <section class="works__articles">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 works__articles-img d-flex justify-content-center"> 
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="col-12 works__articles-title text-center"> <?php echo the_title(); ?></div>
                    <div class="col-12 works__articles-category text-center"><?php echo $term_list[0]->name ?></div>
                    <div class="col-12 works__articles-description text-center"><?php echo the_excerpt(); ?></div>
                    <div class="col-12 works__articles-button">
                        <a href="<?php echo the_field('url_to_work'); ?>" target="_blank">View More</a>
                    </div>
                </div>
            <?php  ?>
            </div>
        </section>
    <?php } 
}
?>

<?php get_footer(); ?>