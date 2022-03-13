<a href="<?php the_permalink(); ?>">
<div class="grid3">
<div class="newepisode boxs">
<span class="newepisodefloat left bgblue">
<?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?>
<?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?><?php wp_reset_postdata(); ?></span>
<span class="newepisodefloat right bgwhitetr" title="Episode ke-<?php $meta = get_post_meta( get_the_ID(), 'snap_episode-anime', true ); echo $meta; ?> dari total <?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?><?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?><?php wp_reset_postdata(); ?> episode.">
<?php if( date('U') - get_the_time('U', $post->ID) < 24*60*60 ) : ?><span class="new">New</span><?php endif; ?>
<?php $meta = get_post_meta( get_the_ID(), 'snap_episode-anime', true ); echo $meta; ?>/<?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?><?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?><?php wp_reset_postdata(); ?></span>
<div class="newepisodetitle bgwhitetr">
<span class="inline-block">
<h4><?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?><?php the_title(); ?></h4>
</span>
<div class="hoverother">
<?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?>
<span class="bgred"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
<span class="bggrey50"><?php $meta = get_post_meta( get_the_ID(), 'snap_year', true ); echo $meta; ?></span>
<span class="bgblack"><?php $meta = get_post_meta( get_the_ID(), 'snap_status', true ); echo $meta; ?></span>
</div>
</div>
<div class="thumb">
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
<?php wp_reset_postdata(); ?> </div>
</div>
</div>
</a>