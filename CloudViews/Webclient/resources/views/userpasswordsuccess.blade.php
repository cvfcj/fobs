<!--
Author: Designmaz
Author URL: https://www.designmaz.net
License URL: https://www.designmaz.net/licence/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>CloudViews - Password</title>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Custom Theme files -->
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
        <!-- js -->
<!--        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr.custom.js"></script>-->
        <!-- //js -->
        <!-- fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- //fonts -->	
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });
        </script>
        <!--pop-up-->
        <script src="js/menu_jquery.js"></script>
        <!--//pop-up-->	
        <!--Google Analytics Designmaz-->
        <style>
            .container{
                margin-top:20px;
            }
            .image-preview-input {
                position: relative;
                overflow: hidden;
                margin: 0px;    
                color: #333;
                background-color: #fff;
                border-color: #ccc;    
            }
            .image-preview-input input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            .image-preview-input-title {
                margin-left:2px;
            }
            .label{
                font-size: 15px;
            }
            .italic{
                font-size: 12px;
                color: #f5f8fa; 
            }
            .error{
                font-size: 12px;
                color: #DF2229;
            }

        </style>
        <script>
            $(document).on('click', '#close-preview', function () {
                $('.image-preview').popover('hide');
                // Hover befor close the preview
                $('.image-preview').hover(
                        function () {
                            $('.image-preview').popover('show');
                        },
                        function () {
                            $('.image-preview').popover('hide');
                        }
                );
            });

            $(function () {
                // Create the close button
                var closebtn = $('<button/>', {
                    type: "button",
                    text: 'x',
                    id: 'close-preview',
                    style: 'font-size: initial;',
                });
                closebtn.attr("class", "close pull-right");
                // Set the popover default content
                $('.image-preview').popover({
                    trigger: 'manual',
                    html: true,
                    title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
                    content: "There's no image",
                    placement: 'bottom'
                });
                // Clear event
                $('.image-preview-clear').click(function () {
                    $('.image-preview').attr("data-content", "").popover('hide');
                    $('.image-preview-filename').val("");
                    $('.image-preview-clear').hide();
                    $('.image-preview-input input:file').val("");
                    $(".image-preview-input-title").text("Upload Image");
                });
                // Create the preview image
                $(".image-preview-input input:file").change(function () {
                    var img = $('<img/>', {
                        id: 'dynamic',
                        width: 1000,
                        height: 1000
                    });
                    var file = this.files[0];
                    var reader = new FileReader();
                    // Set preview image into the popover data-content
                    reader.onload = function (e) {
                        $(".image-preview-input-title").text("Change");
                        $(".image-preview-clear").show();
                        $(".image-preview-filename").val(file.name);
                        img.attr('src', e.target.result);
                        $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
                    }
                    reader.readAsDataURL(file);
                });
            });
        </script>
        <style>
            .container{
                margin-top:20px;
            }
            .logo-preview-input {
                position: relative;
                overflow: hidden;
                margin: 0px;    
                color: #333;
                background-color: #fff;
                border-color: #ccc;    
            }
            .logo-preview-input input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            .logo-preview-input-title {
                margin-left:2px;
            }
            .label{
                font-size: 15px;
            }
            .italic{
                font-size: 12px;
                color: #f5f8fa; 
            }
        </style>

        <script>(function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-35751449-15', 'auto');
            ga('send', 'pageview');


        </script></head>
    <body>
        <!--header-->
        <div class="header">
            <div class="container">
                <div class="header-grids">
                    <div class="logo">
                        <h1><a  href="index.html"><span>CloudViews - Password</span></a></h1>
                    </div>
                    <!--navbar-header-->
                    <div class="header-dropdown">
                        <div class="emergency-grid">
                            <!--                            <ul>
                                                            <li>Toll Free : </li>
                                                            <li class="call">+1 234 567 8901</li>
                                                        </ul>-->
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="nav-top">
                    <div class="top-nav">
                        <span class="menu"><img src="images/menu.png" alt="" /></span>
                        <ul class="nav1">
                            <li >
                                <a href="home">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">passwordsuccess</a>
                            </li>
<!--                            <li class="active">
                                <a href="about.html">Create Ads</a>
                            </li>
                            <li class="active">
                                <a href="post.html">Add Events</a>
                            </li>
                            <li class="active">-->
<!--                                <a href="contact.html">Set Location</a>
                            </li>
                            <li class="active">
                                <a href="contact.html">View Reports</a>
                            </li>-->
                            <!--                        <li>
                                                        <a href="contact.html">Upgrade Account</a>
                                                    </li>-->
<!--                            <li class="active">
                                <a href="profile">View Profile</a>
-->   
                            
                            <!--                            <li class="active"><a href="deals.html">Deals</a></li>-->
                        </ul>
                        <div class="clearfix"> </div>
                        <!-- script-for-menu -->
                        <script>
                            $("span.menu").click(function () {
                                $("ul.nav1").slideToggle(300, function () {
                                    // Animation complete.
                                });
                            });

                        </script>
                        
                    </div>
                    <div class="dropdown-grids">
                      
                        
<div class="banner holidays-banner fh-banner">
   
    <div class="container">
        <div class="col-md-4 banner-left">
            <section class="slider2">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slider-info">
                                <img src="images/1.jpg" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <img src="images/2.jpg" alt="">
                            </div>
                        </li>
                        <li>	
                            <div class="slider-info">
                                <img src="images/3.jpg" alt="">
                            </div>
                        </li>
                        <li>	
                            <div class="slider-info">
                                <img src="images/4.jpg" alt="">
                            </div>
                        </li>
                        <li>	
                            <div class="slider-info">
                                <img src="images/2.jpg" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!--FlexSlider-->
        </div>
        <div class="col-md-12 banner-right">
            <div class="sap_tabs">	
                <div class="booking-info about-booking-info">
                    <h2 style="text-align: center;">Password Success</h2>
                      <p class="lead"  style=" text-align:center;color:#fff">Your password has been changed successfully  </p>>
                </div>
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">	
                  
                </div>    </div>  
        </div> 
    </div>  </div>  

<script defer src="js/jquery.flexslider.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>
