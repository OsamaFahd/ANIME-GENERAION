<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes )
{
	$prefix = 'snap_';
	$meta_boxes[] = array(
		'id' => 'animeinfo',
		'title' => __( 'Informasi Anime', 'meta-box' ),
		'pages' => array( 'anime', 'batch' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'id' => $prefix . 'cover',
				'type' => 'image_advanced',
				'name' => esc_html__( 'خلفية الانمي' ),
				'desc' => esc_html__( 'ادخل خلفية للانمي' ),
				'max_file_uploads' => '1',
				'max_status' => false,
			),
			array(
				'name'  => __( 'الاسم الانجليزي', 'meta-box' ),
				'id'    => "{$prefix}jdlanime",
				'desc'  => __( 'ادخل الاسم الرسمي كما في MAL', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'الاسم الياباني', 'meta-box' ),
				'id'    => "{$prefix}japanese",
				'desc'  => __( 'الاسم الياباني الرسمي كما في MAL', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'     => __( 'نوع الانمي', 'meta-box' ),
				'id'       => "{$prefix}type",
				'type'     => 'select',
				'options'  => array(
					'TV' => __( 'مسلسل تلفازي', 'meta-box' ),
					'فيلم' => __( 'فيلم', 'meta-box' ),
                    			'BD' => __( 'مسلسل بلوراي', 'meta-box' ),
					'اوفا' => __( 'اوفا', 'meta-box' ),
					'اونا' => __( 'اونا', 'meta-box' ),
					'SP' => __( 'حلقة خاصة', 'meta-box' ),

				),
				'multiple'    => false,
				'std'         => 'TV',
			),
			array(
				'name'     => __( 'الحالة', 'meta-box' ),
				'id'       => "{$prefix}status",
				'type'     => 'select',
				'options'  => array(
					'يعرض الان' => __( 'يعرض الان', 'meta-box' ),
					'مكتمل' => __( 'مكتمل', 'meta-box' ),
				),
				'multiple'    => false,
				'std'         => 'Ongoing',
			),
			array(
				'name'  => __( 'السنة', 'meta-box' ),
				'id'    => "{$prefix}year",
				'desc'  => __( 'سنة الاصدار', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'الحلقات', 'meta-box' ),
				'id'    => "{$prefix}eps",
				'desc'  => __( 'عدد الحلقات', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'المدة', 'meta-box' ),
				'id'    => "{$prefix}duration",
				'desc'  => __( 'مدة الحلقة\متوسط مدة الحلقات\مدة الفلم', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'وقت العرض', 'meta-box' ),
				'id'    => "{$prefix}aired",
				'desc'  => __( 'بداية وانتهاء العرض', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Studio', 'meta-box' ),
				'id'    => "{$prefix}studio",
				'desc'  => __( 'Studio', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'التصنيف العمري', 'meta-box' ),
				'id'    => "{$prefix}skor",
				'desc'  => __( 'التصنيف العمري', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name' => __('العرض التوضيحي تشغيل/ايقاف', 'textdomain'),
				'id'   => "{$prefix}trailer-status",
				'type' => 'checkbox',
				'desc' => 'تشغيل/ايقاف',
				'std'  => 0,
			),
			array(
				'name' => __( 'العرض التوضيحي للانمي', 'meta-box' ),
				'id'   => "{$prefix}trailer",
				'desc'  => __( 'Input "src" trailer video from embed', 'meta-box' ),
				'type' => 'oembed',
			),
         )			
	);
	$meta_boxes[] = array(
		'id' => 'episode-info',
		'title' => __( 'Episode Info', 'meta-box' ),
	        'pages' => array( 'post' ),
		'fields' => array(
			array(
				'type' => 'heading',
				'name' => __('Data Episode Anime', 'textdomain'),
			),
			array(
				'name' => __( 'رقم الحلقة', 'meta-box' ),
				'id'   => "{$prefix}episode-anime",
				'desc'  => __( 'ادخل رقم الحلقة', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Tambahan', 'meta-box' ),
				'id'    => "{$prefix}added",
				'desc'  => __( 'Tambahan Episode', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'    => __( 'الانمي', 'meta-box' ),
				'id'      => "{$prefix}anime",
				'type'    => 'post',

				// Post type
				'post_type' => 'anime',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type' => 'select_advanced',
				// Query arguments (optional). No settings means get all published posts
				'query_args' => array(
					'post_status'    => 'publish',
					'orderby'	 => 'title',
					'order'		 => 'ASC',
					'posts_per_page' => - 1,
				)
			),
			array(
				'id' => '{$prefix}credit',
				'desc' => 'Input the name of the source',
				'name' => __('Credit Name', 'textdomain'),
				'type'  => 'text',
			),			
		)
	);
	$meta_boxes[] = array(
		'id' => 'batch',
		'title' => __( 'Batch', 'meta-box' ),
	        'pages' => array( 'batch' ),
		'fields' => array(
		    array(
				'name'    => __( 'Streaming Anime', 'meta-box' ),
				'id'      => "{$prefix}anime",
				'type'    => 'post',

				// Post type
				'post_type' => 'anime',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type' => 'select_advanced',
				// Query arguments (optional). No settings means get all published posts
				'query_args' => array(
					'post_status'    => 'publish',
					'orderby'	 => 'title',
					'order'		 => 'ASC',
					'posts_per_page' => - 1,
				)
			),
			array(
				'name'  => __( 'Link Download', 'meta-box' ),
				'id'    => "{$prefix}download-url",
				'desc'  => __( 'Url download batch', 'meta-box' ),
				'type'  => 'wysiwyg',
			),
		)
	);
	$meta_boxes[] = array(
		'id' => 'ostinfo',
		'title' => __( 'OST Info', 'meta-box' ),
	        'pages' => array( 'ost' ),
		'fields' => array(
			array(
				'name' => __( 'Judul', 'meta-box' ),
				'id'   => "{$prefix}judulost",
				'desc'  => __( 'Masukkan Judul OST', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name' => __( 'Format', 'meta-box' ),
				'id'   => "{$prefix}format",
				'desc'  => __( 'Masukkan Format OST', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Penyanyi', 'meta-box' ),
				'id'    => "{$prefix}singer",
				'desc'  => __( 'Nama Penyanyi', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'     => __( 'Tipe OST', 'meta-box' ),
				'id'       => "{$prefix}tipeost",
				'type'     => 'select',
				'options'  => array(
					'Opening' => __( 'Opening', 'meta-box' ),
					'Ending' => __( 'Ending', 'meta-box' ),
					'Insert Song' => __( 'Insert Song', 'meta-box' ),
				),
				'multiple'    => false,
			),
			array(
				'name'  => __( 'Bitrate', 'meta-box' ),
				'id'    => "{$prefix}bitrate",
				'desc'  => __( 'Bitrate OST', 'meta-box' ),
				'type'  => 'text',
			),
			array(
				'name'    => __( 'Anime', 'meta-box' ),
				'id'      => "{$prefix}anime",
				'type'    => 'post',

				// Post type
				'post_type' => 'anime',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type' => 'select_advanced',
				// Query arguments (optional). No settings means get all published posts
				'query_args' => array(
					'post_status'    => 'publish',
					'orderby'	 => 'title',
					'order'		 => 'ASC',
					'posts_per_page' => - 1,
				)
			),
			array(
				'name'  => __( 'Link Download', 'meta-box' ),
				'id'    => "{$prefix}download-url",
				'desc'  => __( 'Url download ost', 'meta-box' ),
				'type'  => 'url',
			),
		)
		
	);
	return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'kdezign_metabox');
function kdezign_metabox($metabox){
	$metabox[] = array(
		'title' => __('Streaming Post', 'textdomain'),
		'post_types' => 'post',
		'fields' => array(
			array(
				'type' => 'heading',
				'name' => __('Data Streaming Anime', 'textdomain'),
			),
			array(
				'name' => __('حالة المشاهدة المباشرة', 'textdomain'),
				'id'   => "status-streaming",
				'type' => 'checkbox',
				'desc' => 'On/Off',
				'std'  => 0,
			),
			array(
				'name'  => __( 'كود التضمين', 'meta-box' ),
				'id'    => "embed",
				'desc'  => __( 'Anime id=', 'meta-box' ),
				'type'  => 'textarea',
				'clone' => 'true',
			),
		),
	);
	return $metabox;
}