<div class="bwc"><h3><span>   أحدث الانمي   </span><a href="/anime-list/"> مشاهدة المزيد </a></h3>
<div class="box">
<?php $serial = new WP_Query(array('post_type' => 'anime','showposts' => '4','orderby' => 'date',));if($serial->have_posts()) :while($serial->have_posts()) : $serial->the_post(); ?>			
<div class="fld">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<span class="fscr"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
<span class="ftpe"><?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
<h2><span><?php the_title(); ?> مترجم</span></h2>
</a>
</div>
<?php endwhile; else : ?>
Tidak ada serial anime yang tersedia
<?php endif; ?>
</div></div>