<div class="sidebar">
<div class="section"><div class="area">
<div class="ads300">
<?php $adsidebar = get_option('adsidebar'); if($adsidebar) { ?>
<?php echo $adsidebar; ?>
<?php } else {} ?>
</div>
</div></div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
</div>