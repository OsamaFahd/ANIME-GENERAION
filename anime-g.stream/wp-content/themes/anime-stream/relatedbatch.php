<div id="carousel" data-flickity='{ "autoPlay": true,"wrapAround": true }'>
<?php $recent = new WP_Query("post_type=batch&showposts=8&orderby=rand"); while($recent->have_posts()) : $recent->the_post(); ?>
<li class="item">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
<?php
$images = rwmb_meta( 'snap_cover', 'size=100' );
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
    }
}
?>
<span class="itpe"><?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span class="itpeleft"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
<div class="info">
<span class="inijdl"><?php the_title(); ?></span>
</a>
<br>
</div>
</li>
<?php wp_reset_postdata(); ?>
<?php endwhile; ?>
</div>