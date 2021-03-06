<?php
/*
* Template Name: Pruebas Name
* Description: Lugar para vender
*/
require_once 'Conexcion/Conexion.php';

$_db = new Conexion;
$sql = "SELECT * FROM menu WHERE Men_Dad = 1 AND Id_Padre = 0 and Men_Estado = 1";
$menus = $_db->prepare($sql);
$menus->execute();

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300italic,400,700">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="page">
      <main class="page-content" id="perspective">
        <div class="content-wrapper">
          <div class="page-header page-header-perspective page-header-perspective-transparent">
            <div class="page-header-left"><a class="brand" href="index.html">
                <div class="brand-logo-default"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-default-199x36.png" alt="" width="199" height="36"/>
                </div>
                <div class="brand-logo-white"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white-200x36.png" alt="" width="200" height="36"/>
                </div></a></div>
            <div class="page-header-right">
              <div class="booking-control"><a class="btn btn-xs btn-circle btn-primary" href="step-1.html">BOOK NOW</a></div>
              <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                <button class="perspective-menu-toggle"><span></span></button>
              </div>
            </div>
          </div>
          <div id="wrapper">
            <section class="jumbotron-custom jumbotron-custom-1 bg-gray-base bg-image text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-image-2.jpg);">
              <div class="jumbotron-custom-content">
                <div class="shell">
                  <div class="range range-sm-center">
                    <div class="cell-sm-10 cell-lg-9"><a class="brand-big" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-white-136x160.png" alt="" width="136" height="160"/></a>
                      <p class="caption">The Best</p>
                      <h1>Masters of the Blade</h1>
                      <p class="large">At Barbershop, you will find an atmosphere of old school sophistication with modern amenities.We cater to gentlemen on the go. So stop in on your lunch break to get an old-fashioned straight razor shave or a perfect haircut.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center range-50">
                  <div class="cell-xs-12">
                    <h2>OUR SERVICES</h2>
                    <div class="p text-width-medium">
                      <p class="big">Barbershop offers world-class men's haircuts, beard grooming, and hot razor shaves. Here are just some of the services we are known for.</p>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <div class="range range-30">
                      <div class="cell-xs-6 cell-md-3">
                        <article class="box-icon">
                          <figure class="box-icon-image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-service-1-70x62.png" alt="" width="70" height="62"/>
                          </figure>
                          <p class="box-icon-header"><a href="services.html">TRADITIONAL HAIRCUTS</a></p>
                          <p class="box-icon-text">One of the most popular services our barbers provide</p>
                        </article>
                      </div>
                      <div class="cell-xs-6 cell-md-3">
                        <article class="box-icon">
                          <figure class="box-icon-image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-service-2-70x62.png" alt="" width="70" height="62"/>
                          </figure>
                          <p class="box-icon-header"><a href="services.html">SHAVES</a></p>
                          <p class="box-icon-text">Our shaving services will make you look really handsome</p>
                        </article>
                      </div>
                      <div class="cell-xs-6 cell-md-3">
                        <article class="box-icon">
                          <figure class="box-icon-image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-service-3-70x62.png" alt="" width="70" height="62"/>
                          </figure>
                          <p class="box-icon-header"><a href="services.html">BEARD trim</a></p>
                          <p class="box-icon-text">Well-trimmed beard is a must-have element of every men’s image</p>
                        </article>
                      </div>
                      <div class="cell-xs-6 cell-md-3">
                        <article class="box-icon">
                          <figure class="box-icon-image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-service-4-70x62.png" alt="" width="70" height="62"/>
                          </figure>
                          <p class="box-icon-header"><a href="services.html">Mustache TRIM</a></p>
                          <p class="box-icon-text">Mustaches also need to be trimmed regularly</p>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <article class="box-promo">
                  <div class="box-promo-left"><img class="box-promo-image" src="<?php echo get_template_directory_uri(); ?>/images/home-1-585x580.jpg" alt="" width="585" height="580"/>
                  </div>
                  <div class="box-promo-body">
                    <p class="box-promo-title">we help you look great</p>
                    <div class="box-promo-text">
                      <p>Barbershop is San Francisco's premier barber shop for stylish men looking for a place where they can feel comfortable, speak their minds, and leave satisfied.</p>
                    </div>
                    <div class="box-promo-control"><a class="btn btn-sm btn-circle btn-primary" href="about.html">learn more</a></div>
                  </div>
                </article>
              </div>
            </section>

            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-75">
                  <div class="cell-xs-12">
                    <h2>OUR BARBERS</h2>
                    <div class="p text-width-medium">
                      <p class="big">We employ only highly qualified barbers who are not just professionals, but also enjoy maintaining the atmosphere of a classic barbershop.</p>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <div class="range range-30">
                      <div class="cell-sm-6 cell-md-4 height-fill">
                        <div class="thumbnail-card"><img class="thumbnail-card-image" src="<?php echo get_template_directory_uri(); ?>/images/barbers-1-370x310.jpg" alt="" width="370" height="310"/>
                          <div class="thumbnail-card-body">
                            <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">simon Wilson</p>
                            <div class="thumbnail-card-text">
                              <p>Mr. Wilson is the founder and owner of our barbershop.</p>
                            </div>
                            <ul class="inline-list inline-list-md">
                              <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                              <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                              <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="cell-sm-6 cell-md-4 height-fill">
                        <div class="thumbnail-card"><img class="thumbnail-card-image" src="<?php echo get_template_directory_uri(); ?>/images/barbers-2-370x310.jpg" alt="" width="370" height="310"/>
                          <div class="thumbnail-card-body">
                            <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">Harry Anderson</p>
                            <div class="thumbnail-card-text">
                              <p>Harry brings a detailed, meticulous approach to styling.</p>
                            </div>
                            <ul class="inline-list inline-list-md">
                              <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                              <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                              <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="cell-sm-6 cell-md-4 height-fill">
                        <div class="thumbnail-card"><img class="thumbnail-card-image" src="<?php echo get_template_directory_uri(); ?>/images/barbers-3-370x310.jpg" alt="" width="370" height="310"/>
                          <div class="thumbnail-card-body">
                            <p class="thumbnail-card-header" data-toggle="modal" data-target="#modalWindow">Matthew phillips</p>
                            <div class="thumbnail-card-text">
                              <p>Matthew has several years of experience in the barber industry.</p>
                            </div>
                            <ul class="inline-list inline-list-md">
                              <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                              <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                              <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-xxl bg-gray-dark bg-gray-dark-overlay bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-image-3.jpg);">
              <div class="shell">
                <div class="range">
                  <div class="cell-sm-8 cell-md-7 cell-lg-6">
                    <h2 style="max-width: 90%;">BARBERSHOP HAIRCUT SERVICES</h2>
                    <p class="big">
                      We take pride in each service we provide. Every effort is made to give you the best barber experience whatever your haircut or shaving style is. Feel free to browse our services list to learn more about the services we offer our clients and guests.
                      
                    </p><a class="btn btn-sm btn-circle btn-primary" href="services.html">view all services</a>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center range-75">
                  <div class="cell-xs-12">
                    <h2>TESTIMONIALS</h2>
                    <div class="p text-width-medium">
                      <p class="big">These reviews that our clients have recently submitted are the best way to learn more about our barbershop’s level of service and customer support.</p>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-modern owl-spacing-1" data-items="1" data-stage-padding="0" data-loop="true" data-margin="20" data-xs-margin="30" data-mouse-drag="false" data-nav="true" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
                      <div class="item">
                                    <blockquote class="quote-fullwidth">
                                      <div class="quote-fullwidth-left">
                                        <div class="quote-fullwidth-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonials-1-100x100.jpg" alt="" width="100" height="100"/>
                                        </div>
                                      </div>
                                      <div class="quote-fullwidth-body">
                                        <div class="quote-fullwidth-header">
                                          <cite>Matt Parker</cite>
                                        </div>
                                        <p class="quote-fullwidth-text">
                                          <q>I have taken my 3 yr old son for his first men’s haircut and now I’m glad he has such a fantastic look. I recommend any of the barbers at Barbershop for service and pride in their work. I believe my son would never be allowed to leave the chair without a really handsome cut.</q>
                                        </p>
                                        <ul class="inline-list inline-list-md">
                                          <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                          <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                          <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                        </ul>
                                      </div>
                                    </blockquote>
                      </div>
                      <div class="item">
                                    <blockquote class="quote-fullwidth">
                                      <div class="quote-fullwidth-left">
                                        <div class="quote-fullwidth-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonials-2-100x100.jpg" alt="" width="100" height="100"/>
                                        </div>
                                      </div>
                                      <div class="quote-fullwidth-body">
                                        <div class="quote-fullwidth-header">
                                          <cite>John Miller</cite>
                                        </div>
                                        <p class="quote-fullwidth-text">
                                          <q>I wouldn't go anywhere else in San Francisco. I've been coming here for the last year and I've never felt better about paying good money for a haircut. The guys know what they are doing, give solid advice, and cut like pros. I wasn't used to this before but I’ll visit Barbershop again.</q>
                                        </p>
                                        <ul class="inline-list inline-list-md">
                                          <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                          <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                          <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                        </ul>
                                      </div>
                                    </blockquote>
                      </div>
                      <div class="item">
                                    <blockquote class="quote-fullwidth">
                                      <div class="quote-fullwidth-left">
                                        <div class="quote-fullwidth-avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonials-3-100x100.jpg" alt="" width="100" height="100"/>
                                        </div>
                                      </div>
                                      <div class="quote-fullwidth-body">
                                        <div class="quote-fullwidth-header">
                                          <cite>Anthony Smith</cite>
                                        </div>
                                        <p class="quote-fullwidth-text">
                                          <q>Polite, professional, charming and courteous team. The best haircut I have ever had! Simon was full of crack, was more than happy to suggest the best cut for me and he even offered a free beverage - what more could you want?! This barbershop is indeed my favorite one.</q>
                                        </p>
                                        <ul class="inline-list inline-list-md">
                                          <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                                          <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                          <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                                        </ul>
                                      </div>
                                    </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <h2>latest Blog Posts</h2>
                <div class="p text-width-medium">
                  <p class="big">Barbershop is not only a place where you can get a first-class haircut. Our barbers also write interesting articles on everything concerning their sphere of interest.</p>
                </div>
                <article class="box-post box-post-dark box-post-reverse box-post-image-right-bottom">
                  <div class="box-post-left"><img class="box-post-image" src="<?php echo get_template_directory_uri(); ?>/images/box-post-1-530x490.png" alt="" width="530" height="490"/>
                  </div>
                  <div class="box-post-body">
                    <p class="box-post-title"><a href="single-post.html">Visiting a Barber</a></p>
                    <div class="box-post-text">
                      <p>A barber knows how to cut men’s hair. If you’re like most men these days, you’re probably going to some unisex chain salon.</p>
                    </div><a class="btn btn-sm box-post-control" href="single-post.html">READ MORE</a>
                  </div>
                </article>
                <article class="box-post">
                  <div class="box-post-left"><img class="box-post-image" src="<?php echo get_template_directory_uri(); ?>/images/box-post-2-530x490.png" alt="" width="530" height="490"/>
                  </div>
                  <div class="box-post-body">
                    <p class="box-post-title"><a href="single-post.html">What Haircut Suits You</a></p>
                    <div class="box-post-text">
                      <p>Different people have different face shapes. And not you, but your face shape decides will this haircut suit you or not.</p>
                    </div><a class="btn btn-sm box-post-control" href="single-post.html">READ MORE</a>
                  </div>
                </article>
                <article class="box-post box-post-dark box-post-reverse">
                  <div class="box-post-left"><img class="box-post-image" src="<?php echo get_template_directory_uri(); ?>/images/box-post-3-530x490.png" alt="" width="530" height="490"/>
                  </div>
                  <div class="box-post-body">
                    <p class="box-post-title"><a href="single-post.html">Top 7 Shaving products</a></p>
                    <div class="box-post-text">
                      <p>The right shaving cream can make the difference between a healthy skin and one plagued by ingrown hairs, razor burns, irritation etc.</p>
                    </div><a class="btn btn-sm box-post-control" href="single-post.html">READ MORE</a>
                  </div>
                </article>
              </div>
            </section>

            <section class="box-wrap box-wrap-sm bg-white">
              <div class="box-wrap-map">
                <div class="rd-google-map rd-google-map__model" data-zoom="14" data-x="-73.9999000" data-y="40.643180"></div>
              </div>
              <div class="box-wrap-content">
                <div class="shell">
                  <div class="box-contacts box-contacts-horizontal box-contacts-horizontal-small box-wrap-content-interactive">
                    <div class="box-contacts-col text-center text-sm-left">
                      <div class="box-contacts-block">
                        <h3>Address</h3>
                        <address>123 Street W, Seattle WA 99999 United States</address>
                      </div>
                      <div class="divider divider-nebula"></div>
                      <div class="box-contacts-block text-center text-sm-left">
                        <h3>Opening Hours</h3>
                        <dl class="box-contacts-terms-list">
                          <dt>Monday – Friday</dt>
                          <dd>9am - 6pm</dd>
                          <dt>Saturday and Sunday</dt>
                          <dd>10am - 4pm</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <footer class="page-footer page-footer-default">
              <div class="shell">
                <div class="range range-xs-center">
                  <div class="cell-lg-10"><a class="brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-default-199x36.png" alt="" width="199" height="36"/></a>
                    <div class="text-highlighted-wrap">
                      <p class="text-highlighted">Barbershop is a No.1 place to have a men’s haircut in San Francisco. Here you can get luxury barber experience at a reasonable price.</p>
                    </div>
                    
                    <div class="divider divider-small divider-light block-centered"></div>
                    <ul class="inline-list inline-list-md">
                      <li><a class="icon icon-xs link-gray-light fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-light fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-light fa-youtube" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-light fa-linkedin" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
          </div>
          <div id="perspective-content-overlay"></div>
        </div>
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-default-199x36.png" alt="" width="199" height="36"/></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-nav-inner">
                  <ul class="rd-navbar-nav">
                    <?php 
                        while($row = $menus->fetch(PDO::FETCH_OBJ)) {
                         $sub_sql = "SELECT * FROM menu WHERE Id_Padre=:id and Men_Estado = 1 and Men_Dad =1";
                         $sub_men = $_db->prepare($sub_sql);
                         $sub_men->bindParam(':id',$row->Id_Menu,PDO::PARAM_INT);
                         $sub_men->execute();
                         ?>
                         <li>
                           <a href="#"><?php echo $row->Men_Nombre; ?></a>
                           <?php
                           if($sub_men->rowCount()) {
                             ?>
                             <ul class="rd-navbar-megamenu">
                                <?php
                                   while($sub_row= $sub_men->fetch(PDO::FETCH_OBJ)){
                                   $Query = "SELECT * FROM menu WHERE Id_Padre=:id and Men_Estado = 1";
                                   $List = $_db->prepare($Query);
                                   $List->bindParam(':id',$sub_row->Id_Menu,PDO::PARAM_INT);
                                   $List->execute();
                                   
                                 ?>
                                    <li>
                                      <p class="rd-megamenu-header"><a href="#"><?php echo $sub_row->Men_Nombre; ?></a></p>
                                      <?php
                                      if($List->rowCount()) {
                                        ?>
                                        <ul class="rd-megamenu-list">
                                          <?php
                                            while($Sub_list = $List->fetch(PDO::FETCH_OBJ)){
                                              ?>
                                                <li>
                                                  <a href=""><?php echo $Sub_list->Men_Nombre;   ?></a>
                                                </li>
                                              <?php
                                            }
                                          ?>
                                        </ul>
                                        <?php
                                      }
                                      ?>
                                    </li>                              
                                    <?php
                                    }
                                    ?> 
                                </ul>
                                <?php
                                  }
                                ?>
                           </li>
                           <?php 
                            }
                           ?>
                    </ul> 
                  </div>
               </div>
              </div>
            </nav>
          </div>
        </main>
      </div>
    <div class="modal fade text-center" id="modalWindow" role="dialog">
      <div class="modal-dialog custom-modal-dialog">
        <div class="custom-modal-content">
          <button class="close" type="button" data-dismiss="modal"></button>
          <div class="shell">
            <div class="box-portfolio"><img class="box-portfolio-image" src="<?php echo get_template_directory_uri(); ?>/images/barbers-single-1-130x130.jpg" alt="" width="130" height="130"/>
              <p class="box-portfolio-header">simon wilson</p>
              <div class="box-portfolio-text">
                <p>Simon Wilson founded Barbershop in 2003 at the age of 23. He decided to establish a place where the long standing traditions of American barbering could be saved. He kept Barbershop a true place for men, their fathers, and sons, rather than converting it to a unisex salon as was the popular trend at the time. Over the past 13 years, Mr. Wilson has grown his shop from a small, local spot to a nationally and internationally recognized standard in the industry. Simon has been the recipient of various accolades including the HYPE Award for Entrepreneurs and the Hartford Business Journal's 40 Under Forty (Class of 2014). He can be found at the shop on Wednesdays and Fridays.</p>
              </div>
              <ul class="inline-list inline-list-md">
                <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/core.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  </body>
</html>