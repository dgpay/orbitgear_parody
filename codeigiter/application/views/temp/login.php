<!DOCTYPE html>
<html>
<head>
        <link rel="icon" type="img/image/png" href="img/image/favicon_32x32.png">
        <title>Account - ORBIT Gear Indonesia</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--bootsrap css-->
      <link href="bootsrap/css/bootstrap.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--CSSLINK-->
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <!--nav-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    
</head>
<body>
     <!--*************************************************************************************************************
    *      HEADER
    ******************************************************************************************************************-->
    
    <nav class="navbar navbar-expand-sm  fixed-top">
            <a class="navbar-brand" href="#" >
                    <img src="img\logo\Logo_White_280x@2x.png" alt="OrbitGearIndonesia" class="primaryLogo" width="110px">
            </a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item underline">
                <a class="nav-link" href="#">DOMINATExORBITGear V.01</a>
              </li>
              <li class="nav-item underline">
                <a class="nav-link" href="#">NEW ARRIVAL</a>
              </li>
              <li class="nav-item dropdown underline">
                    <a  class=" nav-link dropdown-toggle" data-toggle="dropdown">
                      SHOP
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Link 1</a>
                      <a class="dropdown-item" href="#">Link 2</a>
                      <a class="dropdown-item" href="#">Link 3</a>
                    </div> 
                </li>
              <li class="nav-item underline">
                    <a class="nav-link" href="#">OUR STORY</a>
             </li>
             
             <li class="nav-item dropdown underline">
              <a  class=" nav-link dropdown-toggle" data-toggle="dropdown">
                ARCHIEVE
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div> 
          </li>
             
                    <li class="nav-item icon"><a class="nav-link " href="https://twitter.com/orbitgear" title="ORBIT Gear Indonesia on Twitter" rel="me" target="_blank"><span class="fa fa-twitter"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="https://www.facebook.com/orbitgear" title="ORBIT Gear Indonesia on Facebook" rel="me" target="_blank"><span class="fa fa-facebook"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="https://id.pinterest.com/orbitgear/" title="ORBIT Gear Indonesia on Pinterest" rel="me" target="_blank"><span class="fa fa-pinterest-p"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="https://instagram.com/orbitgear" title="ORBIT Gear Indonesia on Instagram" rel="me" target="_blank"><span class="fa fa-instagram"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="mailto:info@orbitgear.net" title="Email ORBIT Gear Indonesia" rel="me" target="_blank"><span class="fa fa-envelope-o"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="#" title="Email ORBIT Gear Indonesia" rel="me" target="_blank"><span class="fa fa-search"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="#" title="Email ORBIT Gear Indonesia" rel="me" target="_blank"><span class="fa fa-user"></span></a></li>
                    
                    <li class="dropdown">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        IDR
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">IDR</a>
                        
                      </div>
                      <br>
                      <button type="button" class="btn btn-secondary bawah" data-toggle="dropdown">
                       <a class="fa fa-shopping-cart"> Cart</a>
                      </button>
                    </li>
             </ul>
            
             
             </ul>
          </nav>    
    
     <!--*************************************************************************************************************
    *      CONTENT
    ******************************************************************************************************************-->
    <content>
        <div>
          <h1>Customer Login</h1>
        </div>
        <div>
        <div id="login_form">
        <form method="post" action="/account/login" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />
          <label for="customer_email" class="login">Email</label>
          <input type="email" value="" name="customer[email]" id="customer_email" style="margin-bottom: 5px" tabindex="1" />
          <small class="float-right"; style="white"><em><a href="#" onclick="showRecoverPasswordForm()">Forgot your password?</a></em></small>
          <label for="customer_password" class="login">Password</label>
          <input type="password" value="" name="customer[password]" id="customer_password" class="password" style="margin-bottom:5px" tabindex="2" />
          <input class="btn action_button" type="submit" value="Sign In" tabindex="3" />
            <p class="float-right" style="padding-top: 8px; color: white">
              New Customer? <a href="/account/register" id="customer_register">Sign up &rarr;</a>
            </p>
        </form>
        </div>
        <div id="recover-password" style='display:none'>
          <div class="six columns offset-by-five">
            <h4>Reset Password</h4>
            <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
            <div id="recover_email" class="clearfix large_form">
              <label for="email" class="large">Email</label>
              <input type="email" value="" size="30" name="email" id="recover-email" class="large"/>
            </div>
            <p>
              <em class="note">We will send you an email to reset your password.</em>
            </p>
              <div class="action_bottom">
                <input class="btn action_button" type="submit" value="Submit" />
                <span class="note">or <a href="#" onclick="hideRecoverPasswordForm()">Cancel</a></span>
              </div>
            </form>
          </div>
        </div>
        <script type="text/javascript">
          function showRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'block';
            document.getElementById('login_form').style.display='none';
            return false;
          }
          function hideRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'none';
            document.getElementById('login_form').style.display = 'block';
          return false;
          }
          if (window.location.hash == '#recover') { showRecoverPasswordForm() }
    
          // reset_success is only true when the reset form is
      
        </script>
        </div>
      </content>
  
      

    <!--*************************************************************************************************************
    *      FOTTER
    ******************************************************************************************************************-->

    <footer>
            <div class="sub-footer">
              <div class="container">
                <div class="row">
                <div class="col">
                  <h6 class="title">ORBIT M&amp;TG</h6>
                  <p>Designed &amp; Crafted in SMALL BATCH at Our in House Studio in Jakarta, Indonesia.</p>
                </div>
                <div class="col">
                  <h6 class="title">CUSTOMER SERVICES</h6>
                  <ul class="footer_menu">
                    <li><a href="/pages/contact">CONTACT US</a></li>
                    <li><a href="/pages/limited-lifetime-warranty">LIFETIME WARRANTY</a></li>
                    <li><a href="/pages/kebijakan-privasi">KEBIJAKAN PRIVACY</a></li>
                    <li><a href="/pages/kebijakan-pengembalian-penukaran">KEBIJAKAN PENGEMBALIAN & PENUKARAN</a></li>
                    <li><a href="/pages/kebijakan-website">KEBIJAKAN WEBSITE</a></li>
                    <li><a href="/pages/kebijakan-pengiriman">INFORMASI PENGIRIMAN</a></li>
                    <li><a href="/pages/contact">PRESS INQUIRY</a></li>
                    <li><a href="/pages/hubungi-kami">RETAILER / WHOLESALE INQUIRY</a></li>
                    <li><a href="/pages/careers">CAREERS</a></li>
                  </ul>
                </div>
                <div class="col">
                  <h6 class="title">News &amp; Updates</h6>
                  <p>Sign up to get the latest on sales, new releases and more …</p>
                  <div class="newsletter  clearfix">
                    <p class="message"></p>
                     
                      <input id="fotmail" class="cfotmail" type="text" name="firstname"  placeholder="Enter your email address..">
                      <input id="fotsign" class="cfotsign" type="submit" value="SIGN UP">
                 
                    
                  </div>
                </div>
                <div class="col">
                  <h6 class="title">ORBIT Gear HQ</h6>
                  <p>Jalan Abdul Majid Dalam 3 No.4<br>Cilandak, South Jakarta<br>Jakarta 12410, ID</p>
                  <p>info@orbitgear.net |&nbsp;+62 812 95 2300 80</p>
                  <ul class="list-group list-group-horizontal social_icons">
                    <li><a href="https://twitter.com/orbitgear" title="ORBIT Gear Indonesia on Twitter" rel="me" target="_blank"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/orbitgear" title="ORBIT Gear Indonesia on Facebook" rel="me" target="_blank"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="https://id.pinterest.com/orbitgear/" title="ORBIT Gear Indonesia on Pinterest" rel="me" target="_blank"><span class="fa fa-pinterest-p"></span></a></li>
                    <li><a href="https://instagram.com/orbitgear" title="ORBIT Gear Indonesia on Instagram" rel="me" target="_blank"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="mailto:info@orbitgear.net" title="Email ORBIT Gear Indonesia" rel="me" target="_blank"><span class="fa fa-envelope-o"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            </div>
            <div class="footer ">
              <div class="container">
                <div class="sixteen columns">
                  <p class="credits">
                    &copy; 2019 <a href="/" title="">ORBIT Gear Indonesia</a>.
                    Made in Indonesia
                    <a href="#"> | Part of ORBIT Gear Indonesia Group</a>
                  </p>
                <div class="payment_methods">
                  <img src="img/master.svg" alt="Master" />
                  <img src="img/visa.svg" alt="Visa" />
                </div>
              </div>
            </div>
          </footer>
            


    <!--*******************************************************************************************************************
        JAVASCRIPT
    ********************************************************************************************************************-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootsrap/js/bootsrap.min.js"></script>
  
  
    
      <!--TAMBAHAN DAH-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="js/navbar.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>