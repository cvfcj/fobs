<!DOCTYPE html>
<html>
    <head>
        <title>CloudViews</title>
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



    </script>
    <!--pop-up-->
    <style>
        .top-nav{
    margin: 0 auto 0 0;
    width: 40.2%;
	float:left;
}
    </style>

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
    <title>Jquery multiple select with checkboxes using bootstrap-multiselect.js</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">


</head>
<body>

    <!--header-->
    <div class="header">
        <div class="container">
            <div class="header-grids">
                <div class="logo">
                    <h1><a  href="index.html"><span>CloudViews-Developer</span></a></h1>
                </div>
                <!--navbar-header-->
                <div class="header-dropdown">
                    <div class="emergency-grid">
                        <ul>
                            <!--   <li>Toll Free : </li>
                              <li class="call">+1 234 567 8901</li>-->
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
                        <li class="active"><a href="#">Home</a></li>
<!--                        
                        <li><a href="#">Buy Maps & Guides</a></li>
                                                          

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
                    <!-- /script-for-menu -->
                </div>
               
                <div class="dropdown-grids">
                    <div id="loginContainer"><a href="userlogin" id="loginButton"><span>User Login</span></a>
                    </div>
                </div>
                <div class="dropdown-grids">
                    <div id="loginContainer"><a href="userregistration" id="loginButton"><span>User Registration</span></a>
                    </div>
                </div>
                 <div class="dropdown-grids">
                    <div id="loginContainer"><a href="clientlogin" id="loginButton"><span>Client Login</span></a>
                    </div>
                </div>
                <div class="dropdown-grids">
                    <div id="loginContainer"><a href="clientregistration" id="loginButton"><span>Client Registration</span></a>
                    </div>
                </div>
            </div>
        
                   
                    </div>
        </div>     
<!--                        <div id="registrationContainer"><a href="userregistration" id="RegistrationButton"><span>User Registration</span></a>
                            <div id="loginContainer"><a href="clientlogin" id="loginButton"><span>Client Login</span></a>
                                <div id="registrationContainer"><a href="clientregistration" id="RegistrationButton"><span>Client Registration</span></a>-->




                                    <!--           <div id="loginBox">                
                                            <form id="loginForm">
                                                <div class="login-grids">
                                                    <div class="login-grid-left">
                                                        <fieldset id="body">
                                                            <fieldset>
                                                                <label for="email">Email Address</label>
                                                                <input type="text" name="email" id="email">
                                                            </fieldset>
                                                            <fieldset>
                                                                <label for="password">Password</label>
                                                                <input type="password" name="password" id="password">
                                                            </fieldset>
                                                            <input type="submit" id="login" value="Sign in">
                                                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                                        </fieldset>
                                                        <span><a href="#">Forgot your password?</a></span>
                                                        <div class="or-grid">
                                                            <p>OR</p>
                                                        </div>
                                                        <div class="social-sits">
                                                            <div class="facebook-button">
                                                                <a href="#">Connect with Facebook</a>
                                                            </div>
                                                            <div class="chrome-button">
                                                                <a href="#">Connect with Google</a>
                                                            </div>
                                                            <div class="button-bottom">
                                                                <p>New account? <a href="signup.html">Signup</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>-->
                                </div>
                    
                                <div class="clearfix"> 
                                
                                </div>
                            
                
                        
                 
        
                    <!--//header-->
                    <!-- banner -->
                    <div class="banner" style="height:300px">
                        <!-- container -->
                        <div class="container">
                            <div class="col-md-4 banner-left " >
                                <section class="slider2" >
                                    <div class="flexslider" >
                                        <ul class="slides">
                                            <li>
                                                <div class="slider-info">
                                                    <img src="images/1.jpg" alt=""  style="height:250px; width:200px">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slider-info">
                                                    <img src="images/2.jpg" alt=""  style="height:250px; width:200px">
                                                </div>
                                            </li>
                                            <li>	
                                                <div class="slider-info">
                                                    <img src="images/3.jpg" alt=""  style="height:250px; width:200px">
                                                </div>
                                            </li>
                                            <li>	
                                                <div class="slider-info">
                                                    <img src="images/4.jpg" alt=""  style="height:250px; width:200px">
                                                </div>
                                            </li>
                                            <li>	
                                                <div class="slider-info" >
                                                    <img src="images/2.jpg" alt=""  style="height:250px; width:200px">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                                <!--FlexSlider-->
                            </div>
                            <div class="col-md-6 banner-right">
                                <!--                    <div class="sap_tabs">	-->
                                <div class="booking-info">
                                    <!--                            <h2>Search</h2>-->

                                </div>
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <form action="filter" method="post">
                                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('#islands').multiselect();
                                            });
                                        </script>


                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 " >
                                            </div>
                                        </div>

                                </div>

                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            </form>


                            <div class="resp-tabs-container">
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="booking-form">
                                            <!---strat-date-piker---->
                                            <script>
                                                $(function () {
                                                    $("#datepicker,#datepicker1").datepicker();
                                                });
                                            </script>
                                            <!---/End-date-piker---->
                                            <!-- Set here the key for your domain in order to hide the watermark on the web server -->

                                            <div class="online_reservation">
                                                <div class="b_room">
                                                    <div class="booking_room">
                                                        <div class="reservation">
                                                            <ul>		
                                                                <li  class="span1_of_1 desti">
                                                                    <h5>Flying from</h5>
                                                                    <div class="book_date">
                                                                        <form>
                                                                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                                            <input type="text" placeholder="Type Departure City" class="typeahead1 input-md form-control tt-input" required="">
                                                                        </form>
                                                                    </div>					
                                                                </li>
                                                                <li  class="span1_of_1 left desti">
                                                                    <h5>Flying to</h5>
                                                                    <div class="book_date">
                                                                        <form>
                                                                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                                            <input type="text" placeholder="Type Destination City" class="typeahead1 input-md form-control tt-input" required="">
                                                                        </form>
                                                                    </div>		
                                                                </li>
                                                                <div class="clearfix"></div>
                                                            </ul>
                                                        </div>
                                                        <div class="reservation">
                                                            <ul>	
                                                                <li  class="span1_of_1">
                                                                    <h5>Departure</h5>
                                                                    <div class="book_date">
                                                                        <form>
                                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                                            <input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value === '') {
                                                                                        this.value = 'Select date';
                                                                                    }">
                                                                        </form>
                                                                    </div>		
                                                                </li>
                                                                <li  class="span1_of_1 left">
                                                                    <h5>Return</h5>
                                                                    <div class="book_date">
                                                                        <form>
                                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                                            <input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value === '') {
                                                                                        this.value = 'Select date';
                                                                                    }">
                                                                        </form>
                                                                    </div>					
                                                                </li>
                                                                <li class="span1_of_1 left adult">
                                                                    <h5>Adults (18+)</h5>
                                                                    <!----------start section_room----------->
                                                                    <div class="section_room">
                                                                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                                                            <option value="null">1</option>
                                                                            <option value="null">2</option>         
                                                                            <option value="AX">3</option>
                                                                            <option value="AX">4</option>
                                                                            <option value="AX">5</option>
                                                                            <option value="AX">6</option>
                                                                        </select>
                                                                    </div>	
                                                                </li>
                                                                <li class="span1_of_1 left children">
                                                                    <h5>Children (0-17)</h5>
                                                                    <!----------start section_room----------->
                                                                    <div class="section_room">
                                                                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                                                            <option value="null">1</option>
                                                                            <option value="null">2</option>         
                                                                            <option value="AX">3</option>
                                                                            <option value="AX">4</option>
                                                                            <option value="AX">5</option>
                                                                            <option value="AX">6</option>
                                                                        </select>
                                                                    </div>	
                                                                </li>
                                                                <li class="span1_of_1 economy">
                                                                    <h5>Class</h5>
                                                                    <!----------start section_room----------->
                                                                    <div class="section_room">
                                                                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                                                            <option value="null">Economy</option>
                                                                            <option value="null">Business</option>     
                                                                        </select>
                                                                    </div>	
                                                                </li>
                                                                <div class="clearfix"></div>
                                                            </ul>
                                                        </div>
                                                        <div class="reservation">
                                                            <ul>	
                                                                <li class="span1_of_3">
                                                                    <div class="date_btn">
                                                                        <form>
                <!--                                                                            <input type="submit" value="Search" />
                                                                            <input type="submit" value="Reset" />-->
                                                                        </form>
                                                                    </div>
                                                                </li>
                                                                <div class="clearfix"></div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>	
                                    </div>
                                </div>		
                                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">
                                        <div class="booking-form">
                                            <!---strat-date-piker---->
                                            <link rel="stylesheet" href="css/jquery-ui.css" />
                                            <script src="js/jquery-ui.js"></script>
                                            <script>
                                                                            $(function () {
                                                                                $("#datepicker,#datepicker1").datepicker();
                                                                            });
                                            </script>


                                        </div>	
                                    </div>
                                </div> 			        					            	      
                            </div>	
                        </div>	
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //container -->
        </div>
        <!-- //banner -->
        <div class="move-text">
            <div class="marquee">Click here for more Events<a href="signup.html"></a></div>
            <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
            <script>
                                                                            $('.marquee').marquee({pauseOnHover: true});
                                                                            //@ sourceURL=pen.js
            </script>
        </div>
        <!-- banner-bottom -->
        <div class="banner-bottom">
            <!-- container -->
            <div class="container">
                <div class="banner-bottom-info">

                </div>
                <div class="banner-bottom-grids">
                    <div class="container">
                        <label>PLACES :</label> 
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" name="country" type="checkbox" style="opacity: 0;" value="Anguilla">Anguilla
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" name="country"  type="checkbox" style="opacity: 0;" value="Antigua & Barbuda">Antigua & Barbuda
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox" name="country"  style="opacity: 0;" value="Bonaire">Bonaire
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox" name="country"  style="opacity: 0;" value="British Virgin islands">British Virgin islands
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox" name="country"  style="opacity: 0;" value="Dominica">Dominica
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox"  name="country" style="opacity: 0;" value="St.KittsNevis">St.Kitts & Nevis
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox"  name="country" style="opacity: 0;" value="Grenada">Grenada
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox"  name="country"  style="opacity: 0;" value="Saint Lucia">Saint Lucia
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox"  name="country"  style="opacity: 0;" value="Tobago">Tobago
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="country" type="checkbox"  name="country"  style="opacity: 0;" value="St.Vincentthe Grenadines">St.Vincent & the Grenadines
                            </label>
                        </div>

                        <span>+
                            more</span>
                        <!-- /Places show more -->
                    </div>
                    <!-- Filter categories option -->
                    <div>

                        <!-- Categories -->

                        <label>CATEGORIES:</label>

                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Adventure">Adventure
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Culture">Culture
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Family">Family
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Relax Samoa">Relax Samoa
                            </label>
                            <label class="btn btn-default btn-xs btn-outline" id="check">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="History">History
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Shopping">Shopping
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Party">Party
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Beach">Beach
                            </label>
                            <label class="btn btn-default btn-xs btn-outline">
                                <input id="category" type="checkbox" name="category" style="opacity: 0;" value="Romantic">Romantic
                            </label>

                        </div>


                    </div>
                    <script>
                        function cycle($item, $cycler) {
                            setTimeout(cycle, 2000, $item.next(), $cycler);

                            $item.slideUp(1000, function () {
                                $item.appendTo($cycler).show();
                            });

                        }
                        cycle($('#cycler div:first'), $('#cycler'));
                    </script>
                </div>
                <!-- //date -->
            </div>





            <style>
                .selectit { background-color: green; }

                .btn-group .active { background-color : #0182C4; color:#F1F1F1; }
                .btn{  border: 2px #0182C4 solid; border-radius: 3px;}

            </style>

            <script type="text/javascript">
                //  var category = "hello world";
                $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                });
                        $('input[type="checkbox"]').change(function (event) {
                $("#advertisements").empty();
                        $("#adverhead").empty();
                        $("#adverhead").append('<h3>Advertisements</h3>');
                        var countryvals = [];
                        var categoryvals = [];
                        $('input:checkbox[name=country]:checked').each(function () {
                countryvals.push($(this).val());
                });
                        $('input:checkbox[name=category]:checked').each(function () {
                categoryvals.push($(this).val());
                });
                        @foreach ($records as $record)
                        if (categoryvals.length == 0){
                countryvals.forEach(function(country) {
                if ('{{ $record->islands }}' === country){
                $("#advertisements").append("<div class='col-md-4 weekend-grids'><div class='weekend-grid'> <a href='/advthome?id={{ $record->id}}'><img src='{{ Storage::disk('s3')->url($record->uploadimage) }}' /><div class='weekend-grid-info'> <h5>{{ $record->enterprise }}</h5><h4>{{ $record->category }}</h4><h5>{{ $record->islands }}</h5></div></a>  </div> </div>");
                }});
                } else if (countryvals.length == 0){
                categoryvals.forEach(function(category) {
                if ('{{ $record->category }}' === category){
                $("#advertisements").append("<div class='col-md-4 weekend-grids'><div class='weekend-grid'> <a href='/advthome?id={{ $record->id}}'><img src='{{ Storage::disk('s3')->url($record->uploadimage) }}' /><div class='weekend-grid-info'> <h5>{{ $record->enterprise }}</h5><h4>{{ $record->category }}</h4><h5>{{ $record->islands }}</h5></div></a>  </div> </div>");
                }
                });
                } else{
                categoryvals.forEach(function(category) {
                countryvals.forEach(function(country) {
                if ('{{ $record->islands }}' === country && '{{ $record->category }}' === category){
                $("#advertisements").append("<div class='col-md-4 weekend-grids'><div class='weekend-grid'> <a href='/advthome?id={{ $record->id}}'><img src='{{ Storage::disk('s3')->url($record->uploadimage) }}' /><div class='weekend-grid-info'> <h5>{{ $record->enterprise }}</h5><h4>{{ $record->category }}</h4><h5>{{ $record->islands }}</h5></div></a>  </div> </div>");
                }
                else{
                }

                });
                });
                }


                @endforeach


                });
                });</script>





            <div class="banner-bottom" >

                <div class="container">
                    <div class="banner-bottom-info" id="adverhead">

                        <input type="text" id="countrydata"  style="display:none;">
                        <input type="text" id="categorydata"  style="display:none;">
                    </div>
                    <div class="banner-bottom-grids" id="advertisements">
                        <!--    @foreach ($records as $record)
                            
                                        <div class="col-md-4 weekend-grids">
                                            <div class="weekend-grid">
                                                <a href="/advertisements?id={{ $record->id}}">
                                                    <img src="{{ Storage::disk('s3')->url($record->uploadimage) }}" />
                                                    <div class="weekend-grid-info">
                                                        <h5>{{ $record->enterprise }}</h5>
                                                                                    <div>
                                                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                    </div>
                                                        <h4>{{ $record->category }}</h4>
                                                        <h5>{{ $record->islands }}</h5>
                                                    </div>
                        
                        
                                                </a>
                                                                                    <p>$ 500</p>
                                            </div>
                                        </div>
                                        @endforeach-->
                    </div>

                </div>   


            </div>  

            <div class="banner-bottom">

                <div class="container">

                    <div class="banner-bottom-info">
                        <h3>Islands</h3>
                    </div>
                    <div class="banner-bottom-grids">

                        <div class="col-md-4 weekend-grids">
                            <div class="weekend-grid">
                                <a href="island?name='{!! base64_encode('Anguilla') !!}'">
                                    <img src="images/Anguilla.jpg" alt="" />
                                    <div class="weekend-grid-info">
                                        <h5>Anguilla</h5>
                                        <div>
<!--                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                        </div>

                                    </div>
                            </div>

                            </a>
                        </div>


                    </div>

                    <div class="banner-bottom-grids">
                        <div class="col-md-4 weekend-grids">
                            <div class="weekend-grid">
                                <a href="island?name='{!! base64_encode('Antigua & Barbuda') !!}'">
                                    <img src="images/Antigua & Barbuda.jpg" alt="" />
                                    <div class="weekend-grid-info">
                                        <h5>Antigua & Barbuda</h5>
                                        <div>
<!--                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 weekend-grids">
                            <div class="weekend-grid">
                                <a href="island?name='{!! base64_encode('Bonaire') !!}'">
                                    <img src="images/Bonaire.jpg" alt="" />
                                    <div class="weekend-grid-info">
                                        <h5>Bonaire</h5>
                                        <div>
<!--                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 weekend-grids">
                            <div class="weekend-grid">
                                <a href="island?name='{!! base64_encode('British Virgin islands') !!}'">
                                    <img src="images/British Virgin islands.jpg" alt="" />
                                    <div class="weekend-grid-info">
                                        <h5>British Virgin islands</h5>
                                        <div>
<!--                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="banner-bottom-grids">
                            <div class="col-md-4 weekend-grids">
                                <div class="weekend-grid">
                                    <a href="island?name='{!! base64_encode('Dominica') !!}'">
                                        <img src="images/Dominica.jpg" alt="" />
                                        <div class="weekend-grid-info">
                                            <h5>Dominica</h5>
                                            <div>
<!--                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 weekend-grids">
                                <div class="weekend-grid">
                                    <a href="island?name='{!! base64_encode('Grenada') !!}'">
                                        <img src="images/Grenada.jpg" alt="" />
                                        <div class="weekend-grid-info">
                                            <h5>Grenada</h5>
                                            <div>
<!--                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 weekend-grids">
                                <div class="weekend-grid">
                                    <a href="island?name='{!! base64_encode('St.Kitts & Nevis') !!}'">
                                        <img src="images/St.Kitts & Nevis.jpg" alt="" />
                                        <div class="weekend-grid-info">
                                            <h5>St.Kitts & Nevis</h5>
                                            <div>
<!--                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="banner-bottom-grids">
                                <div class="col-md-4 weekend-grids">
                                    <div class="weekend-grid">
                                        <a href="island?name='{!! base64_encode('Saint Lucia') !!}'">
                                            <img src="images/Saint Lucia.jpg" alt="" />
                                            <div class="weekend-grid-info">
                                                <h5>Saint Lucia</h5>
                                                <div>
<!--                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 weekend-grids">
                                    <div class="weekend-grid">
                                        <a href="island?name='{!! base64_encode('St.Vincent & the Grenadines') !!}'">
                                            <img src="images/St.Vincent & the Grenadines.jpg" alt="" />
                                            <div class="weekend-grid-info">
                                                <h5>St.Vincent & the Grenadines</h5>
                                                <div>
<!--                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 weekend-grids">
                                    <div class="weekend-grid">
                                        <a href="island?name='{!! base64_encode('Tobago') !!}'">
                                            <img src="images/Tobago.jpg" alt="" />
                                            <div class="weekend-grid-info">
                                                <h5>Tobago</h5>
                                                <div>
<!--                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>-->
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <!-- //container -->
                    </div>


                    <div class="footer">


                        <div class="content-main" id="content">

                            <div class="grid-container">



                                

                            </div>
                            <!-- //footer -->
                            <div class="footer-bottom-grids">

                                <div class="clearfix"> </div>
                                <div class="copyright">
                <!--                        <p>Copyrights © 2015 Travelad. Template by <a href="https://www.designmaz.net/">Designmaz</a></p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <script defer src="js/jquery.flexslider.js"></script>
                    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script src="js/jquery-ui.js"></script>
                    <script type="text/javascript" src="js/script.js"></script>
                    <script type="text/javascript">
                                                            $(function () {
                                                            SyntaxHighlighter.all();
                                                            });
                                                            $(window).load(function () {
                                                    $('.flexslider').flexslider({
                                                    animation: "slide",
                                                            start: function (slider) {
                                                            $('body').removeClass('loading');
                                                            }
                                                    });
                                                    });
                    </script>

                    </body>
                    </html>
