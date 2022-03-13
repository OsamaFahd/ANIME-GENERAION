<?php get_header(); ?>

<div class="mainbox">
<div class="indxbox">
<h1 class='newtitle'><span> نتائج البحث</span><span style='float:right;' ><i class="fa fa-search"></i></span></h1>

<?php if (have_posts()) : ?>
<!-- Post -->
<div class="arsipnime">
<ul>
<?php while(have_posts()) : the_post(); if(get_post_type(get_the_ID()) == "anime"){ ?>
<li>
<div class="anipost">
<div class="thumb">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php if(has_post_thumbnail()){ ?>
<?php the_post_thumbnail(); ?>
<?php }else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
</a>
</div>
<div class="left">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
<div class="info">
<span class="sns"><p><?php the_excerpt(); ?></p>
</span>
</div>
</div>
<div class="clear"></div>
<div class="bt"><span class="l"><i class="fa fa-tv"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span><span class="r"><i class="fa fa-play-circle"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?> Episode</span></div>
</div>
</li> 
<?php } endwhile; ?>
<?php wp_reset_postdata(); ?>
</ul></div>

<?php while(have_posts()) : the_post(); if(get_post_type(get_the_ID()) == "batch"){ ?>
 <div class="tahu">
<div class="thumbz">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<div class="limz">
<?php if ( has_post_thumbnail() ) { ?>
<?php the_post_thumbnail('thumb', array( 'title' => get_the_title() )); ?>
<?php } else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
<?php } ?>
<?php if( date('U') - get_the_time('U', $post->ID) < 24*60*60 ) : ?><span class='new'>New</span><?php endif; ?>
<span class="tptp"><i class="fa fa-tv"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_type', true ); echo $meta; ?></span>
<span class="btgbtg"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></span>
</div>
</a>
</div>
<div class="inf">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<span><i class="fa fa-user"></i> Posted By : <b style="font-weight:400;color:#777;">Admin</b></span>
<span><i class="fa fa-calendar-plus-o"></i> Released on : <b style="font-weight:400;color:#777;"><?php the_time('F jS, Y'); ?></b></span>
<span><i class="fa fa-tag"></i> Genre : <b style="font-weight:400;color:#777;"><?php
echo get_the_term_list($post->ID, 'genres', '', ', ', '');
?></b></span>
<span><i class="fa fa-th-large"></i> Year : <b style="font-weight:400;color:#777;"><?php $meta = get_post_meta( get_the_ID(), 'snap_year', true ); echo $meta; ?></b></span>
</div>
</div>
<?php } endwhile; ?>
<?php wp_reset_postdata(); ?>

<div class="relep">
<?php while(have_posts()) : the_post(); if(get_post_type(get_the_ID()) == "ost"){ ?>
<div class="tere"> 
<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"> 
<div class="limiter"><?php if ( has_post_thumbnail() ) { ?>
<?php the_post_thumbnail('thumb'); ?>
<?php } else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/inc/img/no-image.png" />
<?php } ?>
</div> 
<h2><?php the_title(); ?></h2>
</a> 
<div class="teredt"><?php the_time('j F Y'); ?></div>
</div>
<?php } endwhile; ?>
<?php wp_reset_postdata(); ?>
</div>

<?php else : ?>
<div class="404">
<center>
<strong>لم يتم العثور على الانمي الذي تريده</strong>
<div style='margin-bottom:20px;'></div>
<img style='max-width: 100%;height: auto;' src="<?php echo get_template_directory_uri(); ?>/img/404.png" />
</center>
</div>
<?php endif; ?>

<!-- Post End -->

</div>

<!-- Page Navi -->
<div class="pagination">
<?php wp_pagenavi(); ?>
</div>
<!-- Page Navi End -->
</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>