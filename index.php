<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MediaSpace CSS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    
        .form-control {margin:10px;}
        
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <h4 style="font-size:24px;">MediaSpace CSS  Generator</h4>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" target="_blank">Documentation</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
   
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message" id="bg_image" style="padding-top:1%; padding-bottom:10%; min-height:267px;">
                        
                <!-- multistep form -->
                    <form id="msform" target="_blank" method="post">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Basic Info</li>
                            <li>Menu Options</li>
                            <li>Slideshow Options</li>
                            <li>Thumbnail Config</li>
                            <li>More Colors</li>
                            <li>Custom Options</li>
                            <li>Preview &amp; Save</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 class="fs-title">Basic KMS Congurations</h2>
                            <h3 class="fs-subtitle">Step 1</h3>
                          
                            <label>File Name: </label>
                            <input id="file_name" required type="text" name="file_name" placeholder="Structure will be 'your_file_name.css'"/> 
                            <label>Custom Font <a href="http://www.google.com/fonts" target="_blank" style="font-size:10px"> > Go To Google Fonts</a> </label>
                            <input type="text" name="custom_font" value="" placeholder="ex. @import url(https://fonts.googleapis.com/css?family=Open+Sans:400);" />
                            <label>Font Category: </label>
                                <select name="font_style">
                                    <option value="sans-serif">Sans-Serif</option>
                                    <option value="serif">Serif</option>
                                    <option value="cursive">Cursive</option>
                                </select>
                            <small style="color:#333">Note: This App Does Not support Google Fonts Without A Type (sans-serif, serif, etc)</small>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Header &amp; Menu Options</h2>
                            <h3 class="fs-subtitle">Step 2</h3>
                            <div>
                            <label>Header Color: </label>
                            <input type="color" name="header_color" value="#FFFFFF" /> 
                            <label>Dropdown Menu Hover Color </label>
                            <input type="color" name="dropdown_menu_hover_color" value="#0088CC" />
                            <label>Menu Font Color: </label>
                            <input type="color" name="menu_font_color" value="#777777" />
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Slideshow Options</h2>
                            <h3 class="fs-subtitle">Step 3</h3>
                            <div class="width50 float-left">
                            <label>Carousel Title Color: </label>
                            <input type="color" name="carousel_title_color" value="#FFFFFF" /> 
                            <label>Carousel Paragraph Text Color </label>
                            <input type="color" name="carousel_paragraph_text_color" value="#FFFFFF" />
                            <label>Carousel MetaData Background Color: </label>
                            <input type="color" name="carousel_metadata_background_color" value="#000000" />
                            <label>Carousel MetaData Background Opacity (default is 0.75): </label>
                            <input type="text" maxlength="4" name="carousel_metadata_background_opacity" value="0.75" />
                            </div>
                            <div class="width50 float-left clear-right">
                            <label>Carousel Arrow Background Color: </label>
                            <input  type="color" name="carousel_arrow_background_color" value="#222222" /> 
                            <label>Carousel Arrow Color </label>
                            <input type="color" name="carousel_arrow_color" value="#FFFFFF" />
                            <label>Carousel Arrow Border Color </label>
                            <input type="color" name="carousel_arrow_border_color" value="#FFFFFF" />
                            <label>Carousel Arrow Default Opacity (default is 0.5): </label>
                            <input type="text" maxlength="3" name="carousel_arrow_default_opacity" value="0.5" />
                            </div>
                             <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                        </fieldset>
                         <fieldset>
                            <h2 class="fs-title">Homepage Thumbnail Configuration</h2>
                            <h3 class="fs-subtitle">Step 4</h3>
                            <label>Thumbnails Per Row: </label>
                              <select name="thumbnails_per_row" />
                                  <option value="0">- Select One -</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">Default</option>
                                </select> 
                             <label>Display How Many Thumbnails per Category/Channel? </label>
                              <select name="thumbnail_limit" />
                                  <option value="0">- Select One -</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9 (default)</option>
                                </select> 
                            <label>Display MetaData Underneath Thumbnail Rather Than Overlaid? </label>
                              <select name="thumbnail_metadata_overlay" />
                                  <option value="0">- DEFAULT -</option>
                                  <option value="1">YES</option>
                                  <option value="0">NO (Default)</option>
                                </select> 
                            <label>Show MediaType Icon in Left Corner? </label>
                              <select name="show_mediatype_icon" />
                                  <option value="1">- DEFAULT -</option>
                                  <option value="1">YES (Default)</option>
                                  <option value="0">NO</option>
                                </select> 
                             <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                        </fieldset>
                         <fieldset>
                            <h2 class="fs-title">More Color Options</h2>
                            <h3 class="fs-subtitle">Step 5</h3>
                            <label>Links Color: </label>
                            <input type="color" name="link_color" value="#0088CC"/>
                            <label>Pills Color: </label>
                            <input type="color" name="pills_color" value="#0088CC"/>
                            <label>Tags Color: </label>
                            <input type="color" name="tags_color" value="#3a87ad"/>
                            <label>Category Color: </label>
                            <input type="color" name="category_color" value="#2d6987"/>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Custom Option</h2>
                            <h3 class="fs-subtitle">Step 6</h3>
                            <label>Sticky Header</label>
                              <select name="sticky_header" />
                                  <option value="0">- DEFAULT -</option>
                                  <option value="1">YES</option>
                                  <option value="0">NO (Default)</option>
                                </select> 
                           <label>Black and White Thumbnails > Color On Hover </label>
                              <select name="bw_thumbnails" />
                                  <option value="0">- DEFAULT -</option>
                                  <option value="1">YES</option>
                                  <option value="0">NO (Default)</option>
                                </select> 
                            <label>Overlay Icon on Thumbnail (must be 37px x 37px exactly) </label>
                            <input type="url" name="thumbnail_img_overlay" placeholder="https://www.kalmarglobal.com/Static/img/video-play-icon.png" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                        </fieldset>
                         <fieldset>
                            <h2 class="fs-title">Preview &amp; Save</h2>
                            <h3 class="fs-subtitle">View Your Design and Save It</h3>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <div id="preview_home" class="preview-img" onclick="submitCssForm('preview_home.php')">
                                <img src="img/preview1.jpg">
                             </div>
                             <div id="preview_video" class="preview-img" onclick="submitCssForm('preview_video.php')">
                                <img src="img/preview3.jpg">
                             </div>
                             <div id="preview_results" class="preview-img" onclick="submitCssForm('preview_results.php')">
                                <img src="img/preview2.jpg">
                             </div>
                            <input type="button" onclick="submitCssForm('process.php')" class="submit action-button" value="Submit &amp; Download" />
                        </fieldset>
                    </form>
              <!-- /.row -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
  

<script language="javascript" type="text/javascript">
//Form Action Based on Preference
    
    function submitCssForm(url) {
        $("#msform").attr('action', url);
        $("#msform").submit();
    };
    
</script>

<script>
    
    
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var x = $('input[name=file_name]');
    
$(".next").click(function(){
     if (x.val() == null || x.val() == "") {
        alert("Name must be filled out");
        return false;
    }
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
});
    

//bind footer to load, stick to bottom of screen
//hide if window.innerHeight < all the content above it combined
    $(window).on("load resize",function(e) {
        
        if(window.innerHeight > 358) {
            
            var x = (window.innerHeight) - 90;

            $('#bg_image').css("height", x + "px")
        
        }
        else { $('#bg_image').css("height", "267px")}

    });

</script>    
    

</body>

</html>
