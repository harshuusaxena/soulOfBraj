<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Donate | Soul of Braj Federation</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
   <!-- Icons font CSS-->
   <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
   <!-- Font special for form-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
   <!-- Vendor CSS-->
   <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">    
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
    
  <!--form css-->
  <link href="css/main.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <style>
    .payment_logo{
    width: 200px;
    margin-top: -5px;
    }

   
</style>

    
</head>

<body>
    <div class="page-wrapper">
   

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                              <img src="images/logo.png" alt="" width="200px">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span style="font-weight: 600;">soulofbraj@gmail.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span style="font-weight: 600; font-family:monospace;">+91-8439406670</span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="donate.html" class="btn-style-one">Donate</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                        <li class="">
                              <a href="index.html">Home</a>
                        </li>
                        <li >
                              <a href="about.html">About</a>
                        </li>
                        <li>
                              <a href="vision.html">Vision</a>
                        </li >
                        <li>
                              <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                              <a href="team.html">Team</a>
                        </li>
                        <li>
                              <a href="csr-news.html">CSR News</a>
                        </li>
                        <li>
                              <a href="#">Success Stories</a>
                        </li>
					   <li>
                              <a href="publications.html">Publications</a>
                        </li>
                       <li>
                              <a href="contact.html">Contact</a>
                        </li>
                  </ul>
        </div>
            
      </div>
</nav>
<!--End Main Header -->
  
    
    <!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/header_bg.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>donate</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>donate</li>
            </ul>
        </div>
    </div>
</section>
        
        <section>
        <div class="page-wrapper p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                    <form method="post" action="pgRedirect.php">
                        <div>       
                        <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" style="visibility:hidden;">
                                                
                        <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" style="visibility: hidden;">
                                                
                        <input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" style="visibility: hidden;">   
                         </div>  
                        
                        
                        <div class="form-row">
                            <div class="name">Donation ID</div>
                            <div class="value">
                                <input class="input--style-6" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "DON" . rand(10000,99999999)?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Amount</div>
                            <div class="value">
                         <input class="input--style-6" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="" placeholder="Donation Amount" required>  
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Full Name</div>
                            <div class="value">
                              <input class="input--style-6" type="text" name="lastName" id="lastName" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date of birth</div>
                            <div class="value">
                                <input class="input--style-6" type="date" name="birthday" id="dob" required> 
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender</div>
                                 <div class="js-select-simple select--no-search">
                                      <select class="input--style-6" name="gender" id="gender" required>
                                               <option value="Select Gender">Select Gender</option>
                                               <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                       </select>
                                      <div class="select-dropdown"></div>
                                </div>   
                            </div>
                        
                        <div class="form-row">
                            <div class="name">Email ID</div>
                            <div class="value">
                                      <input class="input--style-6" type="email" name="email" id="email" placeholder="example@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Mobile Number</div>
                            <div class="value">
                                    <input class="input--style-6" type="text" name="phone" id="phones" maxlength="10" placeholder="Mobile Number" required>
                                    <label id="phones-error" style="display: none; "></label>    
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">PAN Number</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="paan" maxlength="10" id="panNumber" style="text-transform: uppercase;" placeholder="(Optional)">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Aadhar Number</div>
                            <div class="value">
                                 <input class="input--style-6" type="text" name="Aadhaar_Number" maxlength="12" id="aadharNumber" placeholder="(OPTIONAL)"> 
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">PIN Number</div>
                            <div class="value">
                                 <input class="input--style-6" type="text" name="Pin_Number" maxlength="6" id="pinNumber" placeholder="ex. 236790" required>   
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">State</div>
                                 <div class=" js-select-simple select--no-search">
                                      <select class="input--style-6" name="state" id="state" required>
                                                        <option value="Select State">Select State</option>
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Arunachal Pradeash">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chattisgarh">chattisgarh</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal pradesh">Himachal Pradesh</option>
                                                        <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnatka">Karnatka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalya">Meghalya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Odisha">Odisha</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="West Bangal">West Bangal</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                    </div>
                                                    <label id="state-error" style="display: none; "></label>  
                            </div>
                             <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                  <input class="input--style-6" type="text" name="City" id="city" placeholder="City" required>
                                  <label id="city-error" style="display: none; "></label>
                            </div>
                        </div>
                             <div class="form-row">
                             <div class="name">Donation For</div>
                                 <div class="js-select-simple select--no-search">
                                            <select class="input--style-6" name="donation" id="donation" required>
                                                <option value="Select Program/Service">Select Program/Service</option>
                                                <option value="Water sanitation program">Water sanitation program</option>
                                                <option value="Food distribution program">Food distribution program</option>
                                                <option value="Child education program">Child education program</option>
                                                <option value="Preserving old heritage">Preserving old heritage</option>
                                                <option value="Community Service">Community Service</option>
                                                <option value="Others">Others</option>
                                             </select>
                                <div class="select-dropdown"></div>
                                </div>
                            <label id="donation-error" style="display: none; "></label>
                            </div>
                        <div class="card-footer">
                    <input class="btn-style-one" name="submitButton"  type="submit" value="proceed" id="submitButton">
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
   </section>  
      
      

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="images/BRAJ%20WHITE.png" alt="" width="180px;">
                </a>
              </figure>
            </div>
            <p>Serving in Braj is equivalent to serving Krishna</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Sri Krishna greens<br> Vrindavan, Mathura<br> Uttar Pradesh<br> 281121</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p style="font-weight: 600;">soulofbraj@gmail.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p style="font-weight: 600; font-family:monospace;">+91-8439406670</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="https://www.facebook.com/soulofbraj" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/SoulOfBraj" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/soulofbraj/?viewAsMember=true" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCzqx_Vu1yQ5U1ioIPsX1-Zw?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
              <li><a href="https://wa.me/918439406670" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-4">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="index.html#activites">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Pads</a>
            </li>  
            <li>
              <a href="index.html#activites">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Food distribution for needful </a>
            </li>
            <li>
              <a href="index.html#activites">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Basic education for all children </a>
            </li>
            <li>
              <a href="index.html#activites">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Basic health care facilities for brajwasi </a>
            </li>
            <li>
              <a href="index.html#activites">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Community Service </a>
            </li>
            <li>
              <a href="index.html#activites">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Water and Sanitation and Rural Development</a>
            </li>
          </ul>  
        </div>
        
      </div>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>
       
    
<!---form plugin-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script> 
<script src="vendor/datepicker/daterangepicker.js"></script>
<script src="js/form_js.js"></script>
<!--End form plugin-->    

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>

<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>   
    
</body>
</html>