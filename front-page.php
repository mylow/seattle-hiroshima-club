  <?php get_header(); ?>
    <!-- WP content start -->
<div id="front-page-main-content">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
        <?php the_content(''); // get the home page's content ?>
        <?php endwhile; endif; // end loop one ?>
    
        <div class="front-page-banner">
            <div class="banner-container">
                <h2>Heritage. Education. Community.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet nibh nisl. Mauris ac urna a neque accumsan tempus vel pellentesque sem.</p>
            </div>
        </div>
    
        <div class="grid">
            <figure class="effect-chico">
                <img src="<?php bloginfo('template_directory');?>/images/cta-forest.jpeg"/>
                <figcaption>
                    <h2>Who We Are</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitDuis non mauris libero.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
            <figure class="effect-chico">
                <img src="<?php bloginfo('template_directory');?>/images/cta-lamp.jpg"/>
                <figcaption>
                    <h2>What We Do</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitDuis non mauris libero.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
            <figure class="effect-chico">
                <img src="<?php bloginfo('template_directory');?>/images/cta-building.jpg"/>
                <figcaption>
                    <h2>Get Involved</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitDuis non mauris libero.</p>
                    <a href="#">View more</a>
                </figcaption>			
            </figure>
        </div><!--end grid class-->
    
</div>
<!-- WP content end -->
<?php get_footer(); ?>