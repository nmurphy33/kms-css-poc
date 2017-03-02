<?php

$text = '';

if (isset($_POST['file_name'])) {
$title = $_POST['file_name'];
$title = preg_replace('/[^A-Za-z0-9\-]/', '', $title);
$title = strtolower($title);    
}
    
if (isset($_POST['font_style'])) {
$font_style = $_POST['font_style'];   
}


if (isset($_POST['thumbnails_per_row'])) { 
$thumbnails = $_POST['thumbnails_per_row'];    
}

if (isset($_POST['thumbnail_limit'])) { 
$limit = $_POST['thumbnail_limit'] + 1; /*this is cause (n+10) shows 9, (n+3) shows 2, etc. So we are doing (n + $limit)*/
} 


switch($thumbnails){
        
    case 1:
        $widthOne = 100;
        $widthTwo = $widthOne;
        $widthThree = $widthOne;
        $widthFour = $WidthOne;
        $marginL = 0;
        $marginR = 0;
        $default = false;
        break;
        
    case 2:
        $widthOne = 48.717948717948715;
        $widthTwo = $widthOne;
        $widthThree = $widthOne;
        $widthFour = $widthOne;
        $marginL = 0;
        $marginR = 1;
        $default = false;
        break;
        
    case 3:
        $widthOne = 32.170740134569924;
        $widthTwo = $widthOne;
        $widthThree = 48.717948717948715;
        $widthFour = 48.717948717948715;
        $marginL = 0;
        $marginR = 1;
        $default = false;
        break;
        
    case 4:
        $widthOne = 24;
        $widthTwo = $widthOne;
        $widthThree = 48.717948717948715;
        $widthFour = 48.717948717948715;
        $marginL = 0;
        $marginR = 1;
        $default = false;
        break;
        
    default: 
        $default = true;
        break;
        
}

//If/then all the statements based on whether checked or not. 
    
    
if (isset($_POST['custom_font']) && $_POST['custom_font'] != "") {

$font = $_POST['custom_font'];    
$font = preg_replace('/\s+/', '', $font);
$font_name = substr($font, 51, -2); 
$new_font = preg_replace('/[+]/',' ', $font_name);
$font_array = explode(':', $new_font);
$font_name = $font_array[0];

$text = $font."

    body {font-family: '".$font_name."', ".$font_style." !important;}";
}    


if (isset($_POST['link_color']) && $_POST['link_color'] != '#0088CC') {
    $text .= '
    
    a, a:hover {color: '.$_POST['link_color'].';}'; 
}
    
if (isset($_POST['header_color']) && $_POST['header_color'] != '#ffffff') {
    $text .= '
    
    .navbar-inverse .navbar-inner {
    min-height: 50px !important;
    background-color:'.$_POST['header_color'].' !important;
    background-image: none !important;
    background: '.$_POST['header_color'].';
    background-repeat: no-repeat !important;
    border-color: '.$_POST['header_color'].';
    filter: none !important;
    -webkit-box-shadow: none !important;
    -moz-box-shadow:none !important;
    box-shadow: none !important;
}

.navbar-inner {
    min-height: 50px;
    padding-right: 20px;
    padding-left: 20px;
    background-color: '.$_POST['header_color'].' !important;
    background-image: none !important;
    background-repeat: no-repeat !important;
    background: '.$_POST['header_color'].' !important;
    border: 1px solid '.$_POST['header_color'].' !important;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
     filter: none !important;
    -webkit-box-shadow: none !important;
    -moz-box-shadow:none !important;
    box-shadow: none !important;}';
}

if (isset($_POST['dropdown_menu_hover_color']) && $_POST['dropdown_menu_hover_color'] != '#0088cc') {
    $text.='
    
    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus,
    .dropdown-submenu:hover>a,
    .dropdown-submenu:focus>a {
        text-decoration: none !important;
        background-color: '.$_POST["dropdown_menu_hover_color"].' !important;
        background: '.$_POST["dropdown_menu_hover_color"].' !important;
        background-image: none !important;
        background-repeat: none !important;

    }
    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus {
        text-decoration: none !important;
        background-color: '.$_POST["dropdown_menu_hover_color"].' !important;
        background: '.$_POST["dropdown_menu_hover_color"].' !important;
        background-image: none !important;
        background-repeat: none !important;
    }

    .nav li.active .dropdown .dropdown-toggle {
        background-color:none !important;
        background:none !important;
        webkit-box-shadow: none !important;
        moz-box-shadow: none !important;
        box-shadow: none !important;
    }

    .navbar .nav li.dropdown.active>.dropdown-toggle {

        background-color: none !important;
        background: none !important; 
    }

    .navbar .nav li.dropdown.open>.dropdown-toggle, .navbar .nav li.dropdown.open.active>.dropdown-toggle {
        background-color: none !important;
        background:none !important;
        color: #FFF !important;}';
}
    
if (isset($_POST['menu_font_color']) && $_POST['menu_font_color'] != '#777777') {
    $text.='.navbar .nav>.active>a, .navbar .nav>.active>a:hover, .navbar .nav>.active>a:focus {
        background-color:none !important;
        background:none;
        webkit-box-shadow: none !important;
        moz-box-shadow: none !important;
        box-shadow: none !important;
        color: '.$_POST["menu_font_color"].' !important;
        text-decoration: none !important;
    }

    .navbar .nav>li>a {
        float: none;
        padding: 10px 15px 10px;
        color: '.$_POST["menu_font_color"].' !important;
        text-decoration: none;
        text-shadow: none !important;
    }

    .nav li.active .dropdown .dropdown-toggle {
        background-color:none !important;
        background:none !important;
        webkit-box-shadow: none !important;
        moz-box-shadow: none !important;
        box-shadow: none !important;
    }

    .navbar .nav li.dropdown.active>.dropdown-toggle {
        background-color: none !important;
        background: none !important;

    }

    .navbar .nav li.dropdown.open>.dropdown-toggle, .navbar .nav li.dropdown.open.active>.dropdown-toggle {
        background-color: none !important;
        background:none !important;}';
}

if (isset($_POST['carousel_title_color']) && $_POST['carousel_title_color'] != '#FFFFFF') {
    $text.='.carousel-caption .entryTitle {
    color: '.$_POST["carousel_title_color"].'}';
}
    
if (isset($_POST['carousel_paragraph_text_color']) && $_POST['carousel_paragraph_text_color'] != '#FFFFFF') {
    $text.='.carousel-control {
    color: '.$_POST["carousel_paragraph_text_color"].'}';
}
    
if (isset($_POST['carousel_metadata_background_color'])) {
    
    $bg_color = $_POST['carousel_metadata_background_color'];
    
    function hex2rgb($hex) {
        $hex = str_replace("#", "", $hex);

       if(strlen($hex) == 3) {
          $r = hexdec(substr($hex,0,1).substr($hex,0,1));
          $g = hexdec(substr($hex,1,1).substr($hex,1,1));
          $b = hexdec(substr($hex,2,1).substr($hex,2,1));
       } else {
          $r = hexdec(substr($hex,0,2));
          $g = hexdec(substr($hex,2,2));
          $b = hexdec(substr($hex,4,2));
       }
        $rgb = array($r, $g, $b);
        //return implode(",", $rgb); // returns the rgb values separated by commas
        return implode(",", $rgb); // returns an array with the rgb values
}

$rgba_val = hex2rgb($bg_color);    
$rgba = "rgba(".$rgba_val.", 0.75)";

}

if (isset($_POST['carousel_metadata_background_opacity']) && $_POST['carousel_metadata_background_opacity'] != '0.75') {
    
    $opacity =  $_POST['carousel_metadata_background_opacity'];
    $rgba_val_opacity = "rgba(".$rgba_val.", ".$opacity.")";

    $text.='.carousel-caption {
    background: #333;
    background: '.$rgba_val_opacity.' !important;}';
}
    else{
        $text.='.carousel-caption {
        background: #333;
        background: '.$rgba.' !important;}';
    };

if (isset($_POST['carousel_arrow_background_color']) && $_POST['carousel_arrow_background_color'] != '#222222') {
    $text .= '.carousel-control {
    background: '.$_POST['carousel_arrow_background_color'].'  !important;
    background-color: '.$_POST['carousel_arrow_background_color'].'  !important;}';
}
    
if (isset($_POST['carousel_arrow_color']) && $_POST['carousel_arrow_color'] != '#FFFFFF') {
    $text .= '.carousel-control {
    color: '.$_POST['carousel_arrow_color'].'  !important;}
    .carousel-control:hover, .carousel-control:focus {
    color: '.$_POST['carousel_arrow_color'].'  !important;}';
} 
    
if (isset($_POST['carousel_arrow_border_color']) && $_POST['carousel_arrow_border_color'] != '#FFFFFF') {
    $text .= '.carousel-control {
    border-color: '.$_POST['carousel_arrow_border_color'].'  !important;}
    .carousel-control:hover, .carousel-control:focus {
    color: '.$_POST['carousel_arrow_border_color'].'  !important;}';
}
    
if (isset($_POST['carousel_arrow_default_opacity']) && $_POST['carousel_arrow_default_opacity'] != '0.5') {
    $text .= '.carousel-control {
    opacity: '.$_POST['carousel_arrow_default_opacity'].'}';
}  
    

 if (isset($_POST['thumbnail_metadata_overlay']) && $_POST['thumbnail_metadata_overlay'] == 1) {
    $text .= 'body.module-home p.thumb_time {
    position: relative;
    font-size: 10.9px;
    color: #333;
    opacity: 1;
    top: 0px;
    right: 0px;
    float: right;
    margin-right: 10px;}

a i.icon-white {
    color: #333 !important;
}

.carousel-inner .thumb_time.label-inverse {
    display: none;
}
    
body.module-home p.thumb_name_content, body.module-home p.channel_content, body.module-home p.channel_stats_content {
    margin-top: 10px;
    margin-bottom: 20px;
    white-space:nowrap;
    max-width:70%;
    overflow: hidden;
    text-overflow: ellipsis;
}

body.module-home div.thumb_time {
    position: relative;
    font-size: 10.9px;
    color: #333 !important;
    top: 0px;
    right: 0px;
    float: right;
    margin-right: 5px;
    }
    
body.module-home div.thumb_name {
    position: relative;
    font-size: 10.9px;
    color: #fff;
    bottom: 0px;
    right: 0px;
    width: 100%;
    font-size: 17.5px;
    font-weight: normal;
}
body.module-home .label-inverse, .badge-inverse {
    background: none;
    color: #333 !important;
}

';
}   
  
    
if (isset($_POST['show_mediatype_icon']) && $_POST['show_mediatype_icon'] != 1) {
 $text .= 'i.icon-film{
    display:none !important;}';
}
    

if (isset($_POST['pills_color']) && $_POST['pills_color'] != '#0088cc') {
 $text .= '.nav-pills>.active>a, .nav-pills>.active>a:hover, .nav-pills>.active>a:focus {
    color: #fff !important;
    background-color: '.$_POST['pills_color'].' !important;
    background: '.$_POST['pills_color'].' !important;}';
}

    
if (isset($_POST['tags_color']) && $_POST['tags_color'] != '#3a87ad') {
 $text .= 'div.tagsWrapper a span.badge.badge-info {
    background-color: '.$_POST['pills_color'].' !important;
    background: '.$_POST['pills_color'].' !important; }';   
}


if (isset($_POST['category_color']) && $_POST['category_color'] != '#2d6987') {
 $text .= 'div.expandable dl dd .badge-info[href] {  
    background-color: '.$_POST['category_color'].' !important;
    background: '.$_POST['category_color'].' !important;}';   
}


$text.='

#mediaContainer .entryTitle {
    margin: 10px 0px 5px 0px !important;
}

#entry_view_stats {
    margin-top:15px;
}

#entryDataBlock .expandable {
    line-height: 1.5 !important;
}';



if (isset($_POST['thumbnail_limit']) && $_POST['thumbnail_limit'] != 0) {

$text .= 'body.module-home ul.thumbnails li:nth-child(n+'.$limit.') {
        display:none !important;
}

body.module-home ul.thumbnails li {
    overflow: hidden !important;
    margin-bottom: 30px !important;
}

body.module-home ul.thumbnails li div.photo-group.featured_wrapper img{
    width:100% !important;
}';
}

if (isset($_POST['sticky_header']) && $_POST['sticky_header'] != 0) {

$text .= '.navbar-static-top {
    position: fixed;
    margin-bottom: 0;
    width: 100%;
    z-index: 10000;
}

#header.navbar.navbar-static-top .navbar-inner {
    padding-top: 20px;
    padding-bottom: 10px;
    height: 90px;
}

#header .logoImg.brand {
    padding-top: 0px;
    margin-top: -5px;
    padding-bottom: 0px;
    max-width: 160px;
    max-height: 50px;
}

#wrap > div.row-fluid {

margin-top:125px;

}';
}

if (isset($_POST['bw_thumbnails']) && $_POST['bw_thumbnails'] != 0) {

$text .= 'body.module-home li .photo-group.featured_wrapper {
    -webkit-filter: grayscale(1);
    filter: grayscale(1);
    transition: .5s;
}


body.module-home li .photo-group.featured_wrapper:hover {
    -webkit-filter: grayscale(0);
    filter: grayscale(0);
    transition: 1s;
}';
}

if (isset($_POST['thumbnail_img_overlay']) && $_POST['thumbnail_img_overlay'] != "") {

$text .= 'li.span4 div.featured_wrapper a div.overlay-wrapper, li.span2 div.featured_wrapper a div.overlay-wrapper {
    position:absolute;
    height: 37px;
    width: 37px;
    margin-top: -47px;
    z-index: 10000;
    margin-left: 10px;
    margin-bottom: 10px;
    background: url(\''.$_POST["thumbnail_img_overlay"].'\')no-repeat;
}';
}
    
if ($default != 'true') {

$text .= '    
/* Begin Media Queries */

@media (min-width: 1200px) {
    body.module-home ul.thumbnails li.span2, body.module-home ul.thumbnails li.span4 {
    height: auto !important;
    }
    
body.module-home .row-fluid .span2, body.module-home .row-fluid .span4 {
    width: '.$widthOne.'% !important;
    margin-left: '.$marginL.'% !important;
    margin-right: '.$marginR.'% !important;
    }
}

@media (min-width: 980px) {
    body.module-home ul.thumbnails li.span2, body.module-home ul.thumbnails li.span4 {
    height: auto !important;
    }
body.module-home .row-fluid .span2, body.module-home .row-fluid .span4 {
    width: '.$widthTwo.'% !important;
    margin-left: '.$marginL.'% !important;
    margin-right: '.$marginR.'% !important;
    }
}

@media (max-width: 989px) and (min-width: 768px) {
    body.module-home ul.thumbnails li.span2, body.module-home ul.thumbnails li.span4 {
    height: auto !important; 
    width: '.$widthThree.'% !important;
    }
    body.module-home .row-fluid .span2, body.module-home .row-fluid .span4 {
   width: '.$widthThree.'% !important;
   margin-left: '.$marginL.'% !important;
    margin-right: '.$marginR.'% !important;
    }
}

@media(min-width:768px) and (max-width:979px) {
    body.module-home ul.thumbnails li.span2, body.module-home ul.thumbnails li.span4 {
    height: auto !important;
    }
body.module-home .row-fluid .span2, body.module-home .row-fluid .span4 {
   width:'.$widthFour.'% !important;
    margin-left: '.$marginL.'% !important;
    margin-right: '.$marginR.'% !important;
    }
}


/* Static, does not change */  
@media(max-width:767px) {
    body.module-home ul.thumbnails li.span2, body.module-home ul.thumbnails li.span4 {
    height: auto !important;
    margin-bottom: 0px!important;
    padding: 4px 5px;
    width: 100% !important;
    float: left !important;
    }
    
    body.module-home .row-fluid .span2, body.module-home .row-fluid .span4  {
    width: 100% !important;
    }
    
}';

}

?>