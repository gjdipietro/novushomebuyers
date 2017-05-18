
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
            <ul class="c-featured__services">
                <li class="c-featured__services__service">
                    <h3 class="c-featured__services__service__title">
                        <?php echo get_post_meta($post->ID, 'featuredCash', true); ?>
                    </h3>
                    <p class="c-featured__services__service__copy"><?php echo get_post_meta($post->ID, 'featuredCashCopy', true); ?></p>
                </li>
                <li class="c-featured__services__service">
                    <h3 class="c-featured__services__service__title">
                        <?php echo get_post_meta($post->ID, 'featuredTenant', true); ?>
                    </h3>
                    <p class="c-featured__services__service__copy"><?php echo get_post_meta($post->ID, 'featuredTenantCopy', true); ?></p>
                </li>
                <li class="c-featured__services__service">
                    <h3 class="c-featured__services__service__title">
                        <?php echo get_post_meta($post->ID, 'featuredLease', true); ?>
                    </h3>
                    <p class="c-featured__services__service__copy"><?php echo get_post_meta($post->ID, 'featuredLeaseCopy', true); ?></p>
                </li>
            </ul>
            <a href="<?php echo get_site_url(); ?>/residential/" class="e-btn e-btn--green e-btn--skew e-btn--large c-featured__header__button">
                <span><?php echo get_post_meta($post->ID, 'featuredButtonText', true); ?> </span>
            </a>
        </hgroup>
        <figure class="c-featured__image"></figure>
    </div>
    
    <div class="c-ribbon"></div>

    <?php include(locate_template('widget-contactform.php'));  ?>

    <div class="c-banner c-banner--centered">
        <div class="o-container__inner">
            <h2 class="c-banner__title"><?php echo get_post_meta($post->ID, 'getStartedHeading', true); ?></h2>
            <p><?php echo get_post_meta($post->ID, 'getStartedCopy', true); ?></p>
            <p class="c-banner__button">
                <a href="<?php echo get_site_url(); ?>/residential/" class="e-btn e-btn--green e-btn--large e-btn--skew">
                    <span><?php echo get_post_meta($post->ID, 'getStartedButton', true); ?></span>
                </a>
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>