<?php 
require('../../../wp-blog-header.php');
$target = $_POST["id"]; 
$id = $target;
$post = get_post($id);
setup_postdata($post); ?>
<div class="inzserjdl"><?php the_title(); ?><span style='float:right;' ><i class='fa fa-star'></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span></div>
<div class="inzser">
<?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail(); ?><?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /><?php } ?>
<div class="rapi">
<span><b>الاسم الياباني</b> : <?php $meta = get_post_meta( get_the_ID(), 'snap_japanese', true ); echo $meta; ?></span>
<span><b>النوع</b> : <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span><b>الحالة</b> : <?php $meta = get_post_meta( get_the_ID(), 'snap_status', true ); echo $meta; ?></span>
<span><b>عرض في </b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_aired', true ); echo $meta; ?></span>
<span><b>عدد الحلقات </b> : <?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?></span>
<span><b>المدة </b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_duration', true ); echo $meta; ?></span>
<span><b>الاستديو </b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_studio', true ); echo $meta; ?></span>
<span><?php echo get_the_term_list($post->ID, 'genre', '<b>التصنيف </b>: ', ', '); ?></span>
<div class="sinz"><?php the_excerpt(); ?></div>
</div>
</div>
<?php wp_reset_postdata(); ?>