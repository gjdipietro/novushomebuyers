<?php /* Template Name: Residential */ ?>
<?php get_header(); ?>

<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="o-entry">
        <?php the_post_thumbnail(); ?> 
        <header class="header o-entry__title">
            <h1><?php the_title(); ?></h1>
        </header>
        <section class="o-entry__content o-container">
            <?php the_content(); ?>
        </section>
        
        <section class="o-inlay">
            <div class="o-container">
                <h2><?php echo get_post_meta($post->ID, 'offerTitle', true); ?></h2>
                <ul class="c-grid3">
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'offerItem1Title', true); ?></h3>
                        <p class="c-grid3__subtitle"><?php echo get_post_meta($post->ID, 'offerItem1Subtitle', true); ?></p>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'offerItem1Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'offerItem2Title', true); ?></h3>
                        <p class="c-grid3__subtitle"><?php echo get_post_meta($post->ID, 'offerItem2Subtitle', true); ?></p>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'offerItem2Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'offerItem3Title', true); ?></h3>
                        <p class="c-grid3__subtitle"><?php echo get_post_meta($post->ID, 'offerItem3Subtitle', true); ?></p>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'offerItem3Body', true); ?></p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="c-imageCopy c-imageCopy--left">
            <div class="o-container">
                <figure class="c-imageCopy__img">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/3steps.png" alt="3 Steps away from a sale" />
                </figure>
                <div class="c-imageCopy__copy">
                    <h2><?php echo get_post_meta($post->ID, 'optionsTitle', true); ?></h2>
                    <?php echo get_post_meta($post->ID, 'optionsBody', true); ?>
                </div>
            </div>
        </section>

        <?php if ( get_post_meta($post->ID, 'includeContactForm', true) ) {
        include(locate_template('widget-contactform.php'));  
        } ?>
    </article>
    
    
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
    