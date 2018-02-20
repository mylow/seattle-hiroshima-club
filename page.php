<?php get_header(); ?>
<div class="page-everything">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<!-- WP content start -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="h1-header"><?php the_title(); ?></h1>  
        <div class="page-content">
            <?php the_content();?>
            <?
$child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');

if ( $child_pages ) :
    foreach ( $child_pages as $pageChild ) :
        setup_postdata( $pageChild );
        $thumbnail = get_the_post_thumbnail($pageChild->ID, 'thumbnail');
?>
        <div class="child-info">
            <a href="<?=get_permalink($pageChild->ID) ?>" rel="bookmark" title="<?= $pageChild->post_title ?>"><?= $thumbnail ?></a>
          <a href="<?=get_permalink($pageChild->ID) ?>" rel="bookmark" title="<?= $pageChild->post_title ?>"><h2><?= $pageChild->post_title ?></h2></a>
            <?php if (!empty($pageChild->post_excerpt)){
            echo '<p>' . $pageChild->post_excerpt.'</p> ';
            }
            ?>
            <div class="child-a-div">
                <a href="<?=get_permalink($pageChild->ID) ?>" rel="bookmark" class="a-info" title="<?= $pageChild->post_title ?>">Learn More ></a>
            </div>
        </div>
<?
    endforeach;
endif;
?>
        </div>
        <div class="page-sidebar">
            <?php get_sidebar(); ?>
        </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- WP content end -->
<?php get_footer(); ?>