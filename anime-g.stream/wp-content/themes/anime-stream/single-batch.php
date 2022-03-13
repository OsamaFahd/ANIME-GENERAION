<?php get_header(); ?>

<div class="whitebox">
<div id="postbox">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="bc">
<div class="limitimg">
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
<div class="ttl">
<h1><?php the_title(); ?></h1>
<div class="gen"><?php echo get_the_term_list($post->ID, 'genres'); ?></div>
</div>
<span class="sscore"><?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
<div class="overlay"></div>
</div>
<div class="bci">
<?php
$images = rwmb_meta( 'snap_cover', 'size=100' );
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
    }
}
?>
</div>
<div class="bottomnav">
<div class="l">
<span class="typ"><?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span class="ssn"><?php $meta = get_post_meta( get_the_ID(), 'snap_year', true ); echo $meta; ?></span>
<span class="wtch"><i class="fa fa-eye" aria-hidden="true"></i> <?php $postid = get_the_ID(); echo wpb_get_post_views($postid); ?></span>
</div>
<div class="r"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="btn facebook">Facebook</a> <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="btn google">Google+</a>
</div>
</div>
</div>


<div class="sinopsis">
<div class="judulsinopsis"><strong><i class="fa fa-book" aria-hidden="true"></i> Sinopsis :</strong>
</div>
<?php the_content(); ?>
</div>

<div class="juduldataanime"><strong><i class="fa fa-check-square-o" aria-hidden="true"></i> Informasi : </strong>
</div>
<div class="datanime">

<span><b>Title</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?></span>
<span><b>Japanese</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_japanese', true ); echo $meta; ?></span>
<span><b>Type</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span><b>Status</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_status', true ); echo $meta; ?></span>
<span><b>Episode</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?></span>
<span><b>Aired</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_aired', true ); echo $meta; ?></span>
<span><b>Studios</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_studio', true ); echo $meta; ?></span>
<span><b>Durasi</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_duration', true ); echo $meta; ?></span>
<span><b>Skor</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
</div>

<div style='margin-bottom:10px;'></div>	

<?php if(!empty(rwmb_meta('snap_trailer-status'))){ ?>
<div class="juduldataanime"><strong><i class="fa fa-youtube-play" aria-hidden="true"></i> Trailer </strong>
</div>
<section class="trailer">
<div class="trailer-responsive">
<iframe width="100%" height="100%" src="<?php echo get_post_meta($post->ID, 'snap_trailer', true); ?>" frameborder="0" allowfullscreen></iframe>
</div>
</section>
<?php } ?>

<div class="post-title">
<h2><i class="fa fa-download" aria-hidden="true"></i> Download <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Subtitle Indonesia</h2></div>
<div class="dlarea">
<div class="dlbody">
<?php
$batch = get_post_meta( get_the_ID(), 'snap_download-url', true );
if( empty( $batch) ) {} else { echo ''; ?>
<?php echo $batch; ?>
<?php echo ''; ?><?php }
?>
</div>
</div>

<div class="basabasi">
<p>Terima kasih sudah download <b><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Sub Indo</a></b> di <?php bloginfo('name'); ?>. Support kami dengan cara membagikan postingan ini di media sosial Facebook dan lainnya</p>
</div>

<?php endwhile; endif; ?>

<h4 class="newtitle"><span>Rekomendasi Batch lainnya</span> <i style="float:right" class="fa fa-gg"></i></h4>
<?php get_template_part('relatedbatch'); ?>

<div class="keyings">
<?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Sub Indo, download <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Sub Indo Batch, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> BD Subtitle Indonesia komplit, download <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Sub indo batch google drive, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> batch subtitle indonesia, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> mp4 batch, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Sub Indo x265, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia bd, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia kurogaze, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia anibatch, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia animeindo, <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia samehadaku , donwload anime <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia batch , donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia sub indo, download <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia batch google drive, download <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia batch KumpulBagi, download <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia batch Mega, download <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia diskokosmiko , donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia MKV 480P , donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia MKV 720P , donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia , donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia anime batch, donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia sub indo, donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia , donwload <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia batch sub indo , download anime <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia , anime <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia , download anime mp4 , mkv , bd sub indo , download anime sub indo , download anime sub indo <?php $meta = get_post_meta( get_the_ID(), 'snap_jdlanime', true ); echo $meta; ?> Batch Subtitle Indonesia, <?php bloginfo('name'); ?>
</div>
</div>

<div class="commentarea">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>
<div style='margin-bottom:10px;'></div>

<?php get_template_part('sidebar_author'); ?>
<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div>
<?php get_footer(); ?>