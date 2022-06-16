<?php
/**
 *
 * Template Name: Be Informed
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package S0
 */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Be Informed - Liaison House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/be.css" />
	<link rel="apple-touch-icon" sizes="57x57"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#00a1e2">
    <meta name="msapplication-TileImage"
        content="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#00a1e2">
  
    
    
    <body >
        
    <div class="top-blue-bar">
        <div class="contacts-span">
            <span class="contacts-1">TALK TO US:</span>
            <span class="contacts-2">(254)703 071 000 | <a href="mailto:info@liaisongroup.net"> info@liaisongroup.net</a> | Liaison House, State House Avenue</span>
            <span class="mobile-contacts">TALK TO US: (254) 703 071 000</span>
        </div>

        <form class="search">
            <input type="search" name="" id="" placeholder="SEARCH" class="search-input">
            <span class="icon-search"></span>
        </form>
    </div>
    <section>
        <table class="mobile-white-header">
            <tr class="header-row">
                <td class="header-logo"> <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-logo.svg" alt="" class="mobile-logo"> </td>          
            
                <td class="header-search"> <span class="icon-search btn-search"  id="mobile-search"></span> </td>

                <td class="header-union"> <span class="icon-Union-1" onclick="openNav()" id=""></span> </td>
            </tr>
        </table>
    </section>


 <section class="wrapper">

        <section class="banner-elements">
            <div class="items">
                <img src="https://www.liaisongroup.net/wp-content/uploads/2022/06/logo-34.png" alt="" class="b-logo">
                <ul class="menu-1">
                    <li class="home"><a href="https://www.liaisongroup.net/">Home</a><span class="icon-cheveron-right"></span></li>
                    <li class="biz"><a href="https://www.liaisongroup.net/risk-insurance/">Our Business</a><span class="icon-cheveron-right"></span></li>
                    <li class="news"><a href="https://www.liaisongroup.net/news/">News</a><span class="icon-cheveron-right"></span></li>
                    <li class="res"><a href="https://www.liaisongroup.net/video-grid-gallery/">Resource Centre</a><span class="icon-cheveron-right"></span></li>
                </ul>
                <p class="pipe">|</p>
                <ul class="menu-2">
                    <li class="about"><a href="https://www.liaisongroup.net/about/">About us</a><span class="icon-cheveron-right"></span></li>
                    <li class="career"><a href="https://www.liaisongroup.net/careers/">Careers</a><span class="icon-cheveron-right"></span></li>
                    <li class="contact"><a href="https://www.liaisongroup.net/contacts/">Contact us</a><span class="icon-cheveron-right"></span></li>
                </ul>
<!--                 <span class="icon-cheveron-left two"></span>                
                <span class="icon-cheveron-right two"></span> -->

                <button class="get-started">GET STARTED</button>
                
            </div>
        </section>

        <style>
          @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

            .forminator-ui{
              display:unset !important;
            }
            .forminator-label{display:none !important;}

            .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: white;
            background-color: white;
            overflow-y: hidden;
            transition: 0.5s;
          }

          .overlay-content {
            position: relative;
            top: 12%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
          }

          .overlay-content  a{
            text-align: left !important;
            padding-left: 40px !important;
            margin-bottom: 10px;
            border-bottom: 2px solid #80808045;
            font-family: 'Lato', sans-serif;
            
          }

          .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 24px;
            color: #00a0e0;
            display: block;
            transition: 0.3s;
          }

          .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
          }

          .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
          }

          @media screen and (max-height: 450px) {
            .overlay {overflow-y: auto;}
            .overlay a {font-size: 20px}
            .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
            }
          }
			.forminator-error-message{
				display:none !important;
			}
			
			.forminator-field.forminator-has_error{
				margin:unset !important;
			}
            
        </style>


        <section class="light-blue-mid">
            <div class="banner-blue-rec">
                <p class="first-p">Leave your details below:</p>
					<?php echo do_shortcode( '[forminator_form id="987"]' ); ?>
     
            </div>
            <div class="ellipses-div">
              <img src="<?php echo get_template_directory_uri(); ?>/images/liaison-ellipses.svg" width="980px" height="187px" class="ellipses">
              <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-insurance.svg" class="ellipses-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-health.svg" class="ellipses-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-pensions.svg" class="ellipses-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-invest.svg" class="ellipses-mobile">
            </div>
            <div class="half-cont">
                <div class="half-cont11">
                    <p class="cont-p">Tell us about the plan you are looking for and we will <span class="half-cont-span"> advise and direct </span> you to the most suitable one for you.</p>
                    <button class="learn">Learn More</button>
                </div>    
                <div class="half-cont22">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bannnn.png" class="deskie">
                </div> 

                <div class="half-cont2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bannnn.png" class="deskie">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/thumb.png" class="mobine-bannn">
                </div> 

                <div class="half-cont1">
                    <p class="cont-p">Tell us about the plan you are looking for and we will <span class="half-cont-span"> advise and direct </span> you to the most suitable one for you.</p>
                    <button class="learn">Learn More</button>
                </div>    
   
            </div>            
        </section>
        <section class="f-sec">
            <div class="hr">
            <hr>
            </div>
            <footer class="footer">
                <div class="contacts">
                <p class="update">Stay up to date with LIAISON GROUP</p>
                <p class="subscribe">Subscribe to our newsletter for the latest news and
                   <br> product updates straight to your inbox.
                </p>
                <p class="footer-email">Email Address <span class="asterisk">*</span></p>

                <?php echo do_shortcode( '[forminator_form id="988"]' ); ?>

                <p class="privacy">LIAISON GROUP  respects your privacy. No spam!</p>
                <p class="contacts-p">Need more info? Contact us on:</p>
                <br>
                <p class="contacts-p-email">Email:<a href="mailto:info@liaisongroup.net"> info@liaisongroup.net</a></p>
                <br>
                <p class="contacts-phone">Phone number: (254) 703 071 000</p>
                </div>
                <div class="footer-links">
                <a href="https://www.liaisongroup.net/about/" class="footer-a-t">About Us</a>
                <br>
                <a href="https://www.liaisongroup.net/" class="footer-a-t">Terms & Conditions</a>
                <a href="https://www.liaisongroup.net/about/" class="footer-a-about">About Us</a>
                <a href="https://www.liaisongroup.net/" class="footer-a-terms">Terms & Conditions</a>
                </div>
                <div class="copyright">
                    <p class="f-emails-1"><a href="mailto:info@liaisongroup.net"> info@liaisongroup.net</a></p>
                    <br>
                    <p class="f-emails-2"><a href="mailto:liaisongroup.net">liaisongroup.net</a></p>
                    <p class="weekdays">Mon – Fri: 9am To 6pm</p>
                    <a href="https://twitter.com/LiaisonGroup"><span class="socials icon-twitter"></span></a>
                    <a href="https://www.facebook.com/LiaisonGroupLtd/"><span class="socials icon-facebook"></span></a>
                    <a href="https://www.instagram.com/LiaisonGroupLtd/"><span class="socials icon-instagram"></span></a>
                    <br>
                    <span class="rights">
                    Copyright Liaison Group 2022. All rights reserved.
                    </span>
                </div>
            </footer>
            
        </section>
        <section class="f-sec2">
            <div class="contacts-p2">
            <hr style="max-width:100% !important; width:100% !important; margin-left: 0px !important;">
            </div>
            <footer class="footer2" style="background-color:#009fe0;">
                <div class="contacts2">
                <p class="update2">Stay up to date with LIAISON GROUP</p>
                <p class="subscribe2">Subscribe to our newsletter for the latest news and
                   <br> product updates straight to your inbox.
                </p>
                <p class="footer-email2">Email Address <span class="asterisk">*</span></p>
                <input type="email" name="footer-email" id="footer-email" class="footer-email2" placeholder="you@example.com">
                <br>
                <button class="sub-now2">Subscribe Now</button>
                <p class="privacy2">LIAISON GROUP  respects your privacy. No spam!</p>
                <p class="contacts-p2">Need more info? Contact us on:</p>
                <br>
                <p class="contacts-p2">Email: info@liaisongroup.net</p>
                <br>
                <p class="contacts-p2">Phone number: (254) 703 071 000</p>
                </div>
  
                <a href="#" class="contacts-p2">About Us</a>
                <br>
                <a href="#" class="contacts-p2">Terms & Conditions </a>

       

                    <p class="contacts-p2">info@liaisongroup.net</p>
                    <br>
                    <p class="contacts-p2">liaisongroup.net</p>
                    <p class="weekdays2">Mon – Fri: 9am To 6pm</p>
                    <span class="contacts-p2 icon-twitter"></span>
                    <span class="contacts-p2 icon-facebook"></span>
                    <span class="contacts-p2 icon-instagram"></span>
                    <br>
                    <span class="rights">
                    Copyright Liaison Group 2022. All rights reserved.
                    </span>

            </footer>
            
        </section>
    </section>    
    </body>
</head>
<body>


<div id="myNav" class="overlay">
  <div class="grey">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
  
  <div class="overlay-content">
    <a href="https://www.liaisongroup.net/">Home</a>
    <a href="https://www.liaisongroup.net/risk-insurance/">Our Business</a>
    <a href="https://www.liaisongroup.net/news/">News</a>
    <a href="https://www.liaisongroup.net/video-grid-gallery/">Resource Centre</a>
    <a href="https://www.liaisongroup.net/about/">About Us</a>
    <a href="https://www.liaisongroup.net/careers/">Careers</a>
    <a href="https://www.liaisongroup.net/contacts/">Contacts</a>
  </div>
  <div class="bottom blue" style="width: 100%;background: #00a0e0;position: relative;top: 17%;">
    <div class="d-inline" style="width: 100%;display: inline-flex;padding: 20px 0;">
      <div class="div">
        <img src="https://www.liaisongroup.net/wp-content/themes/liaison2019/images/logo-white.png" style="
    height: 84px;
    padding: 17px;
" alt="">
      </div>
      <div class="div">
        <p style="    color: white;
    /* margin: 0 auto; */
    padding: 20px;
    font-size: 17px;
    font-family: 'Lato', sans-serif;
    font-weight: 600;">2019<br><span>Best Insurance Award</span></p>
      </div>
    </div>
  </div>
</div>


<div id="search">
    <div class="btn-search-close icon-close"></div>
    <form method="post" action="#">
        <div class="searchbox">
            <input class="txtsearch" name="search" type="search" placeholder="Search..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
            <button type="submit" class="btn-search-submit icon-search"></button>
        </div>
    </form>
</div>

<style>
  /*---------- SEARCH ----------*/
header .btn-search{display:inline-block;position:relative;height:52px;width:52px;
	text-align:center;line-height:50px;font-size:24px;color:#374b7e;vertical-align:middle;
	z-index:2000;background-color:transparent;border:0 none;cursor:pointer;
	-webkit-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
}
header .logo-section .btn-search{display:none;}
header .btn-search:hover,
header .btn-search:focus{color:#00a1e2;}

#search{display:table;background:rgba(0,0,0,0.9);position:fixed;width:100%;height:100vh;
	left:0;top:0;z-index:2100;pointer-events:none;opacity:0;visibility:hidden;
	-webkit-transition: opacity 0.5s, visibility 0.5s;
	transition: opacity 0.5s, visibility 0.5s;
}
#search.search-open{pointer-events:auto;opacity:1;visibility:visible;}
#search:before, 
#search:after{content:'';position:absolute;width:calc(100% + 15px);height:calc(100% + 15px);
	pointer-events:none;border:1.5em solid #00a1e2;
	-webkit-transition: transform 0.5s;
	transition: transform 0.5s;
}
#search:before{top:0;left:0;border-right-width:0;border-bottom-width:0;
	-webkit-transform: translate3d(-15px, -15px, 0);
	transform: translate3d(-15px, -15px, 0);
}
#search:after{right:0;bottom:0;border-top-width:0;border-left-width:0;
	-webkit-transform: translate3d(15px, 15px, 0);
	transform: translate3d(15px, 15px, 0);
}
#search.search-open::before, #search.search-open::after{
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}
#search .btn-search-close{width:40px;height:40px;position:absolute;top:50px;right:50px;
	color:#fff;z-index:1000;text-align:center;line-height:40px;font-size:26px;cursor:pointer;
	opacity:0;border:0 none;
	-webkit-transform: scale3d(0.8, 0.8, 1);
	transform: scale3d(0.8, 0.8, 1);
	-webkit-transition: opacity 0.5s, transform 0.5s;
	transition: opacity 0.5s, transform 0.5s;
}
#search .btn-search-close:hover{color:#00a1e2;}
#search.search-open .btn-search-close{opacity:1;
	-webkit-transform: scale3d(1, 1, 1);
	transform: scale3d(1, 1, 1);
	-webkit-transition-delay:0.4s;
	transition-delay:0.4s;
}
#search form{display:table-cell;width:100%;height:100%;vertical-align:middle;opacity:0;
	-webkit-transform: scale3d(0.8, 0.8, 1);
	transform: scale3d(0.8, 0.8, 1);
	-webkit-transition: opacity 0.5s, transform 0.5s;
	transition: opacity 0.5s, transform 0.5s;
}
#search.search-open form{opacity:1;
	-webkit-transform: scale3d(1, 1, 1);
	transform: scale3d(1, 1, 1);
}
#search .searchbox{position:relative;max-width:1280px;padding:0 40px;margin:0 auto;
	height:70px;width:75%;
}
#search .btn-search-submit{width:60px;height:60px;line-height:60px;text-align:right;
	position:absolute;right:40px;top:0;color:#fff;background-color:transparent;
	margin:0;padding:0;border:0 none;font-size:40px;cursor:pointer;
	-webkit-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
}
#search .btn-search-submit:hover{color:#00a1e2;}
#search .txtsearch{display:block;width:100%;border:0 none;border-bottom:4px solid #fff;
	background-color:transparent;padding:0 80px 6px 0;height:100%;color:#fff;font-size:24px;
	font-family:'Lato', sans-serif;
}
#search .txtsearch::-webkit-input-placeholder{opacity:0.3;color:#fff;}
#search .txtsearch::-moz-placeholder{opacity:0.3;color:#fff;}
#search .txtsearch:-ms-input-placeholder{opacity:0.3;color:#fff;}
#search .txtsearch::-webkit-search-cancel-button,
#search .txtsearch::-webkit-search-decoration{
	-webkit-appearance:none;
}
#search .txtsearch::-ms-clear{display:none;}
</style>

<style>
  /*---------- ICONS ----------*/
@font-face {
  font-family: 'icomoon';
  src:  url('fonts/icomoon.eot?87buop');
  src:  url('fonts/icomoon.eot?87buop#iefix') format('embedded-opentype'),
    url('fonts/icomoon.ttf?87buop') format('truetype'),
    url('fonts/icomoon.woff?87buop') format('woff'),
    url('fonts/icomoon.svg?87buop#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"], [class*=" icon-"] {font-family: 'icomoon' !important;speak:none;
	font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;
	-webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-close:before {
  content: "\e900";
}
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>

<script>
  jQuery(document).ready(function(){
        /*--- SEARCH ---*/
      jQuery('.btn-search').on('click', function(){
        jQuery("#search").addClass('search-open');
        setTimeout(function() { 
          jQuery('#search .txtsearch').focus();
        }, 100);
      });
      
      jQuery('.btn-search-close').on('click', function(){
        jQuery("#search").removeClass('search-open');
        jQuery('#search .txtsearch').blur().val('');
      });

  });
</script>
	
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
    </script>

<?php wp_footer(); ?>