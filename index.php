  <?php get_header(); ?>
    <!-- WP content start -->
<div id="#">
    <div id="#">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <article class="post-excerpt">
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', ');?></small><br>
        <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('thumbnail'); ?></a>
        <?php the_excerpt(''); ?>
        </article>
    <?php endwhile; endif; ?>
        <p>index.php</p>
    </div>
<?php get_sidebar();?>
</div>
<!-- WP content end -->
<?php get_footer(); ?>