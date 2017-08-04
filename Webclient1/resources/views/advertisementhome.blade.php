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
            } .label1{
                font-size: 15px;
                color: #f5f8fa; 
            }
            .italic{
                font-size: 12px;
                color: #f5f8fa; 
            }
            .error{
                font-size: 12px;
                color: #f5f8fa;
            }
            .weekend-grid img {
                height:250px;
                width:100%;
            }

        </style>
        <style>
            .popover{

            }
            .confirmation-buttons{
                width:200px;
                height:50px;
            }    

            .popover-title{ background-color: #2ab27b;color:white;}

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

                            <ul>
                                <li>Hi, </li>
                                <li >{{ $username }}</li>
                            </ul>
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
                                <a href="clienthome">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Create Ads</a>
                            </li>
                            <li >
                                <a href="event">Add Events</a>
                            </li>
                            <li >
                                <a href="setlocation">Set Location</a>
                            </li>
                          
                            <li >
                                <a href="clientprofile">View Profile</a>
                            </li>                           
                         
                        </ul>
                        <div class="clearfix"> </div>
                        <!-- script-for-menu -->
                        <script>
                            $("span.menu").click(function () {
                                $("ul.nav1").slideToggle(300, function () {                                   
                                });
                            });

                        </script>
                        <!-- /script-for-menu -->
                    </div>
                                    <div class="dropdown-grids">
                     <div id="loginContainer">  <a href="clientlogout" id="loginButton"><span>Logout</span></a>
                          
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
                            @if($delete)
                            <script>alert('Your advertisement has been deleted successfully');</script>                           
                            @endif
                            @if($edit)
                            <script>alert('Your advertisement has been updated successfully');</script>                         
                            @endif
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
                                    <input type="hidden" name="username" value="{{ $username }}">
                                    <label>                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <span class="label ">Name of the Enterprise*</span></label><br>
                                    <input type="text"  class="form-control" placeholder="Name of the Enterprise" id="enterprise" name="enterprise" value="{{ old('enterprise') }}">

                                    <div class="error">{{ $errors->first('enterprise') }}</div><br />
                                    <label>
                                        <span class="label ">Description about Enterprise*</span></label><br>
                                    <input type="text"  placeholder="Description"  class="form-control" id="description" name="description" value="{{ old('description') }}">

                                    <div class="error">{{ $errors->first('description') }}</div><br />


                                    <label>

                                        <span class="label ">Category*</span> </label><br>

                                    <select id="category" name="category"  class="form-control">
                                        <option value="">Select Category</option>
                                        <option  value="Adventure">Adventure</option>
                                        <option  value="Romatic">Romatic</option>
                                        <option  value="Family">Family</option>
                                        <option  value="Relax">Relax Samoa</option>
                                        <option  value="History">History</option>
                                        <option  value="Culture">Culture</option>
                                        <option  value="Shopping">Shopping</option>
                                        <option  value="Party">Party</option>
                                        <option  value="Beach">Beach</option>

                                    </select><br /> 


                                

                                    <div class="error">{{ $errors->first('category') }}</div>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $('#islands').multiselect();
                                            $("#myButton").click(function () {
                                                $(this).button('loading');
                                            });
                                        });
                                    </script>
                                    <style>
                                        .btn-group,
                                        .multiselect {
                                            width: 100%;
                                        }

                                        .multiselect {
                                            text-align: left;
                                            padding-right: 32px;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                        }

                                        .multiselect .caret {
                                            right: 12px;
                                            top: 45%;
                                            position: absolute;
                                        }

                                        .multiselect-container.dropdown-menu {
                                            min-width: 0px;
                                        }

                                        .multiselect-container>li>a>label {
                                            white-space: normal;
                                            padding: 5px 15px 5px 35px;
                                        }

                                        .multiselect-container > li > a > label > input[type="checkbox"] {
                                            margin-top: 3px;
                                        }
                                        /*  </style>
                                    <label>
                                        <span class="label ">Islands*</span> </label><br>

                                    <select id="islands"  name="islands[]"  multiple="multiple"  selected="selected" style="width:00%">

                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="British Virgin islands">British Virgin islands</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="St.Kitts & Nevis">St.Kitts & Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="St.Vincent & the Grenadines">St.Vincent & the Grenadines</option>
                                        <option value="Tobago">Tobago</option>

                                    </select>
                                    <div class="error">{{ $errors->first('islands') }}</div><br />
                                    <label>
                                        <span class="label ">Upload Image*</span></label>
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> 
                                        <span class="input-group-btn">

                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- logo-preview-input -->
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Upload Image</span>
                                                <input type="file"  name="uploadimage" id="uploadimage" placeholder="upload image" value="{{ old('uploadimage') }}" accept="image/*"/> 
                                                <p>
                                                </p>
                                                <div class="error">{{ $errors->first('uploadimage') }}</div>

                                            </div>
                                        </span>
                                    </div> <i class="italic">Please ensure that maximum image file should be 2mb
                                    </i>  <br /><br />
                                    <label>
                                        <span class="label ">Upload Logo*</span></label>
                                    <div class="input-group logo-preview">
                                        <input type="text" class="form-control logo-preview-filename" disabled="disabled"> 
                                        <span class="input-group-btn">

                                            <button type="button" class="btn btn-default logo-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- logo-preview-input -->
                                            <div class="btn btn-default logo-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="logo-preview-input-title">Upload Logo</span>
                                                <input type="file"  name="uploadLogo" id="UploadLogo" placeholder="upload Logo" value="{{ old('uploadLogo') }}" accept="image/*"/> 
                                                <p>
                                                </p>
                                                <div class="error">{{ $errors->first('uploadLogo') }}</div>

                                            </div>
                                        </span>
                                    </div> <i class="italic">Please ensure that maximum Logo file should be 2mb
                                    </i>  <br /><br />
                                    <label>
                                        <span class="label ">Upload Video</span></label>
                                    <div class="input-group video-preview">
                                        <input type="text" class="form-control video-preview-filename" disabled="disabled"> 
                                        <span class="input-group-btn">

                                            <button type="button" class="btn btn-default video-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- video-preview-input -->
                                            <div class="btn btn-default video-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="video-preview-input-title">Upload Video</span>
                                                <input type="file"  name="uploadvideo" id="uploadvideo" placeholder="upload video"  value="{{ old('uploadvideo') }}" accept="video/*"/> 
                                                <p>
                                                </p>
                                                <div class="error">{{ $errors->first('uploadvideo') }}</div>

                                            </div>
                                        </span>
                                    </div><i class="italic">Please ensure that maximum Video file should be 10mb
                                    </i>  <br /><br />
                                    <button id="myButton" type="submit" data-loading-text="Loading..." class="btn btn-primary">Create Advertisement</button>
                                    <!--<button type="submit"  class="form-control">Reset</button>-->
                                    <input type="reset" class="btn btn-primary" value="Reset">
                                    </div>
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
            <!--				<h3>Check out our various weekend getaway deals here!</h3>-->
        </div>
        <div class="banner-bottom-grids">
            @foreach ($records as $record)


            <div class="col-md-4 weekend-grids">
                <div class="weekend-grid">
                    <a data-toggle="modal" href="#myModal{{$record['id']}}">
                        <img src="{{ Storage::disk('s3')->url($record['uploadimage']) }}" />

                        <div class="weekend-grid-info">
                            <h5>{{ $record['enterprise'] }}</h5>
                            <!--                            <div class="rating">
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        </div>-->
                            <h6>{{ $record['islands'] }}</h6>

                        </div>
                    </a>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal{{$record['id']}}" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">{{ $record['enterprise'] }}</h4>
                            </div>
                            <div class="modal-body">
                                Enterprise: {{ $record['enterprise'] }}<br />
                                Description: {{ $record['description'] }}<br />
                                Category:  {{ $record['category'] }}<br />
                                <img src="{{ Storage::disk('s3')->url($record['uploadimage']) }}" alt="" height="200" width="200"><br />
                                <img src="{{ Storage::disk('s3')->url($record['uploadLogo']) }}" alt="" height="200" width="200">

                                <video width="320" height="240" controls>
                                    <source src="{{ Storage::disk('s3')->url($record['uploadvideo']) }}" type="video/mp4">

                                </video>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>  
                <div style="padding-top:10px"> </div>

                &emsp;   <a  style="font-size:17px;color: #2F4F4F" class="glyphicon glyphicon-edit" href="advertisementedit?id={{ $record['id'] }}">Edit</a>                    
               
                &emsp;     &emsp;    &emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;  &emsp;     
                <a style="font-size:17px; color: #2F4F4F" id="delete"  data-toggle="confirmation" data-title="Are you sure?" data-content="If you are deleting this Advertisement related Events to that Advertisements will also be deleted?" class="glyphicon glyphicon-trash" href="advertisementdelete?id={{ $record['id'] }}"data-btn-ok-label="Yes" data-btn-ok-icon="glyphicon glyphicon-share-alt"
                   data-btn-ok-class="btn-success"
                   data-btn-cancel-label="No" data-btn-cancel-icon="glyphicon glyphicon-ban-circle"
                   data-btn-cancel-class="btn-danger">Delete</a> <br /> <br /><br />
            </div>
            @endforeach
<!--            <script>
 $('#delete').click( function( event ) {
    if ( !confirm('Are you sure?') ) event.preventDefault();
});
            </script>-->

            <div class="clearfix"> </div>
        </div>

    </div>
    <!-- //container -->
</div>


    <script type="text/javascript" src="js/jquery.popconfirm.js"></script>
    <script type="text/javascript">
                                        $(document).ready(function () {
                                            // Basic confirmation
                                            $("#link").popConfirm();

                                            // Custom Title, Content and Placement
                                            $("#button").popConfirm({
                                                title: "Really ?",
                                                content: "I have warned you !",
                                                placement: "bottom"
                                            });
                                            $('[data-toggle=confirmation]').confirmation({
                                                rootSelector: '[data-toggle=confirmation]',
// other options
                                            });
                                        });
    </script>
    <script src="js/bootstrap-confirmation.min.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/script.js"></script>	


</body>
</html>