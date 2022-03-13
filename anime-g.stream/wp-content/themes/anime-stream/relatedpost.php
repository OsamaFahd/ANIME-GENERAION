<div class="infobox">
<?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?>
<h3><?php the_title(); ?></h3>
<div class="infs">
<?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('',array('title' => ''.get_the_title().'')); ?> <?php } else { ?><img src="<?php echo get_image(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /><?php } ?>
<div class="r">
<div class="seno">
<p><?php the_excerpt(); ?></p>
</div>
<span><?php echo get_the_term_list($post->ID, 'type', '<b>Tipe </b>: '); ?></span>
<span><b>Episode </b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?></span>
<span><?php echo get_the_term_list($post->ID, 'status', '<b>Status </b>: '); ?></span>
<span><b>Skor</b> : <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
<span><?php echo get_the_term_list($post->ID, 'genre', '<b>Genre </b>: ', ', '); ?></span>
</div>
</div>
<?php wp_reset_postdata(); ?>
<div class="inr">
<?php 
$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array(
'category__in' => $category_ids,
'posts_per_page'=> 10000,
'caller_get_posts'=>1
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<ul id="epl">';
while( $my_query->have_posts() ) {
$my_query->the_post();?>
<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Episode <?php $meta = get_post_meta( get_the_ID(), 'snap_episode-anime', true ); echo $meta; ?><?php wp_reset_postdata(); ?> Subtitle Indonesia</a>
<?php
}
echo '<li>';
}
}
$post = $orig_post;
wp_reset_query(); ?>
</ul>
</div>
</div>