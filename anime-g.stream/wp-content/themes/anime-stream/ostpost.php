<h1 class='newtitle'><span>OST Terbaru</span><a href="/ost/">View More</a></h1>
<div class="relep"> 
<?php $serial = new WP_Query(array('post_type' => 'ost','showposts' => '4','orderby' => 'date',));if($serial->have_posts()) :while($serial->have_posts()) : $serial->the_post(); ?>
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
<?php endwhile; else : ?>
<center><strong>Tidak ada ost yang tersedia</strong></center>
<?php endif; ?></div>