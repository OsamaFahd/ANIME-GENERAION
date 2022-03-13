<?php
/*
Template Name: ost List
*/

get_header(); ?>
<div class="whitebox">
<div class="postbox">

<h1 class='pagetitit'><span><?php the_title(); ?></span><span style='float:right;' ><i class="fa fa-list"></i></span></h1>
<div class="nav_apb">
        <a href="#A">A</a>
        <a href="#B">B</a>
        <a href="#C">C</a>
        <a href="#D">D</a>
        <a href="#E">E</a>
        <a href="#F">F</a>
        <a href="#G">G</a>
        <a href="#H">H</a>
        <a href="#I">I</a>
        <a href="#J">J</a>
        <a href="#K">K</a>
        <a href="#L">L</a>
        <a href="#M">M</a>
        <a href="#N">N</a>
        <a href="#O">O</a>
        <a href="#P">P</a>
        <a href="#Q">Q</a>
        <a href="#R">R</a>
        <a href="#S">S</a>
        <a href="#T">T</a>
        <a href="#U">U</a>
        <a href="#V">V</a>
        <a href="#W">W</a>
        <a href="#X">X</a>
        <a href="#Y">Y</a>
        <a href="#Z">Z</a>
</div>
<div class="anime-list3">
<?php $paged=(get_query_var('paged'))?get_query_var('paged'):1;$args=array('posts_per_page'=>4000,'post_type'=>'ost','orderby'=>'title','order'=>'ASC','paged'=>$paged);query_posts($args);if(have_posts()){$in_this_row=0;while(have_posts()){the_post();$first_letter=strtoupper(substr(apply_filters('the_title',$post->post_title),0,1));if($first_letter!=$curr_letter){if(++$post_count>1){end_prev_letter();}start_new_letter($first_letter);$curr_letter=$first_letter;}if(++$in_this_row>$posts_per_row){end_prev_row();start_new_row();++$in_this_row;}?>  
<div class='row-cells2'>
<li><i class="fa fa-music"></i> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
</div> 
<?php }end_prev_letter();?> 
<div class="navigation"> 
<div class="alignleft"><?php next_posts_link('« Higher Letters')?></div> 
<div class="alignright"><?php previous_posts_link('Lower Letters »')?></div> </div> 
<?php }else{echo "<h2>Sorry, no posts were found!</h2>";}?> 
</div>
</div> 
</div> 
<?php include(TEMPLATEPATH.'/sidebar.php');?> 
 
<?php get_footer();?> 
<?php function end_prev_letter(){end_prev_row();echo "<div class='clear'></div></div>
<!-- End of bariskelom -->\n";}function start_new_letter($letter){echo "<div class='letter-group'>\n";echo "\t<div class='letter-cell2'><a name='$letter'>$letter</a></div>\n";start_new_row($letter);}function end_prev_row(){echo "\t</div>
<!-- End row-cells -->\n";}function start_new_row(){global $in_this_row;$in_this_row=0;echo "\t<div class='letter-name'>\n";}?>