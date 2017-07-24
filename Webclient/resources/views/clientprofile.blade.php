<!--
Author: Designmaz
Author URL: https://www.designmaz.net
License URL: https://www.designmaz.net/licence/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>CloudViews - Profile </title>
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
        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
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
            ga('send', 'pageview');</script></head>
    <body>
        <!--header-->
        <div class="header">
            <div class="container">
                <div class="header-grids">
                    <div class="logo">
                        <h1><a  href="index.html"><span>CloudViews - Profile</span></a></h1>
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
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="home">Home</a>
                            </li>
                            <li>
                                <a href="advertisement">Create Ads</a>
                            </li>
                            <li>
                                <a href="events">Add Events</a>
                            </li>
                            <li>
                                <a href="#">Set Location</a>
                            </li>
                            <!--                            <li>
                                                            <a href="contact.html">View Reports</a>
                                                        </li>
                                                        <li>
                                                            <a href="contact.html">Upgrade Account</a>
                                                        </li>-->
                            <li class="active">
                                <a href="#">View Profile</a>
                            </li>
                            <li>
                                <a href="clientlogout">Logout</a>
                            </li>
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
<!--                        <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                            <div id="loginBox">                
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
                                    </div>-->
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

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
                    <h2 style="text-align: center">Edit Profile</h2>

                </div>
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">	
                    <!---->		  	 
                    <div class="facts about-facts train-facts">
                        <div class="booking-form train-form">
                            <link rel="stylesheet" href="css/jquery-ui.css" />
                            <!---strat-date-piker---->
                            <script>
                                $(function () {
                                    $("#datepicker,#datepicker1").datepicker();
                                });
                            </script>
                            <!---/End-date-piker---->
                            <!-- Set here the key for your domain in order to hide the watermark on the web server -->

                            <div class="online_reservation">
                                <div class="b_room col-md-8 col-md-offset-2">
                                    <p style="color: #286090;font-size:25px;font-weight:bold">{{ $success }}</p>
                                    <form name="sentMessage" id="contactForm" action="clientprofile" method="post">

                                        <label>
                                            <span class="label">Organization</span></label>
                                        <input type="text" class="form-control" placeholder="Organization Name" id="organization" name="organization" value="{{ $organization }}">
            <!--                            <p class="help-block text-danger"></p>-->
                                        <div class="error">{{ $errors->first('organization') }}</div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <label>
                                            <span class="label">Email Address</span></label>
                                        <input type="email" class="form-control" placeholder="Email Address" id="username" name="username" value="{{ $username }}">
                                        <p class="help-block text-danger"></p>
                                        <div class="error">{{ $errors->first('username') }}</div>
                                        <label>
                                            <span class="label">Password</span></label>
                                        <input type="text" class="form-control" placeholder="password" id="password" name="password" value="{{ $password }}">
            <!--                            <p class="help-block text-danger"></p>-->
                                        <div class="error">{{ $errors->first('password') }}</div>
                                        <label>
                                            <span class="label">Phone Number</span></label>
                                        <input type="text" class="form-control" placeholder="Phone Number" id="phonenumber" name="phonenumber" value="{{ $phonenumber }}">
            <!--                            <p class="help-block text-danger"></p>-->
                                        <div class="error">{{ $errors->first('phonenumber') }}</div>
                                        <!--                                    <label>
                                                                                <span class="label">Country</span></label>
                                                                            <input type="tel" class="form-control" placeholder="Country" id="country" name="country" value="{{ $country }}">
                                                                            <p class="help-block text-danger"></p>
                                                                            <div class="error">{{ $errors->first('country') }}</div>-->
                                        <label>
                                            <span class="label ">Country*</span></label><br>
                                        <select    placeholder="country"  class="form-control" id="country" name="country" >
                                            @if (old('country'))
                                            <option selected="selected" value="{{ old('country') }}">{{ old('country') }}</option>
                                         
                                            @else
                                               <option  selected="selected" value="{{ $country }}">{{ $country }}</option>
                                            @endif            
                                          
<!--                                            <option  selected="selected" value="{{ old('country') }}">{{ old('country') }}</option>-->
                                            <option  value="Afghanistan">Afghanistan</option>
                                            <option  value="Albania">Albania</option>
                                            <option  value="Algeria">Algeria</option>
                                            <option  value="American Samoa">American Samoa</option>
                                            <option  value="Andorra">Andorra</option>
                                            <option  value="Angola">Angola</option>
                                            <option  value="Anguilla">Anguilla</option>
                                            <option  value="Antarctica">Antarctica</option>
                                            <option  value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option  value="Argentina">Argentina</option>
                                            <option  value="Armenia">Armenia</option>
                                            <option  value="Aruba">Aruba</option>
                                            <option  value="Australia">Australia</option>
                                            <option  value="Austria">Austria</option>
                                            <option  value="Azerbaidjan">Azerbaidjan</option>
                                            <option  value="Bahamas">Bahamas</option>
                                            <option  value="BahrainBahrain">BahrainBahrain</option>
                                            <option  value="Bangladesh">Bangladesh</option>
                                            <option  value="Barbados">Barbados</option>
                                            <option  value="Belarus">Belarus</option>
                                            <option  value="Belgium">Belgium</option>
                                            <option  value="Belize">Belize</option>
                                            <option  value="Benin">Benin</option>
                                            <option  value="Bermuda">Bermuda</option>
                                            <option  value="Bhutan">Bhutan</option>
                                            <option  value="Bolivia">Bolivia</option>
                                            <option  value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                            <option  value="Botswana">Botswana</option>
                                            <option  value="Bouvet Island">Bouvet Island</option>
                                            <option  value="Brazil">Brazil</option>
                                            <option  value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option  value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option  value="Bulgaria">Bulgaria</option>
                                            <option  value="Burkina Faso">Burkina Faso</option>
                                            <option  value="Burundi">Burundi</option>
                                            <option  value="Cambodia">Cambodia</option>
                                            <option  value="Cameroon">Cameroon</option>
                                            <option  value="Canada">Canada</option>
                                            <option  value="Cape Verde">Cape Verde</option>
                                            <option  value="Cayman Islands">Cayman Islands</option>
                                            <option  value="Central African Republic">Central African Republic</option>
                                            <option  value="Chad">Chad</option>
                                            <option  value="Chile">Chile</option>
                                            <option  value="China">China</option>
                                            <option  value="Christmas Island">Christmas Island</option>
                                            <option  value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option  value="Colombia">Colombia</option>
                                            <option  value="Comoros">Comoros</option>
                                            <option  value="Congo">Congo</option>
                                            <option  value="Cook Islands">Cook Islands</option>
                                            <option  value="Costa Rica">Costa Rica</option>
                                            <option  value="Croatia">Croatia</option>
                                            <option  value="Cyprus">Cyprus</option>
                                            <option  value="Czech Republic">Czech Republic</option>
                                            <option  value="Denmark">Denmark</option>
                                            <option  value="Djibouti">Djibouti</option>
                                            <option  value="Dominica">Dominica</option>
                                            <option  value="Dominican">Dominican Republic</option>
                                            <option  value="East Timor">East Timor</option>
                                            <option  value="Ecuador">Ecuador</option>
                                            <option  value="Egypt">Egypt</option>
                                            <option  value="El Salvador">El Salvador</option>
                                            <option  value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option  value="Eritrea">Eritrea</option>
                                            <option  value="Estonia">Estonia</option>
                                            <option  value="Ethiopia">Ethiopia</option>
                                            <option  value="Falkland Islands">Falkland Islands</option>
                                            <option  value="Faroe Islands">Faroe Islands</option>
                                            <option  value="Fiji">Fiji</option>
                                            <option  value="Finland">Finland</option>
                                            <option  value="Former USSR">Former USSR</option>
                                            <option  value="France">France</option>
                                            <option  value="France (European Territory)">France (European Territory)</option>
                                            <option  value="French Guyana">French Guyana</option>
                                            <option  value="French Southern Territories">French Southern Territories</option>
                                            <option  value="Gabon">Gabon</option>
                                            <option  value="Gambia">Gambia</option>
                                            <option  value="Georgia">Georgia</option>
                                            <option  value="Germany">Germany</option>
                                            <option  value="Ghana">Ghana</option>
                                            <option  value="Gibraltar">Gibraltar</option>
                                            <option  value="Greece">Greece</option>
                                            <option  value="Greenland">Greenland</option>
                                            <option  value="Grenada">Grenada</option>
                                            <option  value="Guadeloupe (French)">Guadeloupe (French)</option>
                                            <option  value="Guam">Guam</option>
                                            <option  value="Guatemala">Guatemala</option>
                                            <option  value="Guinea">Guinea</option>
                                            <option  value="Guinea Bissau">Guinea Bissau</option>
                                            <option  value="Guyana">Guyana</option>
                                            <option  value="Haiti">Haiti</option>
                                            <option  value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                            <option  value="Honduras">Honduras</option>
                                            <option  value="Hong Kong">Hong Kong</option>
                                            <option  value="Hungary">Hungary</option>
                                            <option  value="Iceland">Iceland</option>
                                            <option  value="India">India</option>
                                            <option  value="Indonesia">Indonesia</option>
                                            <option  value="Iraq">Iraq</option>
                                            <option  value="Ireland">Ireland</option>
                                            <option  value="Israel">Israel</option>
                                            <option  value="Italy">Italy</option>
                                            <option  value="Ivory Coast">Ivory Coast</option>
                                            <option  value="Jamaica">Jamaica</option>
                                            <option  value="Japan">Japan</option>
                                            <option  value="Jordan">Jordan</option>
                                            <option  value="Kazakhstan">Kazakhstan</option>
                                            <option  value="Kenya">Kenya</option>
                                            <option  value="Kiribati">Kiribati</option>
                                            <option  value="Kuwait">Kuwait</option>
                                            <option  value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option  value="Laos">Laos</option>
                                            <option  value="Latvia">Latvia</option>
                                            <option  value="Lebanon">Lebanon</option>
                                            <option  value="Lesotho">Lesotho</option>
                                            <option  value="Liberia">Liberia</option>
                                            <option  value="Libya">Libya</option>
                                            <option  value="Liechtenstein">Liechtenstein</option>
                                            <option  value="Lithuania">Lithuania</option>
                                            <option  value="Luxembourg">Luxembourg</option>
                                            <option  value="Macau">Macau</option>
                                            <option  value="Macedonia">Macedonia</option>
                                            <option  value="Madagascar">Madagascar</option>
                                            <option  value="Malawi">Malawi</option>
                                            <option  value="Malaysia">Malaysia</option>
                                            <option  value="Maldives">Maldives</option>
                                            <option  value="Mali">Mali</option>
                                            <option  value="Malta">Malta</option>
                                            <option  value="Marshall Islands">Marshall Islands</option>
                                            <option  value="Martinique (French)">Martinique (French)</option>
                                            <option  value="Mauritania">Mauritania</option>
                                            <option  value="Mauritius">Mauritius</option>
                                            <option  value="Mayotte">Mayotte</option>
                                            <option  value="Mexico">Mexico</option>
                                            <option  value="Micronesia">Micronesia</option>
                                            <option  value="Moldavia">Moldavia</option>
                                            <option  value="Monaco">Monaco</option>
                                            <option  value="Mongolia">Mongolia</option>
                                            <option  value="Montserrat">Montserrat</option>
                                            <option  value="Morocco">Morocco</option>
                                            <option  value="Mozambique">Mozambique</option>
                                            <option  value="Myanmar, Union of (Burma)">Myanmar, Union of (Burma)</option>
                                            <option  value="Namibia">Namibia</option>
                                            <option  value="Nauru">Nauru</option>
                                            <option  value="Nepal">Nepal</option>
                                            <option  value="Netherlands">Netherlands</option>
                                            <option  value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option  value="Neutral Zone">Neutral Zone</option>
                                            <option  value="New Caledonia (French)">New Caledonia (French)</option>
                                            <option  value="New Zealand">New Zealand</option>
                                            <option  value="Nicaragua">Nicaragua</option>
                                            <option  value="Niger">Niger</option>
                                            <option  value="Nigeria">Nigeria</option>
                                            <option  value="Niue">Niue</option>
                                            <option  value="Norfolk Island">Norfolk Island</option>
                                            <option  value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option  value="Norway">Norway</option>
                                            <option  value="Oman">Oman</option>
                                            <option  value="Pakistan">Pakistan</option>
                                            <option  value="Palau">Palau</option>
                                            <option  value="Panama">Panama</option>
                                            <option  value="Papua New Guinea">Papua New Guinea</option>
                                            <option  value="Paraguay">Paraguay</option>
                                            <option  value="Peru">Peru</option>
                                            <option  value="Philippines">Philippines</option>
                                            <option  value="Pitcairn Island">Pitcairn Island</option>
                                            <option  value="Poland">Poland</option>
                                            <option  value="Polynesia (French)">Polynesia (French)</option>
                                            <option  value="Portugal">Portugal</option>
                                            <option  value="Qatar">Qatar</option>
                                            <option  value="Reunion (French)">Reunion (French)</option>
                                            <option  value="Romania">Romania</option>
                                            <option  value="Russian Federation">Russian Federation</option>
                                            <option  value="Rwanda">Rwanda</option>
                                            <option  value="S. Georgia & S. Sandwich Islands">S. Georgia & S. Sandwich Islands</option>
                                            <option  value="Saint Helena">Saint Helena</option>
                                            <option  value="Saint Kitts & Nevis Anguilla">Saint Kitts & Nevis Anguilla</option>
                                            <option  value="Saint Lucia">Saint Lucia</option>
                                            <option  value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option  value="Saint Tome and Principe">Saint Tome and Principe</option>
                                            <option  value="Saint Vincent & Grenadines">Saint Vincent & Grenadines</option>
                                            <option  value="Samoa">Samoa</option>
                                            <option  value="San Marino">San Marino</option>
                                            <option  value="Saudi Arabia">Saudi Arabia</option>
                                            <option  value="Senegal">Senegal</option>
                                            <option  value="Seychelles">Seychelles</option>
                                            <option  value="Sierra Leone">Sierra Leone</option>
                                            <option  value="Singapore">Singapore</option>
                                            <option  value="Slovakia">Slovakia</option>
                                            <option  value="Slovenia">Slovenia</option>
                                            <option  value="Solomon Islands">Solomon Islands</option>
                                            <option  value="Somalia">Somalia</option>
                                            <option  value="South Africa">South Africa</option>
                                            <option  value="South Korea">South Korea</option>
                                            <option  value="Spain">Spain</option>
                                            <option  value="Sri Lanka">Sri Lanka</option>
                                            <option  value="Suriname">Suriname</option>
                                            <option  value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                            <option  value="Swaziland">Swaziland</option>
                                            <option  value="Sweden">Sweden</option>
                                            <option  value="Switzerland">Switzerland</option>
                                            <option  value="Tadjikistan">Tadjikistan</option>
                                            <option  value="Taiwan">Taiwan</option>
                                            <option  value="Tanzania">Tanzania</option>
                                            <option  value="Thailand">Thailand</option>
                                            <option  value="Togo">Togo</option>
                                            <option  value="Tokelau">Tokelau</option>
                                            <option  value="Tonga">Tonga</option>
                                            <option  value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option  value="Tunisia">Tunisia</option>
                                            <option  value="Turkey">Turkey</option>
                                            <option  value="Turkmenistan">Turkmenistan</option>
                                            <option  value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option  value="Tuvalu">Tuvalu</option>
                                            <option  value="Uganda">Uganda</option>
                                            <option  value="UK">UK</option>
                                            <option  value="Ukraine">Ukraine</option>
                                            <option  value="United Arab Emirates">United Arab Emirates</option>
                                            <option  value="Uruguay">Uruguay</option>
                                            <option  value="US">US</option>
                                            <option  value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
                                            <option  value="Uzbekistan">Uzbekistan</option>
                                            <option  value="Vanuatu">Vanuatu</option>
                                            <option  value="Vatican City">Vatican City</option>
                                            <option  value="Venezuela">Venezuela</option>
                                            <option  value="Vietnam">Vietnam</option>
                                            <option  value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option  value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option  value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                            <option  value="Western Sahara">Western Sahara</option>
                                            <option  value="Yemen">Yemen</option>
                                            <option  value="Yugoslavia">Yugoslavia</option>
                                            <option  value="Zaire">Zaire</option>
                                            <option  value="Zambia">Zambia</option>
                                            <option  value="Zimbabwe">Zimbabwe</option>
                                        </select> 
                                        <div class="error">{{ $errors->first('country') }}</div><br />



                                        <button type="submit" class="btn btn-primary">Edit Profile</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="b_room col-md-6">

            </div>
        </div>	
    </div>
</div>
<div class="clearfix"> </div>
</div>
<!-- //container -->
</div>
<!--        <div class="footer">-->
<div class="container">

</div>

<!-- //footer -->
<!--            <div class="footer-bottom-grids">-->
<!-- container -->
<div class="container">
    <!--                    <div class="footer-bottom-top-grids">
    
                            <div class="clearfix"> </div>
                            <div class="copyright">
                                <p>Copyrights © 2017 Travelad. Template by <a href="https://www.designmaz.net/">Designmaz</a></p>
                            </div>
                        </div>-->
</div>
<!--            </div>-->
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>