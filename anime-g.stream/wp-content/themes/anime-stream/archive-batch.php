<?php get_header(); ?>

<div class="mainbox">
<div class="indxbox">
<h1 class='newtitle'><span>Semua Batch</span><a href="/batch-list/">View Batch List</a></h1>

<!-- Post -->
<?php if (have_posts()) : ?>
<?php while ( have_posts() ) : the_post(); ?>
 <div class="tahu">
<div class="thumbz">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<div class="limz">
<?php if ( has_post_thumbnail() ) { ?>
<?php the_post_thumbnail('thumb', array( 'title' => get_the_title() )); ?>
<?php } else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
<?php if( date('U') - get_the_time('U', $post->ID) < 24*60*60 ) : ?><span class='baru'>New</span><?php endif; ?>
<span class="tptp"><i class="fa fa-tv"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span class="btgbtg"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
</div>
</a>
</div>
<div class="inf">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<span><i class="fa fa-tag"></i> Genre : <b style="font-weight:400;color:#777;"><?php
echo get_the_term_list($post->ID, 'genres', '', ', ', '');
?></b></span>
<span><i class="fa fa-user"></i> Posted By : <b style="font-weight:400;color:#777;">Admin</b></span>
<span><i class="fa fa-calendar-plus-o"></i> Released on : <b style="font-weight:400;color:#777;"><?php the_time('F jS, Y'); ?></b></span>
<span><i class="fa fa-th-large"></i> Musim Released : <b style="font-weight:400;color:#777;"><?php $meta = get_post_meta( get_the_ID(), 'snap_year', true ); echo $meta; ?></b></span>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<strong>Not Found</strong>
<?php endif; ?>
<!-- Post End -->


<!-- Page Navi -->
<div class="pagination">
<?php wp_pagenavi(); ?>
</div>
<!-- Page Navi End -->
</div>
</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>