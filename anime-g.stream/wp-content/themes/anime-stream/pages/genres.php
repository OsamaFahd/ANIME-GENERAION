<?php
/*
Template Name: Genres Anime
*/
?>
<?php get_header(); ?>

<div class="whitebox">
<div class="postbox">

<h1 class='pagetitit'><span><?php the_title(); ?></span></h1>
<ul class="genres">
<li>

<?php
//list terms in a given taxonomy
$taxonomy = 'genre';
$tax_terms = get_terms($taxonomy);
?>
<?php
foreach ($tax_terms as $tax_term) {
echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "شاهد جميع الانميات التي بهذا التصنيف %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
}
?>
</li></ul>
</div>

</div><?php include (TEMPLATEPATH . '/sidebar.php'); ?>
<?php get_footer(); ?>