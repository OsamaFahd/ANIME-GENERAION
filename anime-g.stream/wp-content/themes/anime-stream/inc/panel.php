<?php
add_action('admin_menu', 'ktheme_menu');
function ktheme_menu() {
	add_menu_page('Configuration', 'K-Theme', 'administrator','configuration', 'configuration','dashicons-admin-generic',2 );
	add_action( 'admin_init', 'register_ktheme_settings' );
	
}
function register_ktheme_settings() {
	register_setting( 'ktheme-settings', 'logo' );
	register_setting( 'ktheme-settings', 'k_notif' );
	register_setting( 'ktheme-settings', 'k_author' );
	register_setting( 'ktheme-settings', 'k_key' );
	register_setting( 'ktheme-settings', 'k_desc' );
	register_setting( 'ktheme-settings', 'adsidebar' );
	register_setting( 'ktheme-settings', 'adsbottom' );
}
function dashboard() { 
?>
<div class="wrap">
<h2>Dashboard</h2>
</div>
<?php }
function configuration() {
	if(function_exists( 'wp_enqueue_media' )){
		wp_enqueue_media();
	}else{
		wp_enqueue_style('thickbox');
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}
?>
<div class="wrap">
<form method="post" action="options.php" enctype="multipart/form-data">
    <?php settings_fields( 'ktheme-settings' ); ?>
    <?php do_settings_sections( 'ktheme-settings' ); ?>
	<h2><i class="dashicons dashicons-admin-generic"></i> Themes Configuration</h2>
<div class='ts'>
    <table class="form-table">
    	<tr valign="top">
        <th scope="row">Logo</th>
        <td>
        	<?php if(get_option('logo')!=''){ ?><img class="logo_img" src="<?php echo get_option('logo'); ?>" /></br><?php } ?>
		<input class="logo" type="text" name="logo" size="60" value="<?php echo get_option('logo'); ?>">
		<a href="#" class="header_logo_upload button button-primary">Upload</a>
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Image size 325px x 90px</div>
	</td>
        </tr>
      <tr valign="top">
        <th scope="row">Ads Sidebar</th>
        <td><textarea type="text/javascript" name="adsidebar" rows="5" cols="50" value="<?php echo esc_attr( get_option('adsidebar') ); ?>" class="large-text code" placeholder="Place your ads code here (300 x 250)"><?php echo esc_attr( get_option('adsidebar') ); ?></textarea>
		<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Iklan di samping/sidebar</div></td>
        </tr>
      <tr valign="top">
        <th scope="row">Ads Bawah</th>
        <td><textarea type="text/javascript" name="adsbottom" rows="5" cols="50" value="<?php echo esc_attr( get_option('adsbottom') ); ?>" class="large-text code" placeholder="Place your ads code here (728 x 90)"><?php echo esc_attr( get_option('adsbottom') ); ?></textarea>
		<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Iklan di bawah postingan</div></td>
        </tr>
	  <tr valign="top">
		<th scope="row">Notification</th>
	    <td><textarea name="k_notif" size="60" rows="5" cols="80" placeholder="ex. Website Ini Masih Dalam Tahap Pengembangan Jadi Mohon Maaf Jika Ada Bug..." value="<?php echo get_option('k_notif'); ?>"><?php echo esc_attr( get_option('k_notif') ); ?></textarea>
		<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Notification under the menu</div></td>
		</tr>
    </table>  
</div>

<h2>SEO Meta Tags</h2>
<div class='ts'>
    <table class="form-table">
        <tr valign="top">
		   <th scope="row">Author</th>
	<td><textarea name="k_author" size="60" rows="1" cols="50" placeholder="fill this blank ..." value="<?php echo get_option('k_author'); ?>"><?php echo esc_attr( get_option('k_author') ); ?></textarea>
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Author Meta Tags</div></td>
		</tr>
		<tr valign="top">
			<th scope="row">Keywords</th>
	<td><textarea name="k_key" size="60" rows="3" cols="80" placeholder="fill this blank ..." value="<?php echo get_option('k_key'); ?>"><?php echo esc_attr( get_option('k_key') ); ?></textarea>
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Keywords Meta Tags</div></td>
		</tr>
		<tr valign="top">
			<th scope="row">Descripiton</th>
	<td><textarea name="k_desc" size="60" rows="3" cols="80" placeholder="fill this blank ..." value="<?php echo get_option('k_desc'); ?>"><?php echo esc_attr( get_option('k_desc') ); ?></textarea>
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Description Meta Tags</div></td>
		</tr>
    </table>  
</div>

<?php submit_button(); ?>
<script>
		jQuery(document).ready(function($) {
			/*Logo Upload*/
			$('.header_logo_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.logo').val(attachment.url);
					$('.logo_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
			/*Service 1 Image Upload*/
			$('.service_1_image_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.service_1_image').val(attachment.url);
					$('.service_1_image_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
			/*Service 2 Image Upload*/
			$('.service_2_image_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.service_2_image').val(attachment.url);
					$('.service_2_image_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
			/*Service 3 Image Upload*/
			$('.service_3_image_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.service_3_image').val(attachment.url);
					$('.service_3_image_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
		});
</script>
<style type='text/css'>
	.ts {border-radius:5px;padding:10px 20px;border:1px solid #ddd;background:#fff}
</style>
<?php } 
function setup() { ?>

</div>
<?php } ?>