<?php get_header(); ?>


<div class="outermain">
<div class="randomrecom">
<center><h5><i class="fa fa-star" aria-hidden="true"></i> اشهر الانمي <i class="fa fa-star" aria-hidden="true"></i></h5></center>
<div class="clear"></div>
<?php get_template_part('slider'); ?>
</div>
</div>
<div class="mainbox">
<?php get_template_part('animbaru'); ?>

<div class="adsbawah2">
<?php $adsbottom = get_option('adsbottom'); if($adsbottom) { ?>
<?php echo $adsbottom; ?>
<?php } else {} ?>
</div>


<div class="indxbox">
<h1 class='newtitle'><span> اخر الحلقات المنشورة </span><span style='float:right;' ><i class="fa fa-rss"></i></span></h1>


<article class="newepisodecon">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php include (TEMPLATEPATH . '/article.php'); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<strong>Not Found</strong>
<?php endif; ?>
<div class="clearfix"></div>
</article>


</div>


<div class="pagination">
<?php wp_pagenavi(); ?>
</div>







</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>