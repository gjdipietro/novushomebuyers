<?php 
/* Template Name: Contact */
?>

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
        <section class="o-container__inner">
            <div class="c-layout">
                <div class="c-layout__content">
                    <?php the_content(); ?>
                </div>
                <aside class="c-layout__aside">
                    <h3>Address</h3>
                    <p>
                        2308 Mt. Vernon Avenue, Suite 259 <br>
                        Alexandria, VA 22301
                    </p>
                    
                    <h3>Hours</h3>
                    <p>Monday - Friday
                    7am to 10pm</p>
                </aside>
            </div>
            
        </section>
    </article>
    
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>