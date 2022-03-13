<?php get_header(); ?>

<div class="whitebox">
<div id="postbox">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="bc">
<div class="limitimg">
<?php
$images = rwmb_meta( 'snap_cover', 'size=100' );
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
    }
}
?>
<div class="ttl">
<h1><?php the_title(); ?></h1>
<div class="gen"><?php echo get_the_term_list($post->ID, 'genre'); ?></div>
</div>
<div class="overlay"></div>
</div>
<div class="bci">
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
</div>
<div class="bottomnav">
<div class="l">
<span class="typ"><?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span class="ssn">عرض في <?php $meta = get_post_meta( get_the_ID(), 'snap_year', true ); echo $meta; ?></span>
<span class="wtch"><i class="fa fa-eye" aria-hidden="true"></i> <?php $postid = get_the_ID(); echo wpb_get_post_views($postid); ?></span>
</div>
<div class="r"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="btn facebook">Facebook</a> <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="btn google">Google+</a>
</div>
</div>
</div>


<div class="sinopsis">
<div class="judulsinopsis"><strong><i class="fa fa-book" aria-hidden="true"></i> قصة الانمي :</strong></div>
<?php the_content(); ?>
</div>

<div class="juduldataanime"><strong><i class="fa fa-check-square-o" aria-hidden="true"></i> معلومات الانمي : </strong>
</div>
<div class="datanime">

<span><b>اسم الانمي</b>: <?php the_title(); ?></span>
<span><b>الاسم الياباني</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_japanese', true ); echo $meta; ?></span>
<span><b>النوع</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span><b>الحالة</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_status', true ); echo $meta; ?></span>
<span><b>عدد الحلقات</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?> حلقة</span>
<span><b>عرض في</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_aired', true ); echo $meta; ?></span>
<span><b>الاستديو</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_studio', true ); echo $meta; ?></span>
<span><b>المدة</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_duration', true ); echo $meta; ?></span>
<span><b>التصنيف العمري</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
</div>


<div style='margin-bottom:10px;'></div>	

<?php if(!empty(rwmb_meta('snap_trailer-status'))){ ?>
<div class="juduldataanime"><strong><i class="fa fa-youtube-play" aria-hidden="true"></i> العرض المختصر </strong>
</div>
<section class="trailer">
<div class="trailer-responsive">
<iframe width="100%" height="100%" src="<?php echo get_post_meta($post->ID, 'snap_trailer', true); ?>" frameborder="0" allowfullscreen></iframe>
</div>
</section>
<?php } ?>





<div class="post-title">
<h2><i class="fa fa-play-circle" aria-hidden="true"></i> المشاهدة المباشرة <?php the_title(); ?> </h2></div>
<table class="episode">
<tbody>
<?php $slug = get_the_ID($post->ID, "anime", true); ?>
<?php
$recent = new WP_Query(array(
'showposts' => '1000',
'post_type' => 'post',
'meta_key' => 'snap_episode-anime',
'orderby' => 'date',
'meta_key' => 'snap_anime',
'meta_value' => $slug
)); if($recent->have_posts()) : while($recent->have_posts()) : $recent->the_post(); ?>
<tr>
<td class="episode-kolom">
<a href="<?php the_permalink(); ?>"><?php $meta = get_post_meta( get_the_ID(), 'snap_episode-anime', true ); if($meta) { ?>الحلقة <?php echo $meta; ?> مترجمة<?php } ?></a><span style='float:right;' > <a style='background:#E00206;padding: 2px 5px;color:#fff;margin-left:3px;' href="<?php the_permalink(); ?>" target="_blank"><?php echo $meta; ?></a></span> 
</td>
</tr>
<?php endwhile; else : ?>
<tr>
<td class="episode-kolom">
<a>غير متوفر</a>
</td>
</tr>
<?php endif; wp_reset_query(); ?>
</tbody>
</table>




<?php endwhile; endif; ?>

<h4 class="newtitle"><span>انميات مقترحة</span> <i style="float:right" class="fa fa-gg"></i></h4>
<?php get_template_part('slider'); ?>


</div>
<div class="commentarea">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>
</div>
<div style='margin-bottom:10px;'></div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>