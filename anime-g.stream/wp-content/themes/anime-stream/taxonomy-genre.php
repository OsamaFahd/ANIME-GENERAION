<?php get_header(); ?>

<div class="mainbox">
<div class="indxbox">
<h1 class='newtitle'><span>انميات بتصنيف <?php single_tag_title(); ?><?php post_type_archive_title(); ?></span><span style='float:right;' ><i class="fa fa-folder-open"></i></span></h1>

<!-- Post -->
<div class="arsipnime">
<ul>
<?php if (have_posts()) : ?>
<?php while ( have_posts() ) : the_post(); ?>
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
<div class="bt"><span class="l"><i class="fa fa-tv"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span><span class="r"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span></div>
</div>
</li> 
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<strong>Not Found</strong>
<?php endif; ?>
</ul></div>
<!-- Post End -->

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