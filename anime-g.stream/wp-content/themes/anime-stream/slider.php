<div id="carousel" data-flickity='{ "autoPlay": true,"wrapAround": true }'>
<?php $recent = new WP_Query("post_type=anime&showposts=8&orderby=rand"); while($recent->have_posts()) : $recent->the_post(); ?>
<li class="item">
<a class="series" rel="<?php the_ID(); ?>" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
<span class="itpe"><?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span><span class="itpeleft"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
<div class="info">
<span class="inijdl"><?php the_title(); ?></span>
</a>
<br>
</div>
</li>
<?php wp_reset_postdata(); ?>
<?php endwhile; ?>
</div>