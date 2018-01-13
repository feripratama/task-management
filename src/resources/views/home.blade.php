<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600|Lato:700,900,400|Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('libs/bower/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('libs/misc/owl-carousel/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('libs/bower/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/landing-page.css')}}">
  <title>Infinity Landing Page</title>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="60">
  <div class="wrapper">
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#page-menu-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand animated" href="#">
            <i class="brand-icon"> <img src="{{ asset('images/logo.png') }}" alt="logo" widht="27px" height="24px"></i>
            
            <span class="brand-name">API Banten Prov</span>
          </a>
        </div><!-- .navbar-header -->

        <div class="navbar-collapse collapse" id="page-menu-collapse">
          <div class="navbar-right">
            <ul class="nav navbar-nav">
              <li><a data-scroll href="#header">Home</a></li>
              <li><a data-scroll href="#features">Features</a></li>
              <li><a data-scroll href="#brief">Brief</a></li>
              <li><a data-scroll href="#states">Numbers</a></li>
              <li><a data-scroll href="#subscribe">News Letter</a></li>
              <li><a data-scroll href="#price">Pricing</a></li>
              <li><a data-scroll href="#reviews">Clients</a></li>
            </ul>
          </div>
        </div><!-- .navbar-collapse -->

      </div><!-- .container -->
    </nav>

    <header id="header">
      <div class="container">
        
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="intro-text">
              <h2 class="section-heading animated">Stunning Design With Awesome Layouts</h2>
              <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis <br> quisquam animi iusto, modi natus iste?</p>
            </div>
          </div>  
        </div>

        <div id="video-container">
          <a id="play-video" href="#" data-toggle="modal" data-target="#video-modal" data-backdrop="true">
            <img src="assets/images/landing-page/video-bg.png" alt="">
            <span class="play-icon">
              <img src="assets/images/landing-page/play-icon.png" alt="">
            </span>
          </a>
        </div>
      </div><!-- .container -->
    </header><!-- #header -->

    <div class="modal fade video-modal" id="video-modal" role="dialog">
      <div class="modal-content">
        <iframe src="https://player.vimeo.com/video/160856876" width="860" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div><!-- #video-modal -->

    <section id="features">
      <div class="container">

        <div class="text-center">
          <h2 class="section-heading animated">Working to Build A Better Web</h2>
          <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sunt quisquam ea distinctio unde, iste doloribus iure dignissimos rerum eaque ipsum nostrum. Non deserunt reprehenderit eaque libero sunt, nam optio.</p>
        </div><!-- .text-center -->

        <div class="row text-center">

          <div class="col-md-4">
            <div class="col-inner feature">
              <img src="assets/svg/tie.svg" alt="icon">
              <h4>Myspace profile</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div><!-- /.col -->

          <div class="col-md-4">
            <div class="col-inner feature">
              <img src="assets/svg/pig.svg" alt="icon">
              <h4>Myspace profile</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div><!-- /.col -->

          <div class="col-md-4">
            <div class="col-inner feature">
              <img src="assets/svg/pointer.svg" alt="icon">
              <h4>Myspace profile</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div><!-- /.col -->
          
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #features -->

    <section id="brief">
      <div id="brief-img">
        <img src="assets/images/landing-page/img-1.jpg" alt="">
      </div><!-- #brief-img -->

      <div class="container">
        <div id="brief-text">
          <h2 class="section-heading animated">Creative &amp; Professional</h2>
          <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sit non sunt, a numquam reiciendis expedita possimus quisquam ipsam veritatis doloribus voluptas illum, nostrum perspiciatis laudantium minima obcaecati maxime laborum.</p>
          <ul>
            <li>
              <img class="item-icon" src="assets/svg/check.svg" alt="">
              <span class="item-text">Home Audio Recording For Everyone</span>
            </li>
            <li>
              <img class="item-icon" src="assets/svg/check.svg" alt="">
              <span class="item-text">Understanding Operating Systems</span>
            </li>
            <li>
              <img class="item-icon" src="assets/svg/check.svg" alt="">
              <span class="item-text">Compare Prices Find The Best</span>
            </li>
          </ul>
        </div><!-- #brief-text -->
      </div><!-- .container -->
    </section><!-- #brief -->

    <section id="states" class="bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="col-inner text-center">
              <h3 class="counterUp">51</h3>
              <h4>The Advantages</h4>
              <p>If you are a male over the age of 40 and are suffering from weakness, impotence, pain</p>
            </div>
          </div><!-- /.col -->

          <div class="col-md-3 col-sm-6">
            <div class="col-inner text-center">
              <h3 class="counterUp">2542</h3>
              <h4>Active Users</h4>
              <p>Chamomile is known worldwide to be a calming sleep aid, a remedy to ease an upset stomach</p>
            </div>
          </div><!-- /.col -->

          <div class="col-md-3 col-sm-6">
            <div class="col-inner text-center">
              <h3 class="counterUp">8546</h3>
              <h4>Vasectomy</h4>
              <p>Classical homeopathy is generally defined as a system of medical treatment </p>
            </div>
          </div><!-- /.col -->

          <div class="col-md-3 col-sm-6">
            <div class="col-inner text-center">
              <h3 class="counterUp">1258</h3>
              <h4>Asperger</h4>
              <p>LASIK is the most commonly performed refractive surgery.</p>
            </div>
          </div><!-- /.col -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #states -->

    <section id="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="text-center">
              <h2 class="section-heading animated">Subscribe</h2>
              <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt accusantium est illum ratione corporis?</p>
            </div>
          </div><!-- /.col -->
        </div><!-- .row -->

        <div class="subs-form">
          <form action="#" class="form-horizontal">
            <div class="col-md-4">
              <div class="control-wrap">
                <input type="text" class="form-control" placeholder="Your Name">
                <img src="assets/svg/users.svg" alt="">
              </div>
            </div><!-- /.col -->

            <div class="col-md-4">
              <div class="control-wrap">
                <input type="text" class="form-control" placeholder="Your Email">
                <img src="assets/svg/email.svg" alt="">
              </div>
            </div><!-- /.col -->

            <div class="col-md-4">
              <input type="submit" value="SUBSCRIBE NOW" class="btn btn-block btn-primary">
            </div><!-- /.col -->
          </form>
        </div>
      </div><!-- .container -->
    </section><!-- #subscribe -->

    <section id="price">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="text-center">
              <h2 class="section-heading animated">Our Prices</h2>
              <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt accusantium est illum ratione corporis?</p>
            </div>
          </div><!-- /.col -->
        </div><!-- .row -->

        <div class="row">
          <div class="col-md-4 price-column">
            <div class="price-column-inner">
              <header>
                <h4>Basic</h4>
                <h3>Free</h3>
              </header>
              <ul>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Simple Install</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Unlimited Projects</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/remove.svg" alt="">
                  <span class="crossed">After Hourss Support</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/remove.svg" alt="">
                  <span class="crossed">Unlimited Storage</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/remove.svg" alt="">
                  <span class="crossed">Desdcated Server</span>
                </li>
              </ul>
              <footer class="text-center">
                <button class="btn btn-default">BUY NOW</button>
              </footer>
            </div>
          </div><!-- /.col -->

          <div class="col-md-4 price-column">
            <div class="price-column-inner">
              <header>
                <h4>Professional</h4>
                <h3>$<span class="counterUp">49</span></h3>
              </header>
              <ul>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Simple Install</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Unlimited Projects</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>After Hourss Support</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/remove.svg" alt="">
                  <span class="crossed">Unlimited Storage</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/remove.svg" alt="">
                  <span class="crossed">Desdcated Server</span>
                </li>
              </ul>
              <footer class="text-center">
                <button class="btn btn-primary">BUY NOW</button>
              </footer>
            </div>
          </div><!-- /.col -->

          <div class="col-md-4 price-column">
            <div class="price-column-inner">
              <header>
                <h4>Unlimited</h4>
                <h3>$<span class="counterUp">415</span></h3>
              </header>
              <ul>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Simple Install</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Unlimited Projects</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>After Hourss Support</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Unlimited Storage</span>
                </li>
                <li>
                  <img class="item-icon" src="assets/svg/check.svg" alt="">
                  <span>Desdcated Server</span>
                </li>
              </ul>
              <footer class="text-center">
                <button class="btn btn-default">BUY NOW</button>
              </footer>
            </div>
          </div><!-- /.col -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #price -->

    <section id="reviews">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="text-center">
              <img src="assets/images/landing-page/talk-bubble.png" alt="">
            </div>
            <div id="owl-slider" class="owl-carousel owl-theme">
              <div class="item">
                <p class="review-text">Being the richest man in the cemetery doesn't matter to me. Going to bed at night saying we've done something wonderful, that's what matters to me.</p>
                <h4 class="reviewer">Steve Jobs</h4>
              </div>
              
              <div class="item">
                <p class="review-text">Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important</p>
                <h4 class="reviewer">Bill Gates</h4>
              </div>

              <div class="item">
                <p class="review-text">When you give everyone a voice and give people power, the system usually ends up in a really good place. So, what we view our role as, is giving people that power.</p>
                <h4 class="reviewer">Mark Zuckerberg</h4>
              </div>
            </div><!-- #owl-slider -->
          </div><!-- /.col -->
        </div>
      </div><!-- .container -->
    </section><!-- #reviews -->

    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="col-inner navigation">
              <h2>NAVIGATION</h2>
              <ul class="navigation-menu">
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">SELECTED WORK</a></li>
                <li><a href="#">GET IN TOUCH</a></li>
                <li><a href="#">CAREERS</a></li>
              </ul>
            </div>
          </div><!-- /.col -->

          <div class="col-md-5 col-md-offset-1">
            <div class="col-inner news">
              <h2>RECENT NEWS</h2>
              <p>Made with infinty - <a href="#">@Ra-Themes</a> - see more of what our creative customers make a <a class="text-primary" href="#">http://rathemes.com</a></p>
              <p>Computer users and programmers have become so accustomed to using Windows <a href="#">@Ra-Themes</a></p>
            </div>
          </div><!-- /.col -->

          <div class="col-md-3 col-md-offset-1">
            <div class="col-inner">
              <h2>PROJECTS</h2>
              <div class="images clearfix">
                <a href="#"><img class="img-responsive" src="assets/images/103.jpg" alt=""></a>
                <a href="#"><img class="img-responsive" src="assets/images/102.jpg" alt=""></a>
                <a href="#"><img class="img-responsive" src="assets/images/101.jpg" alt=""></a>
              </div>

              <div class="icons">
                <a href="#" class="icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="icon"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="icon"><i class="fa fa-dribbble"></i></a>
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #footer -->

    <section id="copyright">
      <div class="container text-center">
        <p>Copyright &copy; 2016 PRO Medical Theme by <a href="#" class="text-primary">RaThemes</a></p>
      </div>
    </section><!-- #copyright -->
  </div>
  <div id="loading-div">
    <img src="assets/images/landing-page/puff.svg" width="50" alt="">
  </div>
  <script src="{{asset('libs/bower/jquery/dist/jquery.js')}}"></script>
  <script src="{{asset('libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js')}}"></script>
  <script src="{{asset('libs/misc/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('libs/bower/smooth-scroll/dist/js/smooth-scroll.min.js')}}"></script>
  <script src="{{asset('libs/bower/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('libs/bower/counterup/jquery.counterup.min.js')}}"></script>

  <script>

    $(function() {
      $(window).on('load', function(){
        $(document.body).addClass('loading-done');
      });

      //= shrink and expand the navbar 
      $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 50) $('.navbar').addClass('shrink');
        else $('.navbar').removeClass('shrink');
      });

      //= autoplay the video when the modal show up
      autoPlayYouTubeModal();

      //= equal columns height
      matchHeight('#states .col-inner');

      //= counterUp plugin
      $('.counterUp').counterUp({ delay: 10, time: 1500 });

      //= set the max-height property for .navbar-collapse
      $(window).on('load resize orientationchange', function(){
        $('.navbar-collapse').css('max-height', $(window).height() - $('.navbar').height());
      });

      $(document).on('click', '[data-toggle="collapse"]', function(e){
        var $trigger = $(e.target);
        $trigger.is('[data-toggle="collapse"]') || ($trigger = $trigger.parents('[data-toggle="collapse"]'));
        var $target = $($trigger.attr('data-target'));
        if ($target.attr('id') === 'page-menu-collapse')
          $(document.body).toggleClass('navbar-collapse-show', !$trigger.hasClass('collapsed'))
      });

      //= initialize smooth scroll plugin
      smoothScroll.init({
        offset: 60,
        speed: 1000,
        updateURL: false
      });

      // initializing owlCarousel
      $("#owl-slider").owlCarousel({
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay: true
      });

      // initialize waypoints for section-headings
      $('.section-heading').waypoint(function(direction) {
        if (direction === 'down') $(this.element).addClass('fadeInUp');
        else $(this.element).removeClass('fadeInUp');
      }, { offset: '96%' });
    });

    autoPlayYouTubeModal = function() {
      $('#play-video').on("click",function() {
        var theModal = $(this).data("target"),
          videoSRC = $('#video-modal iframe').attr('src'),
          videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').on("click",function() {
          $(theModal + ' iframe').attr('src', videoSRC);
        });
        $('.modal').on("click",function() {
          $(theModal + ' iframe').attr('src', videoSRC);
        });
      });
    };

    matchHeight = function(selector){
      var height, max = 0, $selector = $(selector);
      $selector.each(function(index, item){
        height = $(item).height();
        if (height > max) max = height;
      });
      $selector.height(max);
    };
  </script>
</body>

</html>