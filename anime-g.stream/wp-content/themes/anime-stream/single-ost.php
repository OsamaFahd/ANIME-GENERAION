<?php get_header(); ?>

<div class="whitebox">
<div class="postbox">

<h1 class='pagetitit'><span><?php the_title(); ?></span></h1>

<div class="ostimage">
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
</div>

<div class="juduldataanime"><strong><i class="fa fa-check-square-o" aria-hidden="true"></i> Informasi OST : </strong></span>
</div>
<div class="datanime">
<span><b>Judul</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_judulost', true ); echo $meta; ?></span>
<span><b>Penyanyi</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_singer', true ); echo $meta; ?></span>
<span><b>Format</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_format', true ); echo $meta; ?></span>
<span><b>Tipe</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_tipeost', true ); echo $meta; ?></span>
<span><b>Bitrate</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_bitrate', true ); echo $meta; ?></span>
<span><b>Anime</b>: <?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php wp_reset_postdata(); ?></span>
</div>

<div class="post-title">
<h2><i class="fa fa-download" aria-hidden="true"></i> Download <?php the_title(); ?></h2></div>
<div class="dlarea">
<div class="dlbody">
<?php the_content(); ?>
</div>
</div>

<div class="basabasi">
<p>Terima kasih sudah mendownload <b><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></b> di <?php bloginfo('name'); ?>. Support kami dengan cara membagikan postingan ini di media sosial Facebook dan lainnya</p>
</div>
	
<div class='socialshare'>
<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="sfb"><span class="dashicons dashicons-facebook-alt"></span> Facebook</a>
<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="stw"> <span class="dashicons dashicons-twitter"></span> Twitter</a>
<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="sgp"><span class="dashicons dashicons-googleplus"></span> Google+</a>
</div>
	
<div class="keyings">
<?php the_title(); ?>, OST <?php the_title(); ?>, Download <?php the_title(); ?>, <?php the_title(); ?>,Music <?php the_title(); ?>, <?php the_title(); ?> 480p 720p, Ost <?php the_title(); ?> mp3 terbaru, <?php the_title(); ?> Batch ost, ost anime indo, Full Version OST MP3 320 Kbps, OST Anime Jepang, Download OST Anime Terbaru, <?php bloginfo('name'); ?>
</div>

<div class="commentarea">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>
<div style='margin-bottom:10px;'></div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>