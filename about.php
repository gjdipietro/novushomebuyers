<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="o-entry">
        <?php the_post_thumbnail(); ?> 
        <header class="header o-entry__title">
            <h1><?php the_title(); ?></h1>
        </header>
        <section class="o-entry__content">
            <?php the_content(); ?>
        </section>
        
        <section class="o-inlay">
            <div class="o-container">
                <h2><?php echo get_post_meta($post->ID, 'whyNovusTitle', true); ?></h2>
                <ul class="c-grid3">
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem1Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem1Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem2Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem2Body', true); ?></p>
                    </li>
                    <li class="c-grid3__item">
                        <h3 class="c-grid3__title"><?php echo get_post_meta($post->ID, 'whyNovusItem3Title', true); ?></h3>
                        <p class="c-grid3__copy"><?php echo get_post_meta($post->ID, 'whyNovusItem3Body', true); ?></p>
                    </li>
                </ul>
            </div>
        </section>
        
        <section class="o-entry__content">
            <div class="u-release">
                <h2 style="text-align:center"> Meet the team </h2>
                
                <article class="c-profile">
                    <div class="c-profile__image">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/BrianNewHeadshot.jpg" alt="Brian Sapp" />
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
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/Ron-Nestico.jpg" alt="Ron Nestico" />
                    </div>
                    <div class="c-profile__content">
                        <h3 class="c-profile__identity">
                            <span class="c-profile__identity__name">Ron Nestico </span>
                        </h3>
                        <div class="c-profile__text">
                            <p>
                                Ron Nestico has 13 years of construction manager experience in commercial construction projects 
                                ranging from $1 million to over $100 million.  This construction experience gave him the knowledge to 
                                estimate the real construction costs that will be required to bring a property to a comparable market value in its area.
                            </p>
                            <p>
                                Ron shares the same entrepreneurial spirit with Brian Sapp, which is why he joined him in this venture at Novus Properties.  
                                He always looks forward to meeting new clients to find a solution to their real estate situation.
                            </p>
                        </div>
                    </div>
                </article>
                
                <article class="c-profile">
                    <div class="c-profile__image">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/Mark-Lester.jpg" alt="Mark Lester Sicam" />
                    </div>
                    <div class="c-profile__content">
                        <h3 class="c-profile__identity">
                            <span class="c-profile__identity__name">Mark Lester Sicam</span>
                        </h3>
                        <div class="c-profile__text">
                            <p>
                            Mark has been on the Business Process Outsourcing industry for 11 years and has handled different 
                            support roles on the fields of Training, Quality and Operations.  He acquired extensive experience 
                            handling customer service, inbound and outbound sales, escalations, technical support, financial services and 
                            communication and core skills.
                            </p>
                            <p>
                            He is committed to support more growth for Novus Properties as one of its associates.  
                            He is thankful to have been chosen to play an important role on this venture and is always 
                            looking forward to bring more success to the team.
                            </p>
                        </div>
                    </div>
                </article>
                
                
                <article class="c-profile">
                    <div class="c-profile__image">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2017/05/shey-e1495838969178.jpg" alt="Shey Jusi" />
                    </div>
                    <div class="c-profile__content">
                        <h3 class="c-profile__identity">
                            <span class="c-profile__identity__name">Shey Jusi</span>
                        </h3>
                        <div class="c-profile__text">
                            <p>
                                Shey Jusi is the Customer Service Representative for Novus Home Buyers that has 8 years of experience in the field.  
                                In addition, she has been active with PPC campaigns since 2010 and is a Certified Google AdWords Partner.  
                                Shey also has experience working as a directory assistant, sales specialist, and a financial service representative.  
                                Shey is a team player that enjoys being a part of an organization where she can use her skills and learn new processes.
                            </p>
                        </div>
                    </div>
                </article>
                

            </div>
        </section>

    </article>
    <?php if ( get_post_meta($post->ID, 'contactFormID', true) ) {
        include(locate_template('widget-contactform.php'));  
     } ?>
    
    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
    






