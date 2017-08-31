<!--
Author: Designmaz
Author URL: https://www.designmaz.net
License URL: https://www.designmaz.net/licence/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>CloudViews - Advertisements</title>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- Include the plugin's CSS and JS: -->


        <title>Jquery multiple select with checkboxes using bootstrap-multiselect.js</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">


        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Custom Theme files -->
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
        <!-- js -->
<!--        <script src="js/jquery.min.js"></script>-->
<!--        <script src="js/modernizr.custom.js"></script>-->
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
            ga('send', 'pageview');</script>
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
                color: #f5f8fa;
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
        <script>
            $(document).on('click', '#close-preview', function () {
                $('.logo-preview').popover('hide');
                // Hover befor close the preview
                $('.logo-preview').hover(
                        function () {
                            $('.logo-preview').popover('show');
                        },
                        function () {
                            $('.logo-preview').popover('hide');
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
                $('.logo-preview').popover({
                    trigger: 'manual',
                    html: true,
                    title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
                    content: "There's no logo",
                    placement: 'bottom'
                });
                // Clear event
                $('.logo-preview-clear').click(function () {
                    $('.logo-preview').attr("data-content", "").popover('hide');
                    $('.logo-preview-filename').val("");
                    $('.logo-preview-clear').hide();
                    $('.logo-preview-input input:file').val("");
                    $(".logo-preview-input-title").text("Upload Logo");
                });
                // Create the preview image
                $(".logo-preview-input input:file").change(function () {
                    var img = $('<img/>', {
                        id: 'dynamic',
                        width: 1000,
                        height: 1000
                    });
                    var file = this.files[0];
                    var reader = new FileReader();
                    // Set preview image into the popover data-content
                    reader.onload = function (e) {
                        $(".logo-preview-input-title").text("Change");
                        $(".logo-preview-clear").show();
                        $(".logo-preview-filename").val(file.name);
                        img.attr('src', e.target.result);
                        $(".logo-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
                    }
                    reader.readAsDataURL(file);
                });
            });
        </script>
        <style>
            .container{
                margin-top:20px;
            }
            .video-preview-input {
                position: relative;
                overflow: hidden;
                margin: 0px;    
                color: #333;
                background-color: #fff;
                border-color: #ccc;    
            }
            .video-preview-input input[type=file] {
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
            .video-preview-input-title {
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
        <script>
            $(document).on('click', '#close-preview', function () {
                $('.video-preview').popover('hide');
                // Hover befor close the preview
                $('.video-preview').hover(
                        function () {
                            $('.video-preview').popover('show');
                        },
                        function () {
                            $('.video-preview').popover('hide');
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
                $('.video-preview').popover({
                    trigger: 'manual',
                    html: true,
                    title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
                    content: "There's no video",
                    placement: 'bottom'
                });
                // Clear event
                $('.video-preview-clear').click(function () {
                    $('.video-preview').attr("data-content", "").popover('hide');
                    $('.video-preview-filename').val("");
                    $('.video-preview-clear').hide();
                    $('.video-preview-input input:file').val("");
                    $(".video-preview-input-title").text("Upload Video");
                });
                // Create the preview image
                $(".video-preview-input input:file").change(function () {
                    var img = $('<video/>', {
                        id: 'dynamic',
                        width: 1000,
                        height: 1000
                    });
                    var file = this.files[0];
                    var reader = new FileReader();
                    // Set preview image into the popover data-content
                    reader.onload = function (e) {
                        $(".video-preview-input-title").text("Change");
                        $(".video-preview-clear").show();
                        $(".video-preview-filename").val(file.name);
                        img.attr('src', e.target.result);
                        $(".video-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
                    }
                    reader.readAsDataURL(file);
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {

            });
        </script>
    </head>

    <body>
        <!--header-->
        <div class="header">
            <div class="container">
                <div class="header-grids">
                    <div class="logo">
                        <h1><a  href="index.html"><span>CloudViews - Advertisements</span></a></h1>
                    </div>
                    <!--navbar-header-->
                    <div class="header-dropdown">
                        <div class="emergency-grid">                          
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
                                <a href="{{ env('CLNT_URL') }}/home">Home</a>
                            </li>
                            <li class="active">
                                <a href="{{ env('ADVT_URL') }}/advertisement?username={{ $username }}">Create Ads</a>
                            </li>
                            <li >
                               <a href="{{ env('EVNT_URL') }}/event?username={{ $username }}">Add Events</a>
                            </li>
                            <li >
                                <a href="contact.html">Set Location</a>
                            </li>
                            <li >
                                <a href="contact.html">View Reports</a>
                            </li>                          
                            <li >
                                <a href="profile">View Profile</a>
                            </li>
                            <li >
                                <a href="logout">Logout</a>
                            </li>                          
                        </ul>
                        <div class="clearfix"> </div>
                      
                        <script>
                            $("span.menu").click(function () {
                                $("ul.nav1").slideToggle(300, function () {
                                    // Animation complete.
                                });
                            });

                        </script>
                        <!-- /script-for-menu -->
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
  

<!-- banner -->
<div class="banner holidays-banner fh-banner">
    <!-- container -->
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
        <div class="col-md-10 banner-right">
            <div class="sap_tabs">	
                <div class="booking-info about-booking-info">
                    <h2 style="text-align: center;">Create Advertisement</h2>
                </div>
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">	
                   
                    <link rel="stylesheet" href="css/jquery-ui.css" />
                    <!---strat-date-piker---->
                    <script>
                        $(function () {
                            $("#datepicker,#datepicker1").datepicker();
                        });
                    </script>
                   

                    <div class="b_room  col-sm-offset-1 col-md-10">
                        <form name="sentMessage"  action="advertisement" method="post" enctype="multipart/form-data">


                        </form>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //container -->
    </div>
    <!--</div>-->


</div>
</div>
</div>

<!-- banner-bottom -->
<div class="banner-bottom">
    <!-- container -->
    <div class="container">
        <div class="banner-bottom-info">
           
        </div>
        <div class="banner-bottom-grids">
           
            <div class="col-md-4 weekend-grids">
                <div class="weekend-grid">

                </div>
            </div>
           
            <div class="clearfix"> </div>
        </div>

    </div>
    <!-- //container -->
</div>

<div class="footer">
    <div class="container">

    </div>

    <!-- //footer -->
    <div class="footer-bottom-grids">
        <!-- container -->
        <div class="container">
            <div class="footer-bottom-top-grids">

                <div class="clearfix"> </div>
                <div class="copyright">
                    @foreach ($records as $record)
                        <h2  class="post-subtitle">
                              {{ $record->enterprise }}
                           
                        </h2>
                        <p>{{ $record->description }}</p>



                        <h3 >
                            {{ $record->category }}
                        </h3>  

                       <h3>
           {{ $record->islands }}
</h3>

                        <img src="{{$uploadimage}}" alt="" height="400" width="200"> 


                        <img src="{{$uploadLogo}}" alt="" height="200" width="200">

                        <video width="640" height="400" controls>
                            <source src="{{$uploadvideo}}" type="video/mp4">

                        </video>

                        </a>


                          @endforeach 
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/script.js"></script>	
</body>
</html>