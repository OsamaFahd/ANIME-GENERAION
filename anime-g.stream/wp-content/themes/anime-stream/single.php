<?php get_header(); ?>

<div class="whitebox">
<div class="postbox">

<h1 class='pagetitit'><span><?php the_title(); ?> مترجمة</span></h1>


<?php if(!empty(rwmb_meta('status-streaming'))){ ?>

<?php
switch($_GET['mirror'])
{ 
default: 
if ($_GET['mirror'] == null ) { ?>
<?php
$i = 0;
$metas = get_post_meta( get_the_ID(), 'embed', true );
foreach ( $metas as $meta )
{ $i++; if ($i == '1') { ?>

<ul class="mirror">
<?php $nem = 0; $ambil = get_post_meta( get_the_ID(), 'embed', true ); foreach ($ambil as $drops) { $nem++ ?>
<li><a href="<?php the_permalink(); ?>?mirror=<?php echo $nem; ?>"><?php $ass = explode(" ",$drops);$ass = str_replace("[","",$ass[0]);echo $ass; ?> </a></li> 
<?php } ?></ul>

<div id="embed_holder"><div class="player-embed" id="pembed"><?php echo do_shortcode( $meta ); ?></div>

<?php } } ?>
<?php } else { ?>
<?php 
$nums = 0; 
$ambils = get_post_meta( get_the_ID(), 'embed', true ); 
foreach ($ambils as $drop) { $nums++; ?>
<?php if ($_GET['mirror'] == $nums ) { ?>

<ul class="mirror">
<?php $nem = 0; $ambil = get_post_meta( get_the_ID(), 'embed', true ); foreach ($ambil as $drops) { $nem++ ?>
<li><a href="<?php the_permalink(); ?>?mirror=<?php echo $nem; ?>"><?php $ass = explode(" ",$drops);$ass = str_replace("[","",$ass[0]);echo $ass; ?> </a></li> 
<?php } ?></ul>
<div id="embed_holder"><div class="player-embed" id="pembed"><?php echo do_shortcode( $drop ); ?></div>
<?php } else {} ?>
<?php } ?>
<?php } ?>
<?php } ?>
<div class="zeeb">
<?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?>
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
<h2><?php the_title(); ?><span style='color:#c74242;float:right;'>#</span> </h2>
<div class='is'>
<span style='color: #fff;background: #676a7d;padding: 4px;font-size: 13px;'><?php $meta = get_post_meta( get_the_ID(), 'snap_status', true ); echo $meta; ?></span>
<span style='color: #fff;background: #676a7d;padding: 4px;font-size: 13px;'><?php echo get_the_term_list($post->ID, 'genre', '', ', '); ?></span>
<p><?php the_excerpt(); ?></p>
<span style='position: relative;top:5px;color: #fff;background: #E00206;padding: 4px;font-size: 13px;'><a href="<?php the_permalink(); ?>">معلومات الانمي</a></span>
</div>
<?php wp_reset_postdata(); ?>
</div>	
<div class="videonavi">
<div class='l'>
<?php previous_post_link( '%link', '« الحلقة السابقة', TRUE ); ?> <?php $meta = get_post_meta( get_the_ID(), 'snap_anime', true ); $post = get_post($meta); setup_postdata($post); ?><a href="<?php the_permalink(); ?>">معلومات الانمي</a><?php wp_reset_postdata(); ?> <?php next_post_link( '%link', 'الحلقة التالية »', TRUE ); ?>
</div>
<div class="r">
<span class="views"><i class="fa fa-eye" aria-hidden="true"></i> <?php $postid = get_the_ID(); echo wpb_get_post_views($postid); ?></span>
</div>
</div>
</div>

<div class='prevnext'>
<div class='fleft'>
<select name="episode" id="selectcog" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
<?php wp_reset_postdata(); ?>
<option value="0">قائمة الحلقات</option>
<?php $valuez = get_post_meta( get_the_ID(), 'snap_anime', true ); ?>
<?php $listseri = new WP_Query( array( 'showposts' => '1000' ,'post_type' => 'post' ,'meta_key' => 'snap_episode-anime', 'meta_value' => 'true', 'orderby' => 'snap_episode-anime','order' => 'DESC', 'meta_key' => 'snap_anime', 'meta_value' => $valuez) ); ?>
<?php while($listseri->have_posts()) : $listseri->the_post(); ?>
<option value="<?php the_permalink(); ?>">الحلقة <?php $meta = get_post_meta( get_the_ID(), 'snap_episode-anime', true ); echo $meta; ?><?php $meta = get_post_meta( get_the_ID(), 'snap_added', true ); echo $meta; ?>
</option>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</select>
</div>
<div class='flir'>
<?php previous_post_link( '%link', '« الحلقة السابقة', TRUE ); ?> <?php next_post_link( '%link', 'الحلقة التالية »', TRUE ); ?>
</div>
</div>

<div style='margin-bottom:10px;'></div>
<?php } ?>

<div class="post-title">
<h2><i class="fa fa-download" aria-hidden="true"></i> تحميل <?php the_title(); ?></h2></div>
<div class="dlarea">
<div class="dlbody">
<?php the_content(); ?>
</div>
</div>



<div class="adsbawah1">
<?php $adsbottom = get_option('adsbottom'); if($adsbottom) { ?>
<?php echo $adsbottom; ?>
<?php } else {} ?>
</div>




<div class="commentarea">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>

</div>
<div style='margin-bottom:10px;'></div>
</div>

<?php get_template_part('sidebar_author'); ?>

<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
<?php get_footer(); ?>