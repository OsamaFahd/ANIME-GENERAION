<?php 

add_action( 'widgets_init', 'most_widget'); 
function most_widget() {
register_widget( 'most_widget_info' );
}
class most_widget_info extends WP_Widget { 
function most_widget_info () {
                                $this->WP_Widget('most_widget_info', '[K-Theme] Popular Anime', $widget_ops );        } 
public function form( $instance ) {
if ( isset( $instance[ 'name' ]) && isset ($instance[ 'total' ]) ) {
$name = $instance[ 'name' ];
$total = $instance[ 'total' ];
}
else {
$name = __( '', 'srs_widget_title' );
$total = __( '', 'srs_widget_title' );
} ?>
<p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name );?>" /></p>
<p>Display: <input class="widefat" name="<?php echo $this->get_field_name( 'total' ); ?>" type="number" min="5" value="<?php echo esc_attr( $total ); ?>" /></p> 
<?php
} 
function update($new_instance, $old_instance) { 
$instance = $old_instance; 
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : ''; 
$instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : ''; 
return $instance; 
}  
function widget($args, $instance) {
extract($args);
echo $before_widget;
$name = apply_filters( 'widget_title', $instance['name'] );
$total = empty( $instance['total'] ) ? '&nbsp;' : $instance['total'];
if ( !empty( $name ) ) { echo "<h3>" . $name . "</h3>"; };
echo "<div class='bungkus'>";
$i = 0;$popularanime = new WP_Query( array( 'posts_per_page' => $total, 'post_type' => 'anime', 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num' ) ); while ( $popularanime->have_posts() ) : $popularanime->the_post(); ?>
<?php $i++ ?>

<div class="xpoplr">
	<div class="lim">
	<div class="tums">
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
	<?php if(has_post_thumbnail()){ ?>
    <?php the_post_thumbnail(); ?>
	<?php }else{ ?>
	<img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" title="<?php the_title(); ?>" />
	<?php } ?>
	</a>
	</div>
	</div>
	<div class="rim">
	<span class="title">
	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</span>
	<span class="latest">
	<div class="qw"><i class="fa fa-star"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_skor', true ); echo $meta; ?></div>
	<div class="qw"><i class="fa fa-play-circle"></i> <?php $meta = get_post_meta( get_the_ID(), 'snap_eps', true ); echo $meta; ?> Episode</div>
	</span>
	<span class="latest"><?php echo get_the_term_list($post->ID, 'genre', '', ', ', '');?></span>
	</div>
</div>

<?php wp_reset_query(); ?>
<?php endwhile;
echo "</div>";
echo $after_widget; //Widget ends printing information
} }

add_action( 'widgets_init', 'ongoing_widget'); 
function ongoing_widget() {
register_widget( 'ongoing_widget_info' );
}
class ongoing_widget_info extends WP_Widget { 
function ongoing_widget_info () {
                                $this->WP_Widget('ongoing_widget_info', '[K-Theme] Ongoing Anime', $widget_ops );        } 
public function form( $instance ) {
if ( isset( $instance[ 'name' ]) && isset ($instance[ 'total' ]) ) {
$name = $instance[ 'name' ];
$total = $instance[ 'total' ];
}
else {
$name = __( '', 'srs_widget_title' );
$total = __( '', 'srs_widget_title' );
} ?>
<p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name );?>" /></p>
<p>Display: <input class="widefat" name="<?php echo $this->get_field_name( 'total' ); ?>" type="number" min="5" value="<?php echo esc_attr( $total ); ?>" /></p> 
<?php
} 
function update($new_instance, $old_instance) { 
$instance = $old_instance; 
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : ''; 
$instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : ''; 
return $instance; 
}  
function widget($args, $instance) {
extract($args);
echo $before_widget;
$name = apply_filters( 'widget_title', $instance['name'] );
$total = empty( $instance['total'] ) ? '&nbsp;' : $instance['total'];
if ( !empty( $name ) ) { echo "<h3>" . $name . "</h3>"; };
echo "<div class='bungkus' style='max-height:300px;overflow:auto;'>";
$i = 0;$popularanime = new WP_Query( array( 'posts_per_page' => $total, 'post_type' => 'anime', 'meta_key' => 'snap_status', 'meta_value' => 'ongoing', 'orderby' => 'title', 'order' => 'ASC', ) ); while ( $popularanime->have_posts() ) : $popularanime->the_post(); ?>
<?php $i++ ?>

<div class="xongon">
<span class="title">
<a class="series" rel="<?php the_ID(); ?>" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</span>
<span class="latest">
<?php $slug = get_the_ID($post->ID, "anime", true); ?>
<?php
$recent = new WP_Query(array(
'showposts' => '1',
'post_type' => 'post',
'meta_key' => 'snap_episode-anime',
'orderby' => 'date',
'meta_key' => 'snap_anime',
'meta_value' => $slug
)); if($recent->have_posts()) : while($recent->have_posts()) : $recent->the_post(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Episode <?php $meta = get_post_meta( get_the_ID(), 'snap_episode-anime', true ); echo $meta; ?><?php wp_reset_postdata(); ?></a>
<?php endwhile; else : ?>
<a href="#">Belum Rilis</a>
<?php endif; ?>
</span>
</div>

<?php wp_reset_query(); ?>
<?php endwhile;
echo "</div>";
echo $after_widget; //Widget ends printing information
} }

add_action( 'widgets_init', 'top_anime_widget'); 
function top_anime_widget() {
register_widget( 'top_anime_widget_info' );
}
class top_anime_widget_info extends WP_Widget { 
function top_anime_widget_info () {
                                $this->WP_Widget('top_anime_widget_info', '[K-Theme] Footer - Top Anime', $widget_ops );        } 
public function form( $instance ) {
if ( isset( $instance[ 'name' ]) && isset ($instance[ 'total' ]) ) {
$name = $instance[ 'name' ];
$total = $instance[ 'total' ];
}
else {
$name = __( '', 'srs_widget_title' );
$total = __( '', 'srs_widget_title' );
} ?>
<p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name );?>" /></p>
<p>Display: <input class="widefat" name="<?php echo $this->get_field_name( 'total' ); ?>" type="number" min="5" value="<?php echo esc_attr( $total ); ?>" /></p> 
<?php
} 
function update($new_instance, $old_instance) { 
$instance = $old_instance; 
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : ''; 
$instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : ''; 
return $instance; 
}  
function widget($args, $instance) {
extract($args);
echo $before_widget;
$name = apply_filters( 'widget_title', $instance['name'] );
$total = empty( $instance['total'] ) ? '&nbsp;' : $instance['total'];
if ( !empty( $name ) ) { echo "<h2><span>" . $name . "</span></h2>"; };
echo "<ul>";
$i = 0;$popularanime = new WP_Query( array( 'posts_per_page' => $total, 'post_type' => 'anime', 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num' ) ); while ( $popularanime->have_posts() ) : $popularanime->the_post(); ?>
<?php $i++ ?>

<li>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</li>

<?php wp_reset_query(); ?>
<?php endwhile;
echo "</ul>";
echo $after_widget; //Widget ends printing information
} }

add_action( 'widgets_init', 'recent_tv_widget'); 
function recent_tv_widget() {
register_widget( 'recent_tv_widget_info' );
}
class recent_tv_widget_info extends WP_Widget { 
function recent_tv_widget_info () {
                                $this->WP_Widget('recent_tv_widget_info', '[K-Theme] Footer - Recent Anime TV', $widget_ops );        } 
public function form( $instance ) {
if ( isset( $instance[ 'name' ]) && isset ($instance[ 'total' ]) ) {
$name = $instance[ 'name' ];
$total = $instance[ 'total' ];
}
else {
$name = __( '', 'srs_widget_title' );
$total = __( '', 'srs_widget_title' );
} ?>
<p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name );?>" /></p>
<p>Display: <input class="widefat" name="<?php echo $this->get_field_name( 'total' ); ?>" type="number" min="5" value="<?php echo esc_attr( $total ); ?>" /></p> 
<?php
} 
function update($new_instance, $old_instance) { 
$instance = $old_instance; 
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : ''; 
$instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : ''; 
return $instance; 
}  
function widget($args, $instance) {
extract($args);
echo $before_widget;
$name = apply_filters( 'widget_title', $instance['name'] );
$total = empty( $instance['total'] ) ? '&nbsp;' : $instance['total'];
if ( !empty( $name ) ) { echo "<h2><span>" . $name . "</span></h2>"; };
echo "<ul>";
$i = 0;$popularanime = new WP_Query( array( 'posts_per_page' => $total, 'post_type' => 'anime', 'meta_key' => 'snap_type', 'meta_value' => 'tv', 'order' => 'date', ) ); while ( $popularanime->have_posts() ) : $popularanime->the_post(); ?>
<?php $i++ ?>

<li>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</li>

<?php wp_reset_query(); ?>
<?php endwhile;
echo "</ul>";
echo $after_widget; //Widget ends printing information
} }

add_action( 'widgets_init', 'recent_movie_widget'); 
function recent_movie_widget() {
register_widget( 'recent_movie_widget_info' );
}
class recent_movie_widget_info extends WP_Widget { 
function recent_movie_widget_info () {
                                $this->WP_Widget('recent_movie_widget_info', '[K-Theme] Footer - Recent Anime Movie', $widget_ops );        } 
public function form( $instance ) {
if ( isset( $instance[ 'name' ]) && isset ($instance[ 'total' ]) ) {
$name = $instance[ 'name' ];
$total = $instance[ 'total' ];
}
else {
$name = __( '', 'srs_widget_title' );
$total = __( '', 'srs_widget_title' );
} ?>
<p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name );?>" /></p>
<p>Display: <input class="widefat" name="<?php echo $this->get_field_name( 'total' ); ?>" type="number" min="5" value="<?php echo esc_attr( $total ); ?>" /></p> 
<?php
} 
function update($new_instance, $old_instance) { 
$instance = $old_instance; 
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : ''; 
$instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : ''; 
return $instance; 
}  
function widget($args, $instance) {
extract($args);
echo $before_widget;
$name = apply_filters( 'widget_title', $instance['name'] );
$total = empty( $instance['total'] ) ? '&nbsp;' : $instance['total'];
if ( !empty( $name ) ) { echo "<h2><span>" . $name . "</span></h2>"; };
echo "<ul>";
$i = 0;$popularanime = new WP_Query( array( 'posts_per_page' => $total, 'post_type' => 'anime', 'meta_key' => 'snap_type', 'meta_value' => 'movie', 'order' => 'date', ) ); while ( $popularanime->have_posts() ) : $popularanime->the_post(); ?>
<?php $i++ ?>

<li>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</li>

<?php wp_reset_query(); ?>
<?php endwhile;
echo "</ul>";
echo $after_widget; //Widget ends printing information
} }

class genre_anime_widget extends WP_Widget {
	public function __construct(){
		$widget_options = array(
			'classname' => 'genre-anime',
			'description' => '[K-Theme] Genre Anime',
		);
		parent::__construct( 'genre-anime', '[K-Theme] Genre Anime', $widget_options );
	}
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		$taxonomy = 'genre';
		$tax_terms = get_terms($taxonomy,'number=100');
		echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
		<div class='genrelimit'><ul class='genrelist'>
		<?php
		foreach ($tax_terms as $tax_term){
		echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "Lihat genre %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
		}
		?>
		</ul></div>
		<?php echo $args['after_widget'];
	}
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		echo '<p>';
		echo '<label for="'.$this->get_field_id( "title" ).'">Judul:</label><br/>';
		echo '<input class="widefat" type="text" id="'.$this->get_field_id( 'title' ).'" name="'.$this->get_field_name( 'title' ).'" value="'.esc_attr( $title ).'" />';
		echo '</p>'; 
	}
}
function register_genre_anime() { 
  register_widget( 'genre_anime_widget' );
}
add_action( 'widgets_init', 'register_genre_anime' );

class top_anime_widget extends WP_Widget {
	public function __construct(){
		$widget_options = array(
			'classname' => 'top-anime',
			'description' => '[K-Theme] Top Anime Ongoing',
		);
		parent::__construct( 'top-anime', '[K-Theme] Top Anime Ongoing', $widget_options );
	}
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		$popularpost = new WP_Query( 
			array( 
				'post_type' => 'anime', 
				'showposts' => '7', 
				'orderby' => 'meta_value_num',
				'meta_key' => 'wpb_post_views_count', 
                'meta_key' => 'snap_status', 
                'meta_value' => 'ongoing'
			)
		);
		echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
		<ul>
		<?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endwhile; ?>
		</ul>
		<?php echo $args['after_widget'];
	}
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		echo '<p>';
		echo '<label for="'.$this->get_field_id( "title" ).'">Judul:</label><br/>';
		echo '<input class="widefat" type="text" id="'.$this->get_field_id( 'title' ).'" name="'.$this->get_field_name( 'title' ).'" value="'.esc_attr( $title ).'" />';
		echo '</p>'; 
	}
}
function register_top_anime() { 
  register_widget( 'top_anime_widget' );
}
add_action( 'widgets_init', 'register_top_anime' );

function pagenavi($before = '', $after = '', $prelabel = '', $nxtlabel = '', $pages_to_show = 10, $always_show = false) {
	global $request, $posts_per_page, $wpdb, $paged;
	if(empty($prelabel)) {
		$prelabel  = '&laquo;';
	}
	if(empty($nxtlabel)) {
		$nxtlabel = '&raquo;';
	}
	$half_pages_to_show = round($pages_to_show/2);
	if (!is_single()) {
		if(!is_category()) {
			preg_match('#FROM\s(.*)\sORDER BY#siU', $request, $matches);		
		} else {
			preg_match('#FROM\s(.*)\sGROUP BY#siU', $request, $matches);		
		}
		$fromwhere = $matches[1];
		$numposts = $wpdb->get_var("SELECT COUNT(DISTINCT ID) FROM $fromwhere");
		$max_page = ceil($numposts /$posts_per_page);
		if(empty($paged)) {
			$paged = 1;
		}
		if($max_page > 1 || $always_show) {
			echo "$before <div class='page'><span class='naviright'>Pages $paged of $max_page</span><span class='navileft'>";
			if ($paged >= ($pages_to_show-1)) {
				echo '<a href="'.get_pagenum_link().'">&laquo; First</a> <strong>...</strong> ';
			}
			previous_posts_link($prelabel);
			for($i = $paged - $half_pages_to_show; $i  <= $paged + $half_pages_to_show; $i++) {
				if ($i >= 1 && $i <= $max_page) {
					if($i == $paged) {
						echo "<a class='now'>$i</a>";
					} else {
						echo ' <a href="'.get_pagenum_link($i).'">'.$i.'</a> ';
					}
				}
			}
			next_posts_link($nxtlabel, $max_page);
			if (($paged+$half_pages_to_show) < ($max_page)) {
				echo ' <strong>...</strong> <a href="'.get_pagenum_link($max_page).'">Last &raquo;</a>';
			}
			echo "</div> $after";
		}
	}
}
?>