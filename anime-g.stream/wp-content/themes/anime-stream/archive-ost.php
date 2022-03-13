<?php get_header(); ?>

<div class="mainbox">
<div class="indxbox">
<h1 class='newtitle'><span>Semua OST</span><a href="/ost-list/">View Ost List</a></h1>

<!-- Post -->
<div class="relep">
<?php if (have_posts()) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="tere"> 
<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"> 
<div class="limiter"><?php if ( has_post_thumbnail() ) { ?>
<?php the_post_thumbnail('thumb'); ?>
<?php } else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/inc/img/no-image.png" />
<?php } ?>
</div> 
<h2><?php the_title(); ?></h2>
</a> 
<div class="teredt"><?php the_time('j F Y'); ?></div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<strong>Not Found</strong>
<?php endif; ?></div>
</div>
<!-- Post End -->

<!-- Page Navi -->
<div class="pagination">
<?php wp_pagenavi(); ?>
</div>
<!-- Page Navi End -->

<div class="adsbawah2">
<?php $adsbottom = get_option('adsbottom'); if($adsbottom) { ?>
<?php echo $adsbottom; ?>
<?php } else {} ?>
</div>

</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>