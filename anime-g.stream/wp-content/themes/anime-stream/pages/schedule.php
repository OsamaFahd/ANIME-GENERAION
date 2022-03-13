<?php
/*
Template Name: Jadwal Rilis
*/

get_header(); ?>

<div class="mainbox">
<div class="indxbox">

<h1 class='newtitle'><span><?php the_title(); ?></span><span style='float:right;' ><i class="fa fa-calendar"></i></span></h1>

<?php the_content(); ?>

<style type="text/css">
.schlist{float:left;width:49.6%;margin:5px 1px;background:#fff;border-radius:6px;}
.schlist h2{border-left:4px solid #c495ba;border-right:4px solid #c495ba;text-align:center;font-size:13px;padding:5px;background:none repeat scroll 0% 0% #333;color:#FFF;border-radius:3px}
.schlist ul{margin:1px 0px;padding:0px;list-style:none outside none;height:310px;font-size:13px}
.schlist ul li{background:#fff;padding:4px;border:1px solid #DDD;margin:1px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.schlist ul li:nth-child(2n+1){background:none repeat scroll 0% 0% #fafafa;}
@media only screen and ( max-width: 480px ) {
.schlist{width:99.5%}
}
</style>
</div>
</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>