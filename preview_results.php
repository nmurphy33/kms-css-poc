
<!DOCTYPE html>


<!--[if lte IE 7]> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"class="ie7"> <![endif]-->
<!--[if IE 8]>     <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>     <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">             <!--<![endif]-->

<head>
<!-- viewhook start modulesHeader -->


<!-- viewhook end modulesHeader --><meta name="xsrf-ajax-nonce" content="ZqVfbqThMNZsK0RHJ69jiAd9lIqIMxZVt/g10qPVlVKUeZ/bG5y26qSWhX4iTe6BmHAESTFvDzRaJva7cCvtZ9UcklHxcNMHKazV0w3NvwjXI47uD1gjsBOrqC0OjA2I" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Kaltura Demo</title>

<!--[if lt IE 9]> <style type="text/css" media="screen">
body{-ms-overflow-y : scroll;}
</style><![endif]--><link href="css/kms.css" media="screen" rel="stylesheet" type="text/css" /><link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/favicon.ico" rel="icon" type="png" /><!--[if lt IE 10]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/css/ieadditions.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/fontAwesome/font-awesome-ie7.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/css/bootstrap-ie7buttonfix.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]> <link href="http://kms-a.akamaihd.net/dc-1/5.40.53/public/build0/css/bootstrap-ie8buttonfix.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
    
    <script type="text/javascript" src="js/kms.js"></script>
    <script type="text/javascript" src="js/kms2.js"></script>
    <script type="text/javascript">
    //<![CDATA[
window.kms_kWidgetJsLoader_baseurl = "http:\/\/cdnapi.kaltura.com\/p\/((PARTNER_ID))\/sp\/((PARTNER_ID))00\/embedIframeJs\/uiconf_id\/((PLAYER_ID))\/partner_id\/((PARTNER_ID))";window.kms_kWidgetJsLoader_partnerId = 2070241;if (typeof(kms_kWidgetJsLoader) == "undefined") {kms_kWidgetJsLoader_loadedElsewherePlayerId = 33215011;} else {kms_kWidgetJsLoader.loadedElsewhere(33215011);};    //]]>
</script>
    
<style>

    <?php require "logic.php"; echo $text; ?>

</style>    

</head>
    <body class="module-default controller-search action-index">
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
                    <span>Kaltura Demo</span>
            </a>
</div>
<div class="hidden-desktop ">
    <div class="center">
        <a href="/"  class="">
                            <span class="brand">Kaltura Demo</span>
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
        <input type="text" name="searchkeyword" id="main_search_search_for" value="the" onfocus="" onblur="" class="input-medium searchInput search-query Xhidden" placeholder="Search" />    </div>
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
                            <li >
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
        <input type="text" name="searchkeyword" id="menuSearch_search_for" value="the" onfocus="" onblur="" class="input-medium searchInput search-query Xhidden" placeholder="Search" />    </div>
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
                <li >
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
                

<div class='row-fluid'>
            <h1>Search for: "<span  id='searchTerm'>the</span>"</h1>
    	<div id="searchResultsTable" class="tabtable">
		<ul class="nav nav-pills">
	<li class='active'  id="media"><a id="media-tab" data-original-title="11 Media" href="#media-pane"  data-toggle="tab">11 Media</a></li>
<li class='hidden-phone' ><a id="search-chapters-tab" data-original-title="Search In Timeline" href="#search-chapters-pane"  data-track="Global Timeline Search" data-toggle="tab">Search In Timeline</a></li>
<li class='hidden-phone' ><a id="captions-tab" data-original-title="Search In Video" href="#captions-pane"  data-toggle="tab">Search In Video</a></li>
<li  ><a id="channels-tab" data-original-title="Search Channels" href="#channels-pane"  data-toggle="tab">Search Channels</a></li>
<li  ><a id="galleries-tab" data-original-title="Search Categories" href="#galleries-pane"  data-toggle="tab">Search Categories</a></li>
</ul>
		<div class="tab-content">
			<div id="media-pane" class="tab-pane active ">        <div id='filterBarWrap' class="row-fluid" >
            
<ul class="nav pull-left" id="filterBar">
        	
<li class="dropdown  sort">
	<a class=" dropdown-toggle responsiveSize" data-toggle="dropdown" href="#"><span class="hidden-phone">Sort by</span> Most Recent<b class="caret"></b></a>
	<ul class="dropdown-menu">
		<li><a  rel="async" href="/search/sort/recent/keyword/the/mediatypeparam//searchkeyword/the"><i class="icon-ok"></i>Most Recent</a></li><li><a  rel="async" href="/search/sort/views/keyword/the/mediatypeparam//searchkeyword/the">Views</a></li><li><a  rel="async" href="/search/sort/name/keyword/the/mediatypeparam//searchkeyword/the">Alphabetical</a></li><li><a  rel="async" href="/search/sort/-name/keyword/the/mediatypeparam//searchkeyword/the"></a></li><li><a  rel="async" href="/search/sort/comments/keyword/the/mediatypeparam//searchkeyword/the">Comments</a></li>	</ul>
</li>
        	
<li class="dropdown  type">
	<a class=" dropdown-toggle responsiveSize" data-toggle="dropdown" href="#"><span class="hidden-phone">View</span> All Media<b class="caret"></b></a>
	<ul class="dropdown-menu">
		<li><a  rel="async" href="/search/sort/recent/type/all/keyword/the/mediatypeparam//searchkeyword/the"><i class="icon-ok"></i>All Media</a></li><li class="divider"></li><li><a  rel="async" href="/search/sort/recent/type/video/keyword/the/mediatypeparam//searchkeyword/the">Video</a></li><li><a  rel="async" href="/search/sort/recent/type/audioentry/keyword/the/mediatypeparam//searchkeyword/the">Audio</a></li><li><a  rel="async" href="/search/sort/recent/type/imageentry/keyword/the/mediatypeparam//searchkeyword/the">Image</a></li>	</ul>
</li>
    </ul>
    </div>

    <div class="row-fluid">
        <table class="table table-hover mediaTable" id="videosResultsTable">
            <tbody>
                
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Kaltura Education Video Solutions">
    <a class="item_link" href="/media/Kaltura+Education+Video+Solutions/1_b8rfabz4" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_b8rfabz4/version/100001/acv/151/width/275/height/155/type/3"  alt="Kaltura Education Video Solutions" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">01:40</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Kaltura+Education+Video+Solutions/1_b8rfabz4"><span class="searchme">Kaltura Education Video Solutions</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    Video management and publishing is becoming a core part of the modern day educational institution. We offer flexible options to jumpstart a next generation video experience on your campus and&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/kaltura" ><span class="badge badge-info"><i class="icon-tag"></i>kaltura</span></a><a href="/tag/tagid/classroom" ><span class="badge badge-info"><i class="icon-tag"></i>classroom</span></a><a href="/tag/tagid/university" ><span class="badge badge-info"><i class="icon-tag"></i>university</span></a><a href="/tag/tagid/learning" ><span class="badge badge-info"><i class="icon-tag"></i>learning</span></a><a href="/tag/tagid/lms" ><span class="badge badge-info"><i class="icon-tag"></i>lms</span></a><a href="/tag/tagid/students" ><span class="badge badge-info"><i class="icon-tag"></i>students</span></a><a href="/tag/tagid/faculty" ><span class="badge badge-info"><i class="icon-tag"></i>faculty</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/JVSTotuRAETg7lNEk-_g1MQ__">__ADMIN__36734</a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Kaltura+Education+Video+Solutions/1_b8rfabz4#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_b8rfabz4">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_b8rfabz4" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_b8rfabz4" href="#collapse_1_b8rfabz4">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_b8rfabz4" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Kaltura Management Console (KMC) Overview">
    <a class="item_link" href="/media/Kaltura+Management+Console+%28KMC%29+Overview/1_p6i7bkyn" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_p6i7bkyn/version/100000/acv/101/width/275/height/155/type/3"  alt="Kaltura Management Console (KMC) Overview" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">05:42</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Kaltura+Management+Console+%28KMC%29+Overview/1_p6i7bkyn"><span class="searchme">Kaltura Management Console (KMC) Overview</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    This video tutorial explores the various features Kaltura's Management Console or 'KMC' has to offer. The video will equip every KMC user with the skills and knowledge to make full use of all the&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/kmc" ><span class="badge badge-info"><i class="icon-tag"></i>kmc</span></a><a href="/tag/tagid/management%20console" ><span class="badge badge-info"><i class="icon-tag"></i>management console</span></a><a href="/tag/tagid/metadata" ><span class="badge badge-info"><i class="icon-tag"></i>metadata</span></a><a href="/tag/tagid/analytics" ><span class="badge badge-info"><i class="icon-tag"></i>analytics</span></a><a href="/tag/tagid/ingestion" ><span class="badge badge-info"><i class="icon-tag"></i>ingestion</span></a><a href="/tag/tagid/dashboard" ><span class="badge badge-info"><i class="icon-tag"></i>dashboard</span></a><a href="/tag/tagid/upload" ><span class="badge badge-info"><i class="icon-tag"></i>upload</span></a><a href="/tag/tagid/transcoding" ><span class="badge badge-info"><i class="icon-tag"></i>transcoding</span></a><a href="/tag/tagid/account%20management" ><span class="badge badge-info"><i class="icon-tag"></i>account management</span></a><a href="/tag/tagid/studio" ><span class="badge badge-info"><i class="icon-tag"></i>studio</span></a><a href="/tag/tagid/player" ><span class="badge badge-info"><i class="icon-tag"></i>player</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>1&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Kaltura+Management+Console+%28KMC%29+Overview/1_p6i7bkyn#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_p6i7bkyn">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_p6i7bkyn" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_p6i7bkyn" href="#collapse_1_p6i7bkyn">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_p6i7bkyn" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Kaltura MediaSpace Overview">
    <a class="item_link" href="/media/Kaltura+MediaSpace+Overview/1_xx0s9eqh" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_xx0s9eqh/version/100000/acv/101/width/275/height/155/type/3"  alt="Kaltura MediaSpace Overview" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">03:13</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Kaltura+MediaSpace+Overview/1_xx0s9eqh"><span class="searchme">Kaltura MediaSpace Overview</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    An out of the box social video portal for your organization - MediaSpace enables collaboration, communication, and learning by leveraging the power of online video. Watch this video to learn how.                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/mediaspace" ><span class="badge badge-info"><i class="icon-tag"></i>mediaspace</span></a><a href="/tag/tagid/product%20overview" ><span class="badge badge-info"><i class="icon-tag"></i>product overview</span></a><a href="/tag/tagid/kaltura" ><span class="badge badge-info"><i class="icon-tag"></i>kaltura</span></a><a href="/tag/tagid/collaboration" ><span class="badge badge-info"><i class="icon-tag"></i>collaboration</span></a><a href="/tag/tagid/channels" ><span class="badge badge-info"><i class="icon-tag"></i>channels</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/JVSTotuRAETg7lNEk-_g1MQ__">__ADMIN__36734</a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Kaltura+MediaSpace+Overview/1_xx0s9eqh#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_xx0s9eqh">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_xx0s9eqh" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_xx0s9eqh" href="#collapse_1_xx0s9eqh">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_xx0s9eqh" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Kaltura Video Platform Overview">
    <a class="item_link" href="/media/Kaltura+Video+Platform+Overview/1_yfkr3ege" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_yfkr3ege/version/100001/acv/121/width/275/height/155/type/3"  alt="Kaltura Video Platform Overview" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">02:47</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Kaltura+Video+Platform+Overview/1_yfkr3ege"><span class="searchme">Kaltura Video Platform Overview</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    Kaltura is the world's first Open Source Online Video Platform, providing video solutions, software and services for video publishing, management, syndication and monetization. Start your free trial&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/kaltura" ><span class="badge badge-info"><i class="icon-tag"></i>kaltura</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Kaltura+Video+Platform+Overview/1_yfkr3ege#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_yfkr3ege">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_yfkr3ege" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_yfkr3ege" href="#collapse_1_yfkr3ege">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_yfkr3ege" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Cornell Uni: Scaling the Video Infrastructure">
    <a class="item_link" href="/media/Cornell+UniA+Scaling+the+Video+Infrastructure/1_r4u0tvhi" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_r4u0tvhi/version/100001/acv/131/width/275/height/155/type/3"  alt="Cornell Uni: Scaling the Video Infrastructure" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">01:23</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Cornell+UniA+Scaling+the+Video+Infrastructure/1_r4u0tvhi"><span class="searchme">Cornell Uni: Scaling the Video Infrastructure</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    Michael Tolomeo, Instructional Media Manager, shares how video usage at Cornell University evolved over time. From transcoding all videos in-house to outsourcing it to Kaltura in order to scale&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/instruction" ><span class="badge badge-info"><i class="icon-tag"></i>instruction</span></a><a href="/tag/tagid/media" ><span class="badge badge-info"><i class="icon-tag"></i>media</span></a><a href="/tag/tagid/video" ><span class="badge badge-info"><i class="icon-tag"></i>video</span></a><a href="/tag/tagid/production" ><span class="badge badge-info"><i class="icon-tag"></i>production</span></a><a href="/tag/tagid/centralized" ><span class="badge badge-info"><i class="icon-tag"></i>centralized</span></a><a href="/tag/tagid/plugin" ><span class="badge badge-info"><i class="icon-tag"></i>plugin</span></a><a href="/tag/tagid/learning%20management%20system" ><span class="badge badge-info"><i class="icon-tag"></i>learning management system</span></a><a href="/tag/tagid/students" ><span class="badge badge-info"><i class="icon-tag"></i>students</span></a><a href="/tag/tagid/courses" ><span class="badge badge-info"><i class="icon-tag"></i>courses</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Cornell+UniA+Scaling+the+Video+Infrastructure/1_r4u0tvhi#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_r4u0tvhi">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_r4u0tvhi" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_r4u0tvhi" href="#collapse_1_r4u0tvhi">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_r4u0tvhi" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Columbia Business School:Video as a Marketing Tool in Education">
    <a class="item_link" href="/media/Columbia+Business+SchoolAVideo+as+a+Marketing+Tool+in+Education/1_6bbywd4a" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6bbywd4a/version/100001/acv/131/width/275/height/155/type/3"  alt="Columbia Business School:Video as a Marketing Tool in Education" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">01:05</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Columbia+Business+SchoolAVideo+as+a+Marketing+Tool+in+Education/1_6bbywd4a"><span class="searchme">Columbia Business School:Video as a Marketing Tool in Education</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    Like many universities, Columbia Business School began using video to capture classes and make them available to students for later viewing. However, the school's marketing and communication&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/columbia" ><span class="badge badge-info"><i class="icon-tag"></i>columbia</span></a><a href="/tag/tagid/video%20platform" ><span class="badge badge-info"><i class="icon-tag"></i>video platform</span></a><a href="/tag/tagid/customizable" ><span class="badge badge-info"><i class="icon-tag"></i>customizable</span></a><a href="/tag/tagid/applications" ><span class="badge badge-info"><i class="icon-tag"></i>applications</span></a><a href="/tag/tagid/video" ><span class="badge badge-info"><i class="icon-tag"></i>video</span></a><a href="/tag/tagid/education" ><span class="badge badge-info"><i class="icon-tag"></i>education</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Columbia+Business+SchoolAVideo+as+a+Marketing+Tool+in+Education/1_6bbywd4a#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_6bbywd4a">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_6bbywd4a" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_6bbywd4a" href="#collapse_1_6bbywd4a">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_6bbywd4a" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Oregon State: Creating a Campus Media Portal">
    <a class="item_link" href="/media/Oregon+StateA+Creating+a+Campus+Media+Portal/1_q02g3er1" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_q02g3er1/version/100001/acv/121/width/275/height/155/type/3"  alt="Oregon State: Creating a Campus Media Portal" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">01:25</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Oregon+StateA+Creating+a+Campus+Media+Portal/1_q02g3er1"><span class="searchme">Oregon State: Creating a Campus Media Portal</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    Raul Burriel from Oregon State University discusses how OSU utilizes Kaltura's powerful Management Console (KMC) and easy to use MediaSpace front end (KMS), to give more than 25,000 users the ability&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/education" ><span class="badge badge-info"><i class="icon-tag"></i>education</span></a><a href="/tag/tagid/video" ><span class="badge badge-info"><i class="icon-tag"></i>video</span></a><a href="/tag/tagid/campus" ><span class="badge badge-info"><i class="icon-tag"></i>campus</span></a><a href="/tag/tagid/faculty" ><span class="badge badge-info"><i class="icon-tag"></i>faculty</span></a><a href="/tag/tagid/staff" ><span class="badge badge-info"><i class="icon-tag"></i>staff</span></a><a href="/tag/tagid/students" ><span class="badge badge-info"><i class="icon-tag"></i>students</span></a><a href="/tag/tagid/sso" ><span class="badge badge-info"><i class="icon-tag"></i>sso</span></a><a href="/tag/tagid/central" ><span class="badge badge-info"><i class="icon-tag"></i>central</span></a><a href="/tag/tagid/accessible" ><span class="badge badge-info"><i class="icon-tag"></i>accessible</span></a><a href="/tag/tagid/lecture%20capture" ><span class="badge badge-info"><i class="icon-tag"></i>lecture capture</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Oregon+StateA+Creating+a+Campus+Media+Portal/1_q02g3er1#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_q02g3er1">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_q02g3er1" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_q02g3er1" href="#collapse_1_q02g3er1">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_q02g3er1" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="MediaSpace Admin Basics">
    <a class="item_link" href="/media/MediaSpace+Admin+Basics/1_6epio7wh" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_6epio7wh/version/100000/acv/101/width/275/height/155/type/3"  alt="MediaSpace Admin Basics" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">05:24</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/MediaSpace+Admin+Basics/1_6epio7wh"><span class="searchme">MediaSpace Admin Basics</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    This video reviews the Kaltura Kaltura MediaSpace Admin Console                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/admin%20basics" ><span class="badge badge-info"><i class="icon-tag"></i>admin basics</span></a><a href="/tag/tagid/mediaspace" ><span class="badge badge-info"><i class="icon-tag"></i>mediaspace</span></a><a href="/tag/tagid/vod%20training" ><span class="badge badge-info"><i class="icon-tag"></i>vod training</span></a><a href="/tag/tagid/video%20tutorials" ><span class="badge badge-info"><i class="icon-tag"></i>video tutorials</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/MediaSpace+Admin+Basics/1_6epio7wh#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_6epio7wh">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_6epio7wh" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_6epio7wh" href="#collapse_1_6epio7wh">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_6epio7wh" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="Intro to MediaSpace">
    <a class="item_link" href="/media/Intro+to+MediaSpace/1_2c8kcwnt" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_2c8kcwnt/version/100000/acv/101/width/275/height/155/type/3"  alt="Intro to MediaSpace" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">05:17</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/Intro+to+MediaSpace/1_2c8kcwnt"><span class="searchme">Intro to MediaSpace</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    A general overview of Kaltura's out-of-the-box video centric site-MediaSpace                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/vod%20training" ><span class="badge badge-info"><i class="icon-tag"></i>vod training</span></a><a href="/tag/tagid/mediaspace" ><span class="badge badge-info"><i class="icon-tag"></i>mediaspace</span></a><a href="/tag/tagid/overview" ><span class="badge badge-info"><i class="icon-tag"></i>overview</span></a><a href="/tag/tagid/video%20tutorials" ><span class="badge badge-info"><i class="icon-tag"></i>video tutorials</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/Intro+to+MediaSpace/1_2c8kcwnt#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_2c8kcwnt">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_2c8kcwnt" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_2c8kcwnt" href="#collapse_1_2c8kcwnt">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_2c8kcwnt" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="iCEV: Monetizing HQ EDU Videos on the Web">
    <a class="item_link" href="/media/iCEVA+Monetizing+HQ+EDU+Videos+on+the+Web/1_wd2nmd5q" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_wd2nmd5q/version/100001/acv/121/width/275/height/155/type/3"  alt="iCEV: Monetizing HQ EDU Videos on the Web" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">01:23</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/iCEVA+Monetizing+HQ+EDU+Videos+on+the+Web/1_wd2nmd5q"><span class="searchme">iCEV: Monetizing HQ EDU Videos on the Web</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    Dusty Moore, President of iCEV, discusses how iCEV is using Kaltura to distribute educational videos. He explains the importance of producing quality content for the web and the advantage of having&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/multimedia" ><span class="badge badge-info"><i class="icon-tag"></i>multimedia</span></a><a href="/tag/tagid/library" ><span class="badge badge-info"><i class="icon-tag"></i>library</span></a><a href="/tag/tagid/cost%20effective" ><span class="badge badge-info"><i class="icon-tag"></i>cost effective</span></a><a href="/tag/tagid/ease%20of%20use" ><span class="badge badge-info"><i class="icon-tag"></i>ease of use</span></a><a href="/tag/tagid/content" ><span class="badge badge-info"><i class="icon-tag"></i>content</span></a><a href="/tag/tagid/devices" ><span class="badge badge-info"><i class="icon-tag"></i>devices</span></a><a href="/tag/tagid/platforms" ><span class="badge badge-info"><i class="icon-tag"></i>platforms</span></a><a href="/tag/tagid/software" ><span class="badge badge-info"><i class="icon-tag"></i>software</span></a><a href="/tag/tagid/online" ><span class="badge badge-info"><i class="icon-tag"></i>online</span></a><a href="/tag/tagid/video" ><span class="badge badge-info"><i class="icon-tag"></i>video</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>1&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/iCEVA+Monetizing+HQ+EDU+Videos+on+the+Web/1_wd2nmd5q#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_wd2nmd5q">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_wd2nmd5q" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_wd2nmd5q" href="#collapse_1_wd2nmd5q">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_wd2nmd5q" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr>
<tr>
    <td class='thumbTd'>
        

<div class="photo-group thumb_wrapper"  
	title="SAP: Internal Social Video Portal in Enterprises">
    <a class="item_link" href="/media/SAPA+Internal+Social+Video+Portal+in+Enterprises/1_yb1kcczb" >
        <img src="http://cfvod.kaltura.com/p/2070241/sp/207024100/thumbnail/entry_id/1_yb1kcczb/version/100001/acv/131/width/275/height/155/type/3"  alt="SAP: Internal Social Video Portal in Enterprises" width="275" height="155" class="thumb_img" />	

        <div class="overlay-wrapper"></div>

                <div class='thumb_icon label-inverse wrap-icon-film'><p class="thumb_icon_content"><i class='icon-film icon-white'></i></p></div>
        <div class="thumb_labels_wrapper">
            <div class="thumb_time label-inverse wrap-icon-film">
                <p class="thumb_time_content">
                <span class="duration">01:19</span>                </p>
            </div>
        
                    </div>
    </a><!-- item_link -->

    
    </div>
    </td>
    <td class='dataTd'>
        <div class='fullsize'>
            <h4 class="entryTitle"><a href="/media/SAPA+Internal+Social+Video+Portal+in+Enterprises/1_yb1kcczb"><span class="searchme">SAP: Internal Social Video Portal in Enterprises</span></a></h4>
            <div class="">
                <p class='normalWordBreak searchme hidden-phone'>
                    In the past, it took days for SAP employees to create a single video. These days, it takes them an average of a few minutes. With over 80,000 employees, SAP uses Kaltura to distribute audio and video&hellip;                </p>
                <div class="hidden-phone">
                    <div class="tagsWrapper">
<a href="/tag/tagid/enterprise" ><span class="badge badge-info"><i class="icon-tag"></i>enterprise</span></a><a href="/tag/tagid/video" ><span class="badge badge-info"><i class="icon-tag"></i>video</span></a><a href="/tag/tagid/knowledge%20management" ><span class="badge badge-info"><i class="icon-tag"></i>knowledge management</span></a><a href="/tag/tagid/information" ><span class="badge badge-info"><i class="icon-tag"></i>information</span></a><a href="/tag/tagid/employee" ><span class="badge badge-info"><i class="icon-tag"></i>employee</span></a><a href="/tag/tagid/sharing" ><span class="badge badge-info"><i class="icon-tag"></i>sharing</span></a><a href="/tag/tagid/media" ><span class="badge badge-info"><i class="icon-tag"></i>media</span></a><a href="/tag/tagid/training" ><span class="badge badge-info"><i class="icon-tag"></i>training</span></a><a href="/tag/tagid/how-to" ><span class="badge badge-info"><i class="icon-tag"></i>how-to</span></a></div>                </div>
                <div class='mediaStats'>
                    <span class="muted thumb_user_content">                            
                        From&nbsp;                        <span class="searchme">
                        <span class="userLink"><a href="/createdby/s366i1WZJE0F7fwxcfMllQ__"></a></span>  
                        </span>
                        <span class='thumbTimeAdded'>A month ago</span>                           
                    </span>
                    <span class="stat_data hidden-phone">
                        	<span class="stat"><span class="seperator">&nbsp;|&nbsp;</span>0&nbsp;&nbsp;<i class="icon-eye-open"></i></span>	
				
<span class="stat"><span class="seperator">&nbsp;|&nbsp</span><a href="/media/SAPA+Internal+Social+Video+Portal+in+Enterprises/1_yb1kcczb#comments-tab-tab">0&nbsp;&nbsp;<i class="icon-comment"></i></a></span>                    </span>
                </div>
                <div class="accordion" id="accordion_1_yb1kcczb">
    <!-- <div class="accordion-group"> -->
        <div class="accordion-heading">
            <span class="hidden-phone pull-right">
                <a id="accordion-1_yb1kcczb" class="accordion-toggle  hidden" data-toggle="collapse"  data-parent="#accordion_1_yb1kcczb" href="#collapse_1_yb1kcczb">
                    <i class="icon-plus-sign kmstooltip" data-placement='top' title='More'></i>
                </a>
            </span>
        </div>
    <!--</div> -->

    <div id="collapse_1_yb1kcczb" class="accordion-body collapse">
            </div>
</div>            </div>

        </div>
    </td>
</tr><script type="text/javascript">$('.accordion').kmsAccordion();</script>
                      </tbody>
        </table>
    </div>

	</div>	
</div>

<script>
    $('#searchResultsTable ul li a[data-original-title]').kmsTooltip({placement: 'bottom'});
	$(document).ready(function() {
		$(".searchme,.badge i").kmsHighlight("the");
		$.event.trigger('kmsTrack','Global Search');
	});
</script>
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