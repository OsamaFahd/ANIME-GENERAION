<?php
/*
Template Name: Ongoing List
*/

get_header(); ?>

<div class="mainbox">
<div class="indxbox">

<h1 class='newtitle'><span><?php the_title(); ?></span><span style='float:right;' ><i class="fa fa-paper-plane"></i></span></h1>

<div class="arsipnime">
<ul>
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$myposts = array(
    'showposts' => 20,
    'post_type' => 'anime',
    'orderby' => 'title',
    'order' => 'date',
    'meta_key' => 'snap_status', 
    'meta_value' => 'ongoing',
    'paged' => $paged
);
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query($myposts);
?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?> 		
<li>
<div class="anipost">
<div class="thumb">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
</a>
</div>
<div class="left">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
<div class="info">
<span class="sns"><p><?php the_excerpt(); ?></p>
</span>
</div>
</div>
<div class="clear"></div>
<div class="bt"><span class="l"><i class="fa fa-tv"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span><span class="r"><i class="fa fa-play-circle"></i> <?php $slug = get_the_ID($post->ID, "anime", true); ?>
<?php
$recent = new WP_Query(array(
'showposts' => '1',
'post_type' => 'post',
'meta_key' => 'snap_episode-anime',
'orderby' => 'date',
'meta_key' => 'snap_anime',
'meta_value' => $slug
)); if($recent->have_posts()) : while($recent->have_posts()) : $recent->the_post(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Episode <?php $meta = get_post_meta( get_the_ID(), 'snap_episode-anime', true ); echo $meta; ?><?php wp_reset_postdata(); ?></a>
<?php endwhile; else : ?>
<a href="#">Belum Rilis</a>
<?php endif; ?></span></div>
</div>
</li> 
<?php endwhile; ?>
</ul></div>

</div>

<!-- Page Navi -->
<div class="pagination">
<?php wp_pagenavi(); ?>
</div>
<!-- Page Navi End -->
</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>