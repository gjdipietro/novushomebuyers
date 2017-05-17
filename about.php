<?php /* Template Name: About */ ?>
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
            <h2><?php echo get_post_meta($post->ID, 'whyNovusTitle', true); ?></h2>
            <ul class="o-grid3">
                <li class="o-grid3__item">
                    <h3 class="o-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem1Title', true); ?></h3>
                    <p class="o-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem1Body', true); ?></p>
                </li>
                <li class="o-grid3__item">
                    <h3 class="o-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem2Title', true); ?></h3>
                    <p class="o-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem2Body', true); ?></p>
                </li>
                <li class="o-grid3__item">
                    <h3 class="o-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem3Title', true); ?></h3>
                    <p class="o-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem3Body', true); ?></p>
                </li>
            </ul>
        </section>
        
        <section class="u-release">
            <h2 style="text-align:center"> Meet the team </h2>
            <article class="c-profile">
                <div class="c-profile__image">
                    <img src="http://localhost/novushomebuyers/wp-content/uploads/2017/05/BrianNewHeadshot-250x222.jpg" alt="Brian Sapp" />
                </div>
                <div class="c-profile__content">
                    <h3 class="c-profile__identity">
                        <span class="c-profile__identity__name">Brian Sapp</span>
                        <span class="c-profile__identity__position">Principal</span>
                    </h3>
                    <div class="c-profile__text">
                        <p>Before founding Novus Properties, Brian Sapp spent seven years working as a Project Manager in commercial construction. During that time, he worked on projects valued in excess of $15 Million and acquired the leadership skills necessary to become an entrepreneur.His passion and entrepreneurial spirit lead him to real estate, where he discovered Fortune Builders. Through this program, he gained the expertise necessary to navigate any transaction and to have the integrity to follow up on promises. After a few bumps and bruises learning the real estate business, Brian founded Novus Properties to provide real estate solutions.</p>
                    </div>
                </div>
            </article>
            <article class="c-profile">
                <div class="c-profile__image">
                    <img src="http://localhost/novushomebuyers/wp-content/uploads/2017/05/Chris-Headshot-e1446588094232-250x240.jpg" alt="Chris Corigliano" />
                </div>
                <div class="c-profile__content">
                    <h3 class="c-profile__identity">
                        <span class="c-profile__identity__name">Chris Corigliano</span>
                    </h3>
                    <div class="c-profile__text">
                        <p>Chris Corigliano spent several years building a reputation of strong customer service and satisfaction in New York City real estate. He worked diligently to ensure his knowledge and understanding of the fast-paced market would provide a seamless experience for all his clients. With a personal commitment to listening for people’s true motivation and needs, Chris was able to rise in the industry as one of the top earners for his brokerage.Chris’ passion for real estate and desire to excel to new heights led him to the DC Metro area to pursue new challenges. He landed in Arlington, VA where he worked for AvalonBay Communities as a sales consultant. It was here that Chris combined his customer service skills with his sales techniques to once again rise as one of the top agents in the company. He was honored to be a part of an organization such as AvalonBay, but Chris knew his sights were set on something more.</p>
                        <p>It was with this realization that Chris found his new home at Novus Properties. As Director of Client Services, he has the opportunity to use his past experience to help propel Novus Properties forward into the future. Chris is ever thankful for the opportunity to join this unique team and knows that teamwork, with a commitment to success and an unwavering sense of integrity, is a winning formula.</p>
                    </div>
                </div>
            </article>
        </section>



        

    </article>
    <?php if ( get_post_meta($post->ID, 'contactFormID', true) ) {
        include(locate_template('widget-contactform.php'));  
     } ?>
    
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
    






