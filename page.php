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
                <div class="entry-links"><?php wp_link_pages(); ?></div>
            </div>
        </section>
    </article>
    <?php if ( get_post_meta($post->ID, 'contactFormID', true) ) {
        include(locate_template('widget-contactform.php'));  
     } ?>
    
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>