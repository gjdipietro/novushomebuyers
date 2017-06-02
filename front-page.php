
<?php get_header(); ?>
<style type="text/css">
    .c-featured__image {
        background-image: url(<?php the_post_thumbnail_url( $size ); ?>);
    }
</style>
<section id="content" role="main">
    <div class="c-featured">
        <hgroup class="c-featured__header">
            <h1 class="c-featured__header__title" id="site-description"><?php bloginfo( 'description' ); ?></h1>
            
            <a href="<?php echo get_site_url(); ?>/residential/" class="e-btn e-btn--green e-btn--skew e-btn--large c-featured__header__button">
                <span><?php echo get_post_meta($post->ID, 'featuredButtonText', true); ?> </span>
            </a>
        </hgroup>
        <figure class="c-featured__image"></figure>
    </div>
    
    <div class="c-ribbon"></div>
    
    <section class="o-inlay o-inlay--tight">
        <div class="o-container">
            <header>
                <h2 class="c-banner__title"><?php echo get_post_meta($post->ID, 'getStartedHeading', true); ?></h2>
                <p><?php echo get_post_meta($post->ID, 'getStartedCopy', true); ?></p>
            </header>
            <ul class="c-grid3">
                <li class="c-grid3__item">
                    <h3 class="c-grid3__title">
                        <?php echo get_post_meta($post->ID, 'featuredCash', true); ?>
                    </h3>
                    <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'featuredCashCopy', true); ?></p>
                </li>
                <li class="c-grid3__item">
                    <h3 class="c-grid3__title">
                        <?php echo get_post_meta($post->ID, 'featuredTenant', true); ?>
                    </h3>
                    <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'featuredTenantCopy', true); ?></p>
                </li>
                <li class="c-grid3__item">
                    <h3 class="c-grid3__title">
                        <?php echo get_post_meta($post->ID, 'featuredLease', true); ?>
                    </h3>
                    <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'featuredLeaseCopy', true); ?></p>
                </li>
            </ul>
        </div>
    </section>

    <?php if ( get_post_meta($post->ID, 'includeContactForm', true) ) {
        include(locate_template('widget-contactform.php'));  
    } ?>

    
</section>

<?php get_footer(); ?>