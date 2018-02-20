<?php get_header(); ?>
    <!-- WP content start -->
<div id="#">
    <div id="#">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <small>Posted in <?php the_category();?></small>
    <?php the_post_thumbnail('large');?>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
    <p>single.php</p>
    </div>
<?php get_sidebar();?>
</div>
<!-- WP content end -->
<?php get_footer(); ?>