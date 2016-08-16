<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Sport Event</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

  <meta name="author" content="Corsini Alessio" />
  <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,  charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" /> 
  {{ Html::style('css/bootstrap.css') }}
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="{{ URL::asset('css/online/open_sans.css') }}" rel='stylesheet' type='text/css'/>
  <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->
  <link href="{{ URL::asset('css/online/raleway.css') }}" rel='stylesheet' type='text/css'/>
  <link href="{{ URL::asset('css/online/oswald.css') }}" rel='stylesheet' type='text/css'>

  <link href="{{ URL::asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <!--Clients-->
  <link href="{{ URL::asset('css/own/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/own/owl.theme.css') }}" rel="stylesheet" type="text/css" />

  <link href="{{ URL::asset('css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />

  <link href="{{ URL::asset('css/minislide/flexslider.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/component.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/style_dir.css') }}" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" type="image/png" href="{{ URL::asset('img/favicon.ico') }}" />
  <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
  <!--SECTION TOP LOGIN-->
  <section class="content-top-login">
   <div class="container">
    <div class="col-md-12">
     <div class="box-support">
       <p class="support-info"><i class="fa fa-envelope-o"></i> info@wttennis.com</p>
     </div>
     <div class="box-login">
       <!-- <i class="fa fa-shopping-cart"></i> -->
       <a href="{{ url('/login') }}">Login</a>
       <!-- <a href='login.html'>Sign Up</a> -->
     </div>
     <!-- <div class="cart-prod hiddenbox">
       <div class="sec-prod">
        <div class="content-cart-prod">
          <i class="fa fa-times"></i>
          <img src="http://placehold.it/160x160" alt="" />
          <p>FIVE BLX</p>
          <p>1 X $55.00</p>
        </div>
        <div class="content-cart-prod">
          <i class="fa fa-times"></i>
          <img class="racket-img" src="http://placehold.it/160x160" alt="" />
          <p>FIVE BLX</p>
          <p>1 X $125.00</p>
        </div>
        <div class="content-cart-prod">
          <p class="cart-tot-price">Total: $180.00</p>
          <a href="#" class="btn-cart">Go to cart</a>
          <a href="#" class="btn-cart">Checkout</a>
        </div>
      </div>
    </div>
  </div> -->
</div>
</section>
<!--SECTION MENU -->
<section class="container box-logo">
  <header>
   <div class="content-logo col-md-12">
    <div class="logo">
      <img src="img/logo2.png" alt="" />
    </div>

    <div class="bt-menu"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>

    <div class="box-menu">

      <nav id="cbp-hrmenu" class="cbp-hrmenu">
        <ul id="menu">
          <li><a class="lnk-menu active" href="{{ url('/') }}">Home</a></li>
          <!-- <li>
            <a class="lnk-menu" href="#">Pages</a>
            <div class="cbp-hrsub sub-little">
              <div class="cbp-hrsub-inner">
                <div class="content-sub-menu">
                  <ul class="menu-pages">
                    <li><a href="tournaments.html"><span>Tournaments</span></a></li>
                    <li><a href="login.html"><span>Login</span></a></li>
                    <li><a href="news.html"><span>News</span></a></li>
                    <li><a href="single_news.html"><span>Single News</span></a></li>
                    <li><a href="video_tube.html"><span>Video (youtube)</span></a></li>
                    <li><a href="video.html"><span>Video (html5)</span></a></li>
                    <li><a href="results.html"><span>Results</span></a></li>
                    <li><a href="players.html"><span>Players</span></a></li>
                    <li><a href="single_player.html"><span>Single Player</span></a></li>
                    <li><a href="matches.html"><span>Matches</span></a></li>
                    <li><a href="match.html"><span>Single Match</span></a></li>
                    <li><a href="shops.html">Shop</a></li>
                    <li><a href="shop_rackets.html">Shop Rackets</a></li>
                    <li><a href="details_prod.html">Single products</a></li>
                    <li><a href="gallery_col.html">Photo Gallery</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>-->
          <li>
            <a class="lnk-menu" href="#">Competition</a>
            <div class="cbp-hrsub sub-little">
              <div class="cbp-hrsub-inner">
                <div class="content-sub-menu">
                  <ul class="menu-pages">
                    <li><a href="{{ route('reg_futsal.store') }}"><span>Futsal</span></a></li>
                    <li><a href="{{ route('reg_basket.store') }}"><span>Basket</span></a></li>
                    <li><a href="{{ route('reg_bultang.store') }}"><span>Bulu Tangkis</span></a></li>
                    <li><a href="{{ route('reg_voli.store') }}"><span>Voli</span></a></li>
                    <li><a href="{{ route('reg_swim.store') }}"><span>Berenang</span></a></li>
                    <li><a href="{{ route('reg_marathon.store') }}"><span>Marathon</span></a></li>
                    <li><a href="{{ route('reg_catur.store') }}"<span>Catur</span></a></li>
                    <li><a href="{{ route('reg_lompat.store') }}"><span>Lompat Tinggi</span></a></li>                 
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a class="lnk-menu" href="#">Participant</a>
            <div class="cbp-hrsub sub-little">
              <div class="cbp-hrsub-inner">
                <div class="content-sub-menu">
                  <ul class="menu-pages">
                    <li><a href="{{ url('/tim') }}"><span>Tim</span></a></li>
                    <li><a href="{{ url('/individual') }}"><span>Single Player</span></a></li>
                    <li><a href="{{ url('/match')}}"><span>Points</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li><a class="lnk-menu" href="{{ url('/results') }}">Results</a></li>
          <li><a class="lnk-menu" href="{{ url('/news') }}">News</a></li>
          <li><a class="lnk-menu" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
</section>



@yield('content')

<!--SECTION SPONSOR-->
     <section class="container">
           <div class="client-sport client-sport-nomargin home-pg">
               <div class="content-banner">
                     <ul class="sponsor second">
                      <li><img src="img\sponsorship\aqua.jpg" alt="" /></li>
                      <li><img src="img\sponsorship\danone.jpg" alt="" /></li>
                      <li><img src="img\sponsorship\nike.jpg" alt="" /></li>
                      <li><img src="img\sponsorship\pocari.jpg" alt="" /></li>
                      <li><img src="img\sponsorship\sariroti.jpg" alt="" /></li>
                      <li><img src="img\sponsorship\yakult.jpg" alt="" /></li>
                    </ul>
                </div>
          </div>
     </section>


<!--SECTION FOOTER-->
<section id="footer-tag">
 <div class="container">
   <div class="col-md-12">
    <div class="col-md-3">
     <h3>About Us</h3>
     <p>Thank you for visiting tennisclub.com. Our mission is to
       provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>
       <p>Our mission is to
         provide unrivalled and unbiased informative, resources to help any sports fan who enjoys a flutter make.</p>
       </div>
       <div class="col-md-3 cat-footer">
        <div class="footer-map"></div>
        <h3 class='last-cat'>Categories</h3>
        <ul class="last-tips">
          <li><a href="tournaments.html">Tournaments</a></li>
          <li><a href="results.html">All Results</a></li>
          <li><a href="matches.html">Matches London ATP</a></li>
          <li><a href="matches.html">Double ATP</a></li>
          <li><a href="matches.html">Double WTP</a></li>
          <li><a href="shops.html">Shop Best Price</a></li>
        </ul>
      </div>
      <div class="col-md-3">
       <h3>Last News</h3>
       <ul class="footer-last-news">
        <li><img src="http://placehold.it/320x213" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
        <li><img src="http://placehold.it/320x213" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
        <li><img src="http://placehold.it/320x213" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
      </ul>
    </div>
    <div class="col-md-3 footer-newsletters">
      <h3>Newsletters</h3>
      <form method="post">
        <div class="name">
          <label for="name">* Name:</label><div class="clear"></div>
          <input id="name" name="name" type="text" placeholder="e.g. Mr. John Doe" required=""/>
        </div>
        <div class="email">
          <label for="email">* Email:</label><div class="clear"></div>
          <input id="email" name="email" type="text" placeholder="example@domain.com" required=""/>
        </div>
        <div id="loader">
          <input type="submit" value="Submit"/>
        </div>
      </form>
    </div>
    <div class="col-xs-12">
      <ul class="social">
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
        <li><a href=""><i class="fa fa-digg"></i></a></li>
        <li><a href=""><i class="fa fa-rss"></i></a></li>
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
        <li><a href=""><i class="fa fa-tumblr"></i></a></li>

      </ul>
    </div>
  </div>
</div>
</section>
<footer>
 <div class="col-md-12 content-footer">
  <p>© 2014 - 2015 wttennis.com. All rights reserved. </p>
</div>
</footer>


<script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.transit.min.js') }}" type="text/javascript"></script>

<!--MENU-->
<script src="{{ URL::asset('js/menu/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/menu/cbpHorizontalMenu.js') }}" type="text/javascript"></script>
<!--END MENU-->

<!--Mini Flexslide-->
<script src="{{ URL::asset('js/minislide/jquery.flexslider.js') }}" type="text/javascript"></script>

<!-- Percentace circolar -->
<script src="{{ URL::asset('js/circle/jquery-asPieProgress.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/circle/rainbow.min.js') }}" type="text/javascript"></script>

<!--Gallery-->
<script src="{{ URL::asset('js/gallery/jquery.prettyPhoto.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/gallery/isotope.js') }}" type="text/javascript"></script>

<!-- Button Anchor Top-->
<script src="{{ URL::asset('js/jquery.ui.totop.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.bxslider.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.accordion.js') }}" type="text/javascript"></script>

<!--Carousel News-->
<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.mousewheel.js') }}" type="text/javascript"></script>

<!--Carousel Clients-->
<script src="{{ URL::asset('js/own/owl.carousel.js') }}" type="text/javascript"></script>

<!--Count down-->
<script src="{{ URL::asset('js/jquery.countdown.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('js/custom_ini.js') }}" type="text/javascript"></script>

</body>
</html>