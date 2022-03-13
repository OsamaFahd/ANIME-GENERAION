<?php
function stream_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    $name = "Stream";
    return '<iframe src="http://stream.moe/embed/' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%">';
}
add_shortcode ('stream', 'stream_sc' );

function streamango_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    $name = "streamango";
    return '<iframe src="https://streamango.com/embed/' . $id . '" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%"allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('streamango', 'streamango_sc' );

function aisfile_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    $name = "AISFile";
    return '<iframe src="http://aisfile.com/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%">';
}
add_shortcode ('aisfile', 'aisfile_sc' );

function savefile_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    $name = "Savefile";
    return '<iframe src="http://savefile.co/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%">';
}
add_shortcode ('savefile', 'savefile_sc' );

function mp4upload_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://mp4upload.com/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('mp4upload', 'mp4upload_sc' );

function Filetrip_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://filetrip.net/embed?' . $id . '" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%"></iframe>';
}
add_shortcode ('Filetrip', 'Filetrip_sc' );

function openload_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="https://oload.stream/embed/' . $id . '/" scrolling="no" frameborder="0" WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('openload', 'openload_sc' );

function acefile_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://acefile.co/player/' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%"allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('acefile', 'acefile_sc' );

function solidfiles_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="https://www.solidfiles.com/e/' . $id . '/" scrolling="no" frameborder="0" WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('solidfiles', 'solidfiles_sc' );

function tusfiles_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<IFRAME SRC="https://tusfiles.net/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=100% HEIGHT=100%></IFRAME>';
}
add_shortcode ('tusfiles', 'tusfiles_sc' );

function cloudzilla_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe WIDTH="640" HEIGHT="360" scrolling="no" frameborder="0" src="http://www.cloudzilla.to/embed/' . $id . '/"></iframe>';
}
add_shortcode ('cloudzilla', 'cloudzilla_sc' );

function powvideo_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<IFRAME SRC="http://powvideo.net/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="660" HEIGHT="360"></IFRAME>';
}
add_shortcode ('powvideo', 'powvideo_sc' );

function usercloud_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<IFRAME SRC="https://userscloud.com/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=640 HEIGHT=384></IFRAME>';
}
add_shortcode ('usercloud', 'usercloud_sc' );

function mp4vid_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://www.mp4vid.com/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="1005" HEIGHT="420""></iframe>';
}
add_shortcode ('mp4vid', 'mp4vid_sc' );

function Gdrive_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="https://drive.google.com/file/d/' . $id . '/preview" WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('Gdrive', 'Gdrive_sc' );

function Anime_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="https://api.anime-g.stream/stream/' . $id . '/" WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('Anime', 'Anime_sc' );

function Mega_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="https://mega.nz/embed#!' . $id . '" WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('mega', 'Mega_sc' );

function axavid_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://axavid.com/embed-' . $id . '.html" FRAMEBORDER="0" MARGINWIDTH="0" MARGINHEIGHT="0" SCROLLING="NO" WIDTH="660" HEIGHT="360"></iframe>';
}
add_shortcode ('axavid', 'axavid_sc' );

function vidhos_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<IFRAME SRC="http://vidhos.com/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="660" HEIGHT="360"></IFRAME>';
}
add_shortcode ('vidhos', 'vidhos_sc' );

function realvid_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<IFRAME SRC="http://realvid.net/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="660" HEIGHT="360"></IFRAME>';
}
add_shortcode ('realvid', 'realvid_sc' );

function videowood_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe allowfullscreen="true" WIDTH="660" HEIGHT="360" frameborder="0" src="http://videowood.tv/embed/' . $id . '" scrolling="no"></iframe>';
}
add_shortcode ('videowood', 'videowood_sc' );

function yourupload_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://embed.yucache.net/' . $id . '?client_file_id=824065" style="width:100%;height:100%;border:0;margin:0;padding:0;"></iframe>';
}
add_shortcode ('yourupload', 'yourupload_sc' );

function imdb_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://www.imdb.com/video/imdb/' . $id . '/imdb/embed?autoplay=false&width=480" width="480" height="270" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" frameborder="no" scrolling="no"></iframe>';
}
add_shortcode ('imdb', 'imdb_sc' );

function youtube_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe width="480" height="270" src="https://www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen></iframe>';
}
add_shortcode ('yt', 'youtube_sc' );

function daily_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="//www.dailymotion.com/embed/video/' . $id . '" WIDTH="640" HEIGHT="360"></iframe>';
}
add_shortcode ('daily', 'daily_sc' );

function vidlox_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="https://vidlox.tv/embed-' . $id . '.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%"allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('vidlox', 'vidlox_sc' );

function topddl_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://topddl.net/file/' . $id . '?embed=true&autoplay=true" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%"allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('topddl', 'topddl_sc' );

function Animecan_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="//gdriveplayer.us/embed2.php?link=' . $id . '" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%"allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('Animecan', 'Animecan_sc' );

function Miror_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://play.animecan.me/embed.php?url=' . $id . '"  FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('Miror', 'Miror_sc' );

function Lokal_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://play.animecan.me/embed.php?url=' . $id . '"  FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('Lokal', 'Lokal_sc' );

function HxH_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="https://haxhits.com/?e=' . $id . '"  FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('HxH', 'HxH_sc' );

function Gvidio_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<script src="https://content.jwplatform.com/libraries/eyaAGX7P.js"></script>
<script>jwplayer.key="XvZAEvnJm6cwG6+RBddeypuJ5hlngAkUzqmPNw==";</script>
<div id="myElement">Loading the player...</div>
<script type="text/javascript">
var playerInstance = jwplayer("myElement");
playerInstance.setup({
    file: "' . $id . '",
    image: "",
    width: "100%",
    height: "100%",
    aspectratio: "16:9",
});
</script>
<style type="text/css">
.jwplayer.jw-flag-aspect-mode, .video-js {width:100% !important; height: 100% !important}
#player{text-align: center;color:#fff;}
</style>';
}
add_shortcode ('Gvidio', 'Gvidio_sc' );

function Mycloud_sc( $atts ) {
    extract( shortcode_atts( array (
        'id' => ''
    ), $atts ) );
    return '<iframe src="http://file.animecan.me/player/' . $id . '"  FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH="100%" HEIGHT="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>';
}
add_shortcode ('Mycloud', 'Mycloud_sc' );

?>