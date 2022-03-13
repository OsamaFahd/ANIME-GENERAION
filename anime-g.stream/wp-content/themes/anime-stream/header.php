<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if(is_home()) { echo bloginfo("name");  } else { echo wp_title(" | ", false, right); } ?></title>
<meta content='Index, Follow' name='robots'/>
<meta content='<?php echo get_option('k_author'); ?>' name='author'/>
<meta content='<?php echo get_option('k_key'); ?>' name='keywords'/>
<meta content='© <?php echo date("Y") ?> <?php bloginfo('name'); ?>' name='copyright'/>
<meta content='Indonesia' name='geo.placename'/>
<meta content='ID' name='language'/>
<meta content='ID' name='geo.country'/>
<meta content='All-Language' http-equiv='Content-Language'/>
<meta content='global' name='distribution'/>
<meta content='blogger' name='generator'/>
<meta content='general' name='rating'/>
<meta content='global' name='target'/>
<meta content='true' name='MSSmartTagsPreventParsing'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta content='index, follow' name='googlebot'/>
<meta content='follow, all' name='Googlebot-Image'/>
<meta content='follow, all' name='msnbot'/>
<meta content='follow, all' name='Slurp'/>
<meta content='follow, all' name='ZyBorg'/>
<meta content='follow, all' name='Scooter'/>
<meta content='all' name='spiders'/>
<meta content='all' name='WEBCRAWLERS'/>
<meta content='noodp' name='robots'/>
<meta content='noydir' name='robots'/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link expr:href='data:blog.url' rel='canonical'/>
<meta content='تحميل انمي مترجم عربي, مشاهدة مباشرة انمي مترجم عربي , انمي مترجم , مشاهدة مباشرة , مترجم عربي , انمي , افلام انمي , مسلسلات انمي , اوفات انمي , بلوراي' name='search engines'/>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<meta property="og:image" content="" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Audiowide|Baloo+Bhaina|Fredoka+One|Righteous" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flickity.pkgd.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flickity.css" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.qtip.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.qtip.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabcontent.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>
<?php wp_head(); ?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pace/0.4.17/pace.js?v=0.4.17"></script>
<a href="javascript:void(0);" id="rocketmeluncur" class="showrocket" ><i></i></a>
<script type='text/javascript'>
//<![CDATA[
$(document).ready(function(){
   $("#shadow").css("height", $(document).height()).hide();
   $(".lightSwitcher").click(function(){
      $("#shadow").toggle();
         if ($("#shadow").is(":hidden"))
            $(this).html("Light Off").removeClass("turnedOff");
         else
            $(this).html("Light On").addClass("turnedOff");
         });
  });
//]]>
</script>
<script type="text/javascript">
$(document).ready(function()
{
  $('.series').each(function(){

    var $this = $(this);
    var id = $this.attr('rel');

    $this.qtip({
      content:{
        text: '<img class="" src="<?php echo get_template_directory_uri(); ?>/img/loader.gif" alt="Loading..." />',
        ajax:{
          url: '<?php echo get_template_directory_uri(); ?>/tooltip.php',
          type: 'POST', 
          loading: false,
          data: 'id=' + id
        }
      },
      show: 'mouseover',
      hide: {
        delay: 200,
        fixed: true
      },
      position: {
	target: 'mouse',
        viewport: $(window)
      }
    });
  });
});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141576040-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141576040-1');
</script>

</head>

<body>

<div class='wowmaskot'>

<nav id="menu">
<div class="center">
<div class='logo'>
<?php
$logo = get_option('logo'); if($logo) { ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" rel="home">
<img src="<?php echo $logo; ?>" title="<?php bloginfo('name'); ?>" rel="home" />
</a>
<?php } else { ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" rel="home">
<h1><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
</a>
<?php } ?>
</div>
<input class='hidden showmenu' type='checkbox'></input>
<label class='hidden showlabel'><i class='icn fa fa-bars'/></i></label>
<?php $nav_menu = wp_nav_menu(array(
'theme_location'=>'main', 
'container'=>'', 
'fallback_cb' => '', 
'echo' => 0)); 
if(empty($nav_menu))
			$nav_menu = '<ul id="menu-unnamed" class="menu">'.wp_list_categories(array('show_option_all'=>__('Home', 'dp'), 'title_li'=>'', 'echo'=>0)).'</ul>';
			echo $nav_menu;
	?>
<div class='searchform'>
<form id="form" method="get" action="<?php echo esc_url( home_url() ); ?>">
<input id="kinput" type="text" placeholder="ابحث عن انمي..." name="s"/>
<input type="hidden" name="post_type" value="anime" />
<input id="ksubmit" type="submit" value="">
</form>
</div>
</div>
</nav>
<br>

<div class="content">