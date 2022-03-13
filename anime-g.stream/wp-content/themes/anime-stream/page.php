<?php get_header(); ?>

<div class="whitebox">
<div class="postbox">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class='pagetitit'><span><?php the_title(); ?></span></h1>
<div class="halaman">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; endif; ?>
</div><?php include (TEMPLATEPATH . '/sidebar.php'); ?>
<?php get_footer(); ?>