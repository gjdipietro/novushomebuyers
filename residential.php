<?php /* Template Name: Residential */ ?>
<?php get_header(); ?>

<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="o-entry">
        <?php the_post_thumbnail(); ?> 
        <header class="header o-entry__title">
            <div class="o-container__inner">
                <h1><?php the_title(); ?></h1>
            </div>
        </header>
        <section class="o-entry__content">
            <div class="o-container__inner">
                <?php the_content(); ?>
            </div>
        </section>
        <section class="o-inlay">
            <h2><?php echo get_post_meta($post->ID, 'offerTitle', true); ?></h2>
            <ul class="o-grid3">
                <li class="o-grid3__item">
                    <h3 class="o-grid3__title"><?php echo get_post_meta($post->ID, 'offerItem1Title', true); ?></h3>
                    <p class="o-grid3__copy"><?php echo get_post_meta($post->ID, 'offerItem1Body', true); ?></p>
                </li>
                <li class="o-grid3__item">
                    <h3 class="o-grid3__title"><?php echo get_post_meta($post->ID, 'offerItem2Title', true); ?></h3>
                    <p class="o-grid3__copy"><?php echo get_post_meta($post->ID, 'offerItem2Body', true); ?></p>
                </li>
                <li class="o-grid3__item">
                    <h3 class="o-grid3__title"><?php echo get_post_meta($post->ID, 'offerItem3Title', true); ?></h3>
                    <p class="o-grid3__copy"><?php echo get_post_meta($post->ID, 'offerItem3Body', true); ?></p>
                </li>
            </ul>
        </section>

        <section class="o-entry__content">
            <div class="o-container__inner">
                <h2><?php echo get_post_meta($post->ID, 'optionsTitle', true); ?></h2>
                <?php echo get_post_meta($post->ID, 'optionsBody', true); ?>
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/3steps.png" />
            </div>
        </section>

    </article>
    <?php if ( get_post_meta($post->ID, 'contactFormID', true) ) {
        include(locate_template('widget-contactform.php'));  
     } ?>
    
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
    