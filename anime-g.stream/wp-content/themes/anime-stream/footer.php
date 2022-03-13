</div>
<div id="foot-menu">
<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
</div>
<div id="kaki">
<div class="center">
<div id="kaki-widget">
<?php get_template_part("footerbar-left"); ?>
<?php get_template_part("footerbar-center"); ?>
<?php get_template_part("footerbar-right"); ?>
</div>
</div>

<h1 class="title-footer"><?php bloginfo('name'); ?></h1>
<p class="copyright-title">&copy; <?php echo date("Y") ?> - <?php bloginfo('name'); ?></p>
<div class="copyright-footer">
<div class="center">
<div class="copyright-footer-atas">

<div class="copyright-footer-bawah">

</div></div>
</div>
</div>
<div id='shadow'></div>
<script type="text/javascript">
$(document).ready(function() {
$('.search').click(function(){
$('.cari').slideToggle();
});
$('.mirror a[href~="' + location.href + '"]').parents('li').addClass('active');
$('.navigasi a[href~="' + location.href + '"]').parents('li').addClass('active');
$('.lightvideo').click(function(){
$('.offin-video').fadeToggle(500);
});
$('.offin-video').click(function(){
$('.offin-video').fadeOut(500);$('.single-video iframe').css({'position':'relative','width':'100%','height':'500px'});$('.offin-video').css({'z-index':'50'});
});
$('.fullvideo').click(function(){
$('.single-video iframe').css({'position':'absolute','width':'80%','height':'90%','left':'50%','top':'50%','-webkit-transform':'translate(-50%,-50%)','-ms-transform':'translate(-50%,-50%)','transform':'translate(-50%,-50%)','z-index':'105'});$('.offin-video').css({'z-index':'104'});$('.offin-video').fadeIn(500);
});
$('.wpcomment').click(function(){
$('.wpcom').css({'display':'block'});$('.disuqscom').css({'display':'none'});$('.wpcomment').css({'background':'#388AEE'});$('.disquscomment').css({'background':'#4E9EFF'});
});
$('.disquscomment').click(function(){
$('.disuqscom').css({'display':'block'});$('.wpcom').css({'display':'none'});$('.wpcomment').css({'background':'#4E9EFF'});$('.disquscomment').css({'background':'#388AEE'});
});
});
</script>
<script type="text/javascript">
jQuery(window).scroll(function(){jQuery(window).scrollTop()<50?jQuery("#rocketmeluncur").slideUp(500):jQuery("#rocketmeluncur").slideDown(500);var e=jQuery("#ft")[0]?jQuery("#ft")[0]:jQuery(document.body)[0],t=$("rocketmeluncur"),n=(parseInt(document.documentElement.clientHeight),parseInt(document.body.getBoundingClientRect().top),parseInt(e.clientWidth)),r=t.clientWidth;if(1e3>n){var l=parseInt(fetchOffset(e).left);l=r>l?2*l-r:l,t.style.left=n+l+"px"}else t.style.left="auto",t.style.right="10px"}),jQuery("#rocketmeluncur").click(function(){jQuery("html, body").animate({scrollTop:"0px",display:"none"},{duration:600,easing:"linear"});var e=this;this.className+=" launchrocket",setTimeout(function(){e.className="showrocket"},800)});
</script>
<?php wp_footer(); ?>

</body>
</html>