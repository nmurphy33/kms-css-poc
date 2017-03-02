
<!DOCTYPE html>


<!--[if lte IE 7]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"class="ie7"> <![endif]-->
<!--[if IE 8]>     <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>     <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!--<![endif]-->

<head>
<!-- viewhook start modulesHeader -->


<!-- viewhook end modulesHeader --><meta name="xsrf-ajax-nonce" content="Nv6ser4myi+bCL8UMzpmqWnvLtnrkiBCkxtts+RldoibUYWcp3RXCwtXD/Rmlxf+ihZMgoHln8EvhsoFFQmxKNjMgHMRQ2MR+yXZSGUlTS2dHIRRsFsGXv0QN1YJcHNb" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Kaltura Demo</title>

<!--[if lt IE 9]> <style type="text/css" media="screen">
body{-ms-overflow-y : scroll;}
</style><![endif]--><link href="css/kms.css" media="screen" rel="stylesheet" type="text/css" /><link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/favicon.ico" rel="icon" type="png" /><!--[if lt IE 10]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/css/ieadditions.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/fontAwesome/font-awesome-ie7.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/css/bootstrap-ie7buttonfix.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/css/bootstrap-ie8buttonfix.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
    
    <script type="text/javascript" src="js/kms.js"></script>
    <script type="text/javascript" src="js/kms2.js"></script>
    
<style>
    
<?php 

require 'logic.php';
    
echo $text;    


?>    
    

</style>    

</head>
    <body class="module-home controller-index action-index">
    <div id='globalOuterWrap'>
        <div id='outerWrap'>
            <div id='overlay'>
                <div id="ajaxStatusWrap">
                    <div id="ajaxStatusMain"></div>
                </div>
            </div>
                        
<div class="navbar  navbar-static-top" id="header">
    <div class="navbar-inner">
        <div class="pull-left nav menu-trigger hidden-desktop">
            <a id ="Kbtn-navbar" class="btn btn-navbar show" href="#sidr">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
                    <div class="hidden-desktop">
                <ul class="pull-right nav">
    <li class="dropdown" id="mobileUserMenu">
        <a href="#" class="hidden-desktop dropdown-toggle pull-right" data-toggle="dropdown"> <i class="icon-user "></i><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="hidden-desktop nav-header" id="userMobileMenuDisplayName"></li>

                            
<li class=""><a href="/upload/media" ><i class="icon-film"></i> <span>Media Upload</span></a></li><li class="visible-desktop hostedEnabled"><a href="/upload/webcam"  rel="require-flash"><i class="icon-facetime-video"></i> <span>Webcam Recording</span></a></li>                <li class="divider"></li>
                

            <li><a href="/my-media" >My Media</a></li><li><a href="/my-playlists"  class="hidden-phone">My Playlists</a></li>            <li class="divider"></li>
            <li><a href="/user/login"><i class="icon-signin"></i> Login</a></li>
        </ul>
    </li>
</ul>
            </div>
        
        <div class="visible-desktop pull-left">
    <a href="/"  class="  brand">
                    <span>Your Title or Logo Here</span>
            </a>
</div>
<div class="hidden-desktop ">
    <div class="center">
        <a href="/"  class="">
                            <span class="brand">Your Title or Logo Here</span>
                    </a>
    </div>
</div>
        <div class='pull-right '>
            <ul class="nav" >
                                    <li class="visible-desktop">
                        <form id="main_search" class="navbar-search" action="/search">
    <div class="input-prepend input-append" >
        <span class="search-icon add-on">
            <a onclick="$('#main_search').submit();
                    return false;" href="#">
                <i class="icon-search navbar-link" ></i>
            </a>
        </span>
        <input type="text" name="searchkeyword" id="main_search_search_for" value="Search all media" onfocus='if($(this).val() == "Search all media") {$(this).val("");}' onblur='if($(this).val() == "") { $(this).val("Search all media");}' class="input-medium searchInput search-query Xhidden" placeholder="search" />    </div>
</form>
<script type="text/javascript">
    var defaultText = "Search all media";
    $('#main_search').submit(function(index) {
        if ($("#main_search #main_search_search_for").val() != defaultText) {
            document.location.href = $("#main_search").attr("action") + '/searchkeyword/' + encodeURIComponent($("#main_search_search_for").val().replace(/\/|\\|%2F/g,''));
        }
        return false;
    }).bind('keypress', function(e) {
        if (e.keyCode == 13) {
            $("#main_search").submit();
        }
    });
</script>
                    </li>
                                                    <li class = "visible-desktop">
                        <div class="btn-group">
    <button data-toggle="dropdown" class="upload-links-header btn   dropdown-toggle"><i class="icon-upload icon-white"></i> Add New <i class="icon-chevron-down icon-white"></i></button>
    <ul class="dropdown-menu pull-right">
	
<li class=""><a href="/upload/media" ><i class="icon-film"></i> <span>Media Upload</span></a></li><li class="visible-desktop hostedEnabled"><a href="/upload/webcam"  rel="require-flash"><i class="icon-facetime-video"></i> <span>Webcam Recording</span></a></li></ul>
</div>
                    </li>
                                                    <li class="visible-desktop">
                            <div class="btn-group" id="userMenuToggle">
        <button data-toggle="dropdown"
                class="btn  dropdown-toggle"><i
                class="icon-user icon-white"></i> 
                    <span id="userMenuDisplayName">
                                            </span> <i
                class="icon-chevron-down icon-white"></i></button>
        <ul class="dropdown-menu pull-right">
            <li><a href="/my-media" >My Media</a></li><li><a href="/my-playlists"  class="hidden-phone">My Playlists</a></li>            <li class="divider"></li>
            <li><a href="/user/login"><i class="icon-signin"></i> Login</a></li>
        </ul>
    </div>
                    </li>
                            </ul>
        </div>
        <div id="toplinks" class="pull-left visible-desktop">
            <ul class="added2SidemenuPost nav ">
                            </ul>
        </div>
                    <div id="horizontalMenu" class="pull-left clear visible-desktop">
                <ul class="nav">
                            <li class="active">
            <a class=" dropdown-toggle" href="/home" target="_self">Home</a>        </li>
                <li class="dropdown ">
            <a class=" dropdown-toggle" href="/category/About+Kaltura/39544691">About Kaltura</a><ul class="dropdown-menu">        <li >
            <a class=" dropdown-toggle" href="/category/About+Kaltura%3ECustomers+Speak/39544711">Customers Speak</a>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/About+Kaltura%3EKaltura+at+a+Glance/39544721">Kaltura at a Glance</a>        </li>
        </ul>        </li>
                <li class="dropdown ">
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21/39544701">Welcome to MediaSpace!</a><ul class="dropdown-menu">        <li >
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21%3EGetting+Started+with+MediaSpace/39544731">Getting Started with MediaSpace</a>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21%3EKaltura+Management+Console+%28KMC%29/39544741">Kaltura Management Console (KMC)</a>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21%3EMediaSpace+-Limitless+Possibilities/39544751">MediaSpace -Limitless Possibilities</a>        </li>
        </ul>        </li>
                <li >
            <a class=" dropdown-toggle" href="/channels">Channels</a>        </li>
            
                </ul>
                <script type="text/javascript">
                      $('#horizontalMenu li.dropdown > a.dropdown-toggle')
                            .append('<b class="caret"></b>')
                            .each(function() {
                                $(this).parent('li')
                                .on('mouseover mouseout', function() {
                            $(this).toggleClass('open');
                        });
                    });
                </script>
            </div>
            </div>
</div>
<div id="sidr" style="display:none" class=''>
    <div class="row-fluid">
        <form id="menuSearch" class="navbar-search" action="/search">
    <div class="input-prepend input-append" >
        <span class="search-icon add-on">
            <a onclick="$('#menuSearch').submit();
                    return false;" href="#">
                <i class="icon-search navbar-link" ></i>
            </a>
        </span>
        <input type="text" name="searchkeyword" id="menuSearch_search_for" value="Search all media" onfocus='if($(this).val() == "Search all media") {$(this).val("");}' onblur='if($(this).val() == "") { $(this).val("Search all media");}' class="input-medium searchInput search-query Xhidden" placeholder="Search" />    </div>
</form>
<script type="text/javascript">
    var defaultText = "Search all media";
    $('#menuSearch').submit(function(index) {
        if ($("#menuSearch #menuSearch_search_for").val() != defaultText) {
            document.location.href = $("#menuSearch").attr("action") + '/searchkeyword/' + encodeURIComponent($("#menuSearch_search_for").val().replace(/\/|\\|%2F/g,''));
        }
        return false;
    }).bind('keypress', function(e) {
        if (e.keyCode == 13) {
            $("#menuSearch").submit();
        }
    });
</script>
    </div>
    <ul id="menu" class="nav">
                <li class="active">
            <a class=" dropdown-toggle" href="/home" target="_self">Home</a>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/About+Kaltura/39544691">About Kaltura</a><ul>        <li >
            <a class=" dropdown-toggle" href="/category/About+Kaltura%3ECustomers+Speak/39544711">Customers Speak</a>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/About+Kaltura%3EKaltura+at+a+Glance/39544721">Kaltura at a Glance</a>        </li>
        </ul>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21/39544701">Welcome to MediaSpace!</a><ul>        <li >
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21%3EGetting+Started+with+MediaSpace/39544731">Getting Started with MediaSpace</a>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21%3EKaltura+Management+Console+%28KMC%29/39544741">Kaltura Management Console (KMC)</a>        </li>
                <li >
            <a class=" dropdown-toggle" href="/category/Welcome+to+MediaSpace%21%3EMediaSpace+-Limitless+Possibilities/39544751">MediaSpace -Limitless Possibilities</a>        </li>
        </ul>        </li>
                <li >
            <a class=" dropdown-toggle" href="/channels">Channels</a>        </li>
            </ul>
</div>


            <div id="wrap" class="container" >
                <div id="alerts" >
                                    </div>
                
<div id="content" class="row-fluid">
    <!-- Carousel -->
        <div id="entrySlider" class="imageSlide carousel slide carenrightleft">
            <ol class="carousel-indicators">
                                        <li data-target="#entrySlider" data-slide-to="0" class="active"></li>
                                        <li data-target="#entrySlider" data-slide-to="1"></li>
                                        <li data-target="#entrySlider" data-slide-to="2"></li>
                                        <li data-target="#entrySlider" data-slide-to="3"></li>
                                        <li data-target="#entrySlider" data-slide-to="4"></li>
                                        <li data-target="#entrySlider" data-slide-to="5"></li>
                                        <li data-target="#entrySlider" data-slide-to="6"></li>
                                        <li data-target="#entrySlider" data-slide-to="7"></li>
                                        <li data-target="#entrySlider" data-slide-to="8"></li>
                            </ol>
            <div class="carousel-inner">
                                        <div class="active item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/SAPA+Internal+Social+Video+Portal+in+Enterprises/1_yb1kcczb"><a href="/media/SAPA+Internal+Social+Video+Portal+in+Enterprises/1_yb1kcczb">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_vvqbcdbz/version/100000/acv/101/width/710/height/400/type/3"  alt="MediaSpace Categories" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_yb1kcczb/version/100001/acv/131/width/710/height/400/type/3"  alt="SAP: Internal Social Video Portal in Enterprises" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wd2nmd5q/version/100001/acv/121/width/710/height/400/type/3"  alt="iCEV: Monetizing HQ EDU Videos on the Web" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_yb1kcczb/version/100001/acv/131/width/1280/height/500/type/3"  alt="SAP: Internal Social Video Portal in Enterprises" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            01:19                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">SAP: Internal Social Video Portal in Enterprises</h2>
                <h4 class="visible-phone entryTitle tight">SAP: Internal Social Video Portal in Enterprises</h4>
                <p class='hidden-phone normalWordBreak'>
                    In the past, it took days for SAP employees to create a single video. These days, it takes them an average of a few minutes. With over 80,000 employees, SAP uses Kaltura to distribute audio and video throughout the organization. Nina Kelley-Rumpff, Program Manager, Enterprise Collaboration, explains why video is a necessary tool for large enterprises and how to encourage employees to share videos across the company. Kelley-Rumpff also explains how to choose the video platform that is right for&hellip;                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/iCEVA+Monetizing+HQ+EDU+Videos+on+the+Web/1_wd2nmd5q"><a href="/media/iCEVA+Monetizing+HQ+EDU+Videos+on+the+Web/1_wd2nmd5q">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_yb1kcczb/version/100001/acv/131/width/710/height/400/type/3"  alt="SAP: Internal Social Video Portal in Enterprises" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wd2nmd5q/version/100001/acv/121/width/710/height/400/type/3"  alt="iCEV: Monetizing HQ EDU Videos on the Web" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_2c8kcwnt/version/100000/acv/101/width/710/height/400/type/3"  alt="Intro to MediaSpace" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wd2nmd5q/version/100001/acv/121/width/1280/height/500/type/3"  alt="iCEV: Monetizing HQ EDU Videos on the Web" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            01:23                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">iCEV: Monetizing HQ EDU Videos on the Web</h2>
                <h4 class="visible-phone entryTitle tight">iCEV: Monetizing HQ EDU Videos on the Web</h4>
                <p class='hidden-phone normalWordBreak'>
                    Dusty Moore, President of iCEV, discusses how iCEV is using Kaltura to distribute educational videos. He explains the importance of producing quality content for the web and the advantage of having end-user analytics to help increase sales and ROI.                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/Intro+to+MediaSpace/1_2c8kcwnt"><a href="/media/Intro+to+MediaSpace/1_2c8kcwnt">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wd2nmd5q/version/100001/acv/121/width/710/height/400/type/3"  alt="iCEV: Monetizing HQ EDU Videos on the Web" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_2c8kcwnt/version/100000/acv/101/width/710/height/400/type/3"  alt="Intro to MediaSpace" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6epio7wh/version/100000/acv/101/width/710/height/400/type/3"  alt="MediaSpace Admin Basics" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_2c8kcwnt/version/100000/acv/101/width/1280/height/500/type/3"  alt="Intro to MediaSpace" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            05:17                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">Intro to MediaSpace</h2>
                <h4 class="visible-phone entryTitle tight">Intro to MediaSpace</h4>
                <p class='hidden-phone normalWordBreak'>
                    A general overview of Kaltura&#039;s out-of-the-box video centric site-MediaSpace                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/MediaSpace+Admin+Basics/1_6epio7wh"><a href="/media/MediaSpace+Admin+Basics/1_6epio7wh">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_2c8kcwnt/version/100000/acv/101/width/710/height/400/type/3"  alt="Intro to MediaSpace" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6epio7wh/version/100000/acv/101/width/710/height/400/type/3"  alt="MediaSpace Admin Basics" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wj7v2wxm/version/100001/acv/161/width/710/height/400/type/3"  alt="Kaltura Enterprise Video Solutions" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6epio7wh/version/100000/acv/101/width/1280/height/500/type/3"  alt="MediaSpace Admin Basics" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            05:24                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">MediaSpace Admin Basics</h2>
                <h4 class="visible-phone entryTitle tight">MediaSpace Admin Basics</h4>
                <p class='hidden-phone normalWordBreak'>
                    This video reviews the Kaltura Kaltura MediaSpace Admin Console                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/Kaltura+Enterprise+Video+Solutions/1_wj7v2wxm"><a href="/media/Kaltura+Enterprise+Video+Solutions/1_wj7v2wxm">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6epio7wh/version/100000/acv/101/width/710/height/400/type/3"  alt="MediaSpace Admin Basics" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wj7v2wxm/version/100001/acv/161/width/710/height/400/type/3"  alt="Kaltura Enterprise Video Solutions" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_q02g3er1/version/100001/acv/121/width/710/height/400/type/3"  alt="Oregon State: Creating a Campus Media Portal" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wj7v2wxm/version/100001/acv/161/width/1280/height/500/type/3"  alt="Kaltura Enterprise Video Solutions" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            01:36                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">Kaltura Enterprise Video Solutions</h2>
                <h4 class="visible-phone entryTitle tight">Kaltura Enterprise Video Solutions</h4>
                <p class='hidden-phone normalWordBreak'>
                    Learn how you can save time and costs with online video. Train and educate staff and create a learning center to preserve company knowledge. Kaltura integrates with all leading LMS platforms, as well as SharePoint and other CMSs.                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/Oregon+StateA+Creating+a+Campus+Media+Portal/1_q02g3er1"><a href="/media/Oregon+StateA+Creating+a+Campus+Media+Portal/1_q02g3er1">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wj7v2wxm/version/100001/acv/161/width/710/height/400/type/3"  alt="Kaltura Enterprise Video Solutions" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_q02g3er1/version/100001/acv/121/width/710/height/400/type/3"  alt="Oregon State: Creating a Campus Media Portal" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6bbywd4a/version/100001/acv/131/width/710/height/400/type/3"  alt="Columbia Business School:Video as a Marketing Tool in Education" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_q02g3er1/version/100001/acv/121/width/1280/height/500/type/3"  alt="Oregon State: Creating a Campus Media Portal" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            01:25                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">Oregon State: Creating a Campus Media Portal</h2>
                <h4 class="visible-phone entryTitle tight">Oregon State: Creating a Campus Media Portal</h4>
                <p class='hidden-phone normalWordBreak'>
                    Raul Burriel from Oregon State University discusses how OSU utilizes Kaltura&#039;s powerful Management Console (KMC) and easy to use MediaSpace front end (KMS), to give more than 25,000 users the ability to upload, transcode and deliver media in multiple formats for both desktop and tablet users. Working closely with Kaltura, OSU has brought its years of institutional knowledge and experience to media management.                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/Columbia+Business+SchoolAVideo+as+a+Marketing+Tool+in+Education/1_6bbywd4a"><a href="/media/Columbia+Business+SchoolAVideo+as+a+Marketing+Tool+in+Education/1_6bbywd4a">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_q02g3er1/version/100001/acv/121/width/710/height/400/type/3"  alt="Oregon State: Creating a Campus Media Portal" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6bbywd4a/version/100001/acv/131/width/710/height/400/type/3"  alt="Columbia Business School:Video as a Marketing Tool in Education" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_r4u0tvhi/version/100001/acv/131/width/710/height/400/type/3"  alt="Cornell Uni: Scaling the Video Infrastructure" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6bbywd4a/version/100001/acv/131/width/1280/height/500/type/3"  alt="Columbia Business School:Video as a Marketing Tool in Education" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            01:05                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">Columbia Business School:Video as a Marketing Tool in Education</h2>
                <h4 class="visible-phone entryTitle tight">Columbia Business School:Video as a Marketing Tool in Education</h4>
                <p class='hidden-phone normalWordBreak'>
                    Like many universities, Columbia Business School began using video to capture classes and make them available to students for later viewing. However, the school&#039;s marketing and communication departments soon realized the value in using video to promote the school&#039;s brand and feature some of its alumni. Chris Bellerjeau, Director of Multimedia Services at Columbia Business School, shares some statistics and explains how schools can measure ROI when in comes to video usage.                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/Cornell+UniA+Scaling+the+Video+Infrastructure/1_r4u0tvhi"><a href="/media/Cornell+UniA+Scaling+the+Video+Infrastructure/1_r4u0tvhi">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6bbywd4a/version/100001/acv/131/width/710/height/400/type/3"  alt="Columbia Business School:Video as a Marketing Tool in Education" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_r4u0tvhi/version/100001/acv/131/width/710/height/400/type/3"  alt="Cornell Uni: Scaling the Video Infrastructure" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_vvqbcdbz/version/100000/acv/101/width/710/height/400/type/3"  alt="MediaSpace Categories" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_r4u0tvhi/version/100001/acv/131/width/1280/height/500/type/3"  alt="Cornell Uni: Scaling the Video Infrastructure" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            01:23                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">Cornell Uni: Scaling the Video Infrastructure</h2>
                <h4 class="visible-phone entryTitle tight">Cornell Uni: Scaling the Video Infrastructure</h4>
                <p class='hidden-phone normalWordBreak'>
                    Michael Tolomeo, Instructional Media Manager, shares how video usage at Cornell University evolved over time. From transcoding all videos in-house to outsourcing it to Kaltura in order to scale quickly. Today, the integration with Blackboard Learn and Kaltura is so seamless that many faculty members are able to upload and share videos with no additional training.                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                                        <div class="item">
                            <div class="photo-group featured_wrapper"> 
        <i data-href="/media/MediaSpace+Categories/1_vvqbcdbz"><a href="/media/MediaSpace+Categories/1_vvqbcdbz">

        <div class="showfullwidth"><div class="carleft"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_r4u0tvhi/version/100001/acv/131/width/710/height/400/type/3"  alt="Cornell Uni: Scaling the Video Infrastructure" width="710" height="400" /></div><div class="carmain"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_vvqbcdbz/version/100000/acv/101/width/710/height/400/type/3"  alt="MediaSpace Categories" width="710" height="400" /></div><div class="carright"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_yb1kcczb/version/100001/acv/131/width/710/height/400/type/3"  alt="SAP: Internal Social Video Portal in Enterprises" width="710" height="400" /></div></div><div class="showminwidth"><img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_vvqbcdbz/version/100000/acv/101/width/1280/height/500/type/3"  alt="MediaSpace Categories" width="1280" height="500" class="thumb_img" /></div>
                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="overlay-wrapper"> 
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            <i class="icon-eye-open icon-white hidden"></i>
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            <span class="hidden"><i class="icon-time icon-white"></i></span>
                            02:42                        </span>
                                    </p>
            </div>
            <div class="carousel-caption">
                <h2 class=" hidden-phone entryTitle tight">MediaSpace Categories</h2>
                <h4 class="visible-phone entryTitle tight">MediaSpace Categories</h4>
                <p class='hidden-phone normalWordBreak'>
                    This video describes how to create new categories and add content to your MediaSpace site.                </p>
            </div>
        </div>
    </a></i>
</div>
                        </div>
                            </div>
            <a class="left carousel-control" href="#entrySlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#entrySlider" data-slide="next">›</a>
        </div>
        <script>
            $(document).ready(function() {
                $('#entrySlider').carousel({
                    'interval': 5000,
                    'pause': 'hover'
                });  
                //$('#entrySlider .carousel-inner i[data-href]').kmsMQHref('desktop');
                $('#entrySlider .carousel-inner').swipe({
                    swipeLeft: function() {
                        $('#entrySlider').carousel('next');
                    },
                    swipeRight: function() {
                        $('#entrySlider').carousel('prev');
                    },
                    tap: function() {
                        window.location = $(this).find('div.item.active i[data-href]').attr('data-href');
                    },
                    allowPageScroll: 'vertical'
                    //excludedElements: 'button, input, select, textarea, .noSwipe'
                });
                $('#entrySlider, #entrySlider .carousel-inner, #entrySlider .item, #entrySlider .photo-group.featured_wrapper').each(function(){
                    this.onselectstart = function() { return false; };
                    this.unselectable = "on";
                    $(this).css('-moz-user-select', 'none');
                    $(this).css('-webkit-user-select', 'none');
                });
            });
        </script>
    
    <!-- other playlists -->
    <h1><a class="page-header hidden-phone clickable-header"
        href="/playlist/type/most_viewed" >Most Popular </a></h1>
<h3><a class="page-header visible-phone clickable-header"
        href="/playlist/type/most_viewed" >Most Popular </a></h3>
<ul class="thumbnails">
	    <li class="span4">
        <div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/Kaltura+Management+Console+%28KMC%29+Overview/1_p6i7bkyn">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_p6i7bkyn/version/100000/acv/101/width/478/height/269/type/3"  alt="Kaltura Management Console (KMC) Overview" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            1&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            05:42                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">Kaltura Management Console (KMC) Overview</p>
            </div>
        </div>
    </a>
</div>
    </li>

    <li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/SAPA+Internal+Social+Video+Portal+in+Enterprises/1_yb1kcczb">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_yb1kcczb/version/100001/acv/131/width/478/height/269/type/3"  alt="SAP: Internal Social Video Portal in Enterprises" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            01:19                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">SAP: Internal Social Video Portal in Enterprises</p>
            </div>
        </div>
    </a>
</div>
</li><li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/iCEVA+Monetizing+HQ+EDU+Videos+on+the+Web/1_wd2nmd5q">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wd2nmd5q/version/100001/acv/121/width/478/height/269/type/3"  alt="iCEV: Monetizing HQ EDU Videos on the Web" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            01:23                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">iCEV: Monetizing HQ EDU Videos on the Web</p>
            </div>
        </div>
    </a>
</div>
</li><li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/Intro+to+MediaSpace/1_2c8kcwnt">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_2c8kcwnt/version/100000/acv/101/width/478/height/269/type/3"  alt="Intro to MediaSpace" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            05:17                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">Intro to MediaSpace</p>
            </div>
        </div>
    </a>
</div>
</li><li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/MediaSpace+Admin+Basics/1_6epio7wh">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6epio7wh/version/100000/acv/101/width/478/height/269/type/3"  alt="MediaSpace Admin Basics" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            05:24                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">MediaSpace Admin Basics</p>
            </div>
        </div>
    </a>
</div>
</li><li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/Kaltura+Enterprise+Video+Solutions/1_wj7v2wxm">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wj7v2wxm/version/100001/acv/161/width/478/height/269/type/3"  alt="Kaltura Enterprise Video Solutions" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            01:36                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">Kaltura Enterprise Video Solutions</p>
            </div>
        </div>
    </a>
</div>
</li><li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/Oregon+StateA+Creating+a+Campus+Media+Portal/1_q02g3er1">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_q02g3er1/version/100001/acv/121/width/478/height/269/type/3"  alt="Oregon State: Creating a Campus Media Portal" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            01:25                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">Oregon State: Creating a Campus Media Portal</p>
            </div>
        </div>
    </a>
</div>
</li><li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/Columbia+Business+SchoolAVideo+as+a+Marketing+Tool+in+Education/1_6bbywd4a">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6bbywd4a/version/100001/acv/131/width/478/height/269/type/3"  alt="Columbia Business School:Video as a Marketing Tool in Education" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            01:05                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">Columbia Business School:Video as a Marketing Tool in Education</p>
            </div>
        </div>
    </a>
</div>
</li><li class="span2"><div class="photo-group featured_wrapper"
     onmouseover="KalturaThumbRotator.start($(this).find('a > img').get(0))" onmouseout="KalturaThumbRotator.end($(this).find('a > img').get(0))">
             <a href="/media/Cornell+UniA+Scaling+the+Video+Infrastructure/1_r4u0tvhi">
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_r4u0tvhi/version/100001/acv/131/width/478/height/269/type/3"  alt="Cornell Uni: Scaling the Video Infrastructure" width="478" height="269" />
        <div class="overlay-wrapper"> </div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse">
                <p class="thumb_time_content">
                                            <span class="views">
                            0&nbsp;&nbsp;<i class="icon-eye-open icon-white"></i><span class="seperator">&nbsp;|&nbsp;</span>
                        </span>
                    	
                                            <span class="duration">
                            01:23                        </span>
                                    </p>
            </div>
            <div class="thumb_name label-inverse">
                <p class="thumb_name_content">Cornell Uni: Scaling the Video Infrastructure</p>
            </div>
        </div>
    </a>
</div>
</li></ul>

</div>
            </div>
            <div id="push"></div>
        </div>
            <div class="navbar-static-bottom" id="footer">
    <div class="container">
        <p class="muted credit">
            MediaSpace™ <a href=http://corp.kaltura.com/Products/Video-Applications/Kaltura-Mediaspace-Video-Portal target=_blank> video portal</a> by <a href=http://kaltura.com target=_blank>Kaltura</a> <span style=float:right;><a href=http://knowledge.kaltura.com/page/kaltura-products-and-services-documentation#KMS target=_blank>User Guides and Technical Documentation</a></span>        </p>
    </div>
</div>

<script>
if (top != self)
{
    top.location=self.document.location;
}
</script>
    </body>
</html>