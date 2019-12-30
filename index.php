<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://estudiodevozes.com.br/
 *
 * @package Estudio_de_Vozes
 */

get_header();
?>


<!--=================================
 banner -->

<section class="slider-parallax typer-banner business bg-overlay-black-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php get_template_directory_uri(); ?>/images/bg/18.jpg);">
  <div class="slider-content-middle">
   <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12">
         <div class="slider-content text-center">
          <h1 class="text-white">Design, Code & <span class="typer" data-delay="150" data-words="Success,Launch,Webster" data-colors="#84ba3f,#84ba3f,#84ba3f"></span>  <span class="cursor" data-cursorDisplay="|" data-owner="some-id"></span> </h1>
           <p class="text-white mt-40">"Truly ideal solutions for your business. Create a website that you are gonna be proud of."</p>
           <a class="button move mt-20" href="#"> Let's talk </a>
          </div>
         </div>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->

 <!--=================================
 about -->

<section class="blockquote-section page-section-ptb">
  <div class="container">
     <div class="row no-gutter">
        <div class="col-sm-7 text-left blockquote-section-left">
          <blockquote class="blockquote quote">
           For a first time entrepreneur, choosing a business that has a clear revenue path is extremely important.
          <cite>- Collis Ta’eed <span class="text-gray"> CEO of Envato</span></cite>
         </blockquote>
        </div>
        <div class="col-sm-5 blockquote-section-right">
           <img class="img-fluid" src="<?php get_template_directory_uri(); ?>/images/about/05.jpg" alt="">
        </div>
     </div>
  </div>
</section>

 <!--=================================
 about -->

  <!--=================================
 portfolio -->

<section class="white-bg o-hidden popup-gallery">
  <div class="container-fluid p-0">
     <div class="row">
        <div class="col-sm-12 text-center">
          <div class="owl-carousel" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="0">
            <div class="item">
              <div class="portfolio-item">
                 <img src="images/portfolio/small/01.jpg" alt="">
                  <div class="portfolio-overlay">
                      <h4 class="text-white"> <a href="portfolio-single-01.html">Post item image</a> </h4>
                      <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
                 </div>
                 <a class="popup portfolio-img" href="<?php get_template_directory_uri(); ?>/images/portfolio/small/01.jpg"><i class="fa fa-arrows-alt"></i></a>
               </div>
             </div>
             <div class="item">
              <div class="portfolio-item">
                 <img src="images/portfolio/small/02.jpg" alt="">
                  <div class="portfolio-overlay">
                      <h4 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h4>
                      <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
                 </div>
                 <a class="popup portfolio-img" href="<?php get_template_directory_uri(); ?>/images/portfolio/small/02.jpg"><i class="fa fa-arrows-alt"></i></a>
               </div>
             </div>
             <div class="item">
              <div class="portfolio-item">
                 <img src="images/portfolio/small/03.jpg" alt="">
                  <div class="portfolio-overlay">
                      <h4 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h4>
                      <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
                 </div>
                 <a class="popup portfolio-img" href="<?php get_template_directory_uri(); ?>/images/portfolio/small/03.jpg"><i class="fa fa-arrows-alt"></i></a>
               </div>
             </div>
             <div class="item">
              <div class="portfolio-item">
                 <img src="images/portfolio/small/04.gif" alt="">
                  <div class="portfolio-overlay">
                      <h4 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h4>
                      <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
                 </div>
                 <a class="popup portfolio-img" href="<?php get_template_directory_uri(); ?>/images/portfolio/small/04.gif"><i class="fa fa-arrows-alt"></i></a>
               </div>
             </div>
             <div class="item">
              <div class="portfolio-item">
                 <img src="images/portfolio/small/07.jpg" alt="">
                  <div class="portfolio-overlay">
                      <h4 class="text-white"> <a href="portfolio-single-01.html"> Post item image</a> </h4>
                      <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
                 </div>
                 <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"><i class="fa fa-play"></i></a>
               </div>
             </div>
             <div class="item">
              <div class="portfolio-item">
                 <img src="images/portfolio/small/06.jpg" alt="">
                  <div class="portfolio-overlay">
                      <h4 class="text-white"> <a href="portfolio-single-01.html"> Post item image </a> </h4>
                      <span class="text-white"> <a href="#"> Photography  </a>| <a href="#">Illustration </a> </span>
                 </div>
                 <a class="popup portfolio-img" href="<?php get_template_directory_uri(); ?>/images/portfolio/small/06.jpg"><i class="fa fa-arrows-alt"></i></a>
               </div>
             </div>
         </div>
        </div>
     </div>
  </div>
</section>

 <!--=================================
 portfolio -->


<!--=================================
 counter -->

<section class="black-bg page-section-ptb">
  <div class="container">
     <div class="row">
           <div class="col-lg-3 col-sm-6 sm-mb-40">
             <div class="counter big-counter text-center">
              <span class="timer theme-color" data-to="4905" data-speed="10000">4905</span>
              <label class="text-white">ORDERED COFFEE'S</label>
            </div>
            </div>
           <div class="col-lg-3 col-sm-6 sm-mb-40">
           <div class="counter big-counter text-center">
              <span class="timer theme-color" data-to="3750" data-speed="10000">3750</span>
              <label class="text-white">QUESTIONS ANSWERED</label>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 xs-mb-40">
          <div class="counter big-counter text-center">
              <span class="timer theme-color" data-to="4782" data-speed="10000">4782</span>
              <label class="text-white">COMPLETED PROJECTS</label>
            </div>
           </div>
            <div class="col-lg-3 col-sm-6">
           <div class="counter big-counter text-center">
              <span class="timer theme-color" data-to="3237" data-speed="10000">3237</span>
              <label class="text-white">HAPPY CLIENTS</label>
            </div>
           </div>
     </div>
  </div>
</section>

 <!--=================================
 counter -->


  <!--=================================
 feature -->

<section class="custom-content-02 white-bg-bg page-section-ptb">
  <div class="container">
     <div class="row">
       <div class="col-lg-4 col-md-4 mb-60">
        <div class="feature-text left-icon">
            <div class="feature-icon">
            <span class="ti-layers-alt"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Many Style Available</h5>
            <p>Truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in.</p>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-4 mb-60">
        <div class="feature-text left-icon">
           <div class="feature-icon">
            <span class="ti-mouse"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Parallax Sections</h5>
            <p>For those of you who are serious about having more, doing more, giving more and being more, success is achievable.</p>
          </div>
        </div>
       </div>
        <div class="col-lg-4 col-md-4 mb-60">
         <div class="feature-text left-icon">
             <div class="feature-icon">
              <span class="ti-hand-open"></span>
            </div>
            <div class="feature-info">
              <h5 class="text-back">Unlimited layouts</h5>
              <p> The last thing before retiring was examination of the day. At the age of 79, he ascribed his health to temperance.</p>
            </div>
          </div>
      </div>
     </div>
         <div class="row">
         <div class="col-lg-4 col-md-4 xs-mb-40">
        <div class="feature-text left-icon">
            <div class="feature-icon">
            <span class="ti-desktop"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Perfect design</h5>
            <p>Franklin’s extraordinary success in life and politics can be attributed to his perseverance to overcome his personal.</p>
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-4 xs-mb-40 xs-mt-20">
        <div class="feature-text left-icon">
           <div class="feature-icon">
            <span class="ti-headphone "></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Fast Customer support</h5>
            <p>He other virtues practice in succession by Franklin were silence, order, resolution, frugality, industry, sincerity.</p>
          </div>
        </div>
       </div>
        <div class="col-lg-4 col-md-4 xs-mt-20">
         <div class="feature-text left-icon">
             <div class="feature-icon">
              <span class="ti-shield"></span>
            </div>
            <div class="feature-info">
              <h5 class="text-back">Powerful Performance</h5>
              <p>From eight till twelve he worked at his trade. From twelve to one he read or overlooked his accounts and dined.</p>
            </div>
          </div>
         </div>
       </div>
  </div>
</section>

 <!--=================================
 feature -->

  <!--=================================
 custom -->

<section class="custom-content-03 page-section-ptb pattern full-width" style="background: url(<?php get_template_directory_uri(); ?>/images/pattern/pattern-bg.png) repeat;">
  <div class="container">
     <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Webster has powerful options & tools, unlimited designs, responsive framework and amazing support. </h2>
        </div>
     </div>
  </div>
</section>

 <!--=================================
 custom -->

<!--=================================
 play-video -->

<section class="page-section-pt bg-overlay-theme-90 parallax" style="background-image: url(<?php get_template_directory_uri(); ?>/images/bg/17.jpg);">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-9">
        <div class="play-video-section text-center">
           <div class="play-video text-center">
             <a class="view-video popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <i class="fa fa-play"></i> </a>
           </div>
           <div class="content mt-40">
             <h2 class="text-white mb-20">We will help you to achieve your goals and to grow your business.</h2>
              <h5 class="text-white mb-50"><i>Let's make something great together</i></h5>
              <img class="img-fluid mx-auto" src="images/objects/mac-book.png" alt="">
           </div>
         </div>
       </div>
    </div>
 </div>
</section>

 <!--=================================
 play-video -->


  <!--=================================
 custom -->

<section class="custom-content-02 white-bg-bg page-section-ptb">
  <div class="container">
     <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-6 xs-mb-40">
        <div class="feature-text round theme-icon">
            <div class="feature-icon">
            <span class="ti-paint-bucket"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Unlimited Colors</h5>
            <p>You will begin to realize why this exercise is called the Dickens Pattern with reference to the.</p>
          </div>
        </div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-6 xs-mb-40">
        <div class="feature-text round theme-icon">
           <div class="feature-icon">
            <span class="ti-heart"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Blog Options </h5>
            <p> Have a think about something that you do that you are maybe not motivated to change about yourself.</p>
          </div>
        </div>
       </div>
        <div class="col-lg-3 col-md-3 col-sm-6 xs-mb-40">
         <div class="feature-text round theme-icon">
             <div class="feature-icon">
              <span class="ti-hand-open"></span>
            </div>
            <div class="feature-info">
              <h5 class="text-back">Unlimited layouts</h5>
              <p> Get yourself nice and relaxed and settled. Concentrate on your breathing, engage in the moment.</p>
            </div>
          </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="feature-text round theme-icon">
            <div class="feature-icon">
            <span class="ti-image"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Revolution Slider</h5>
            <p> Engage with the idea of really being there. Step Three: Imagine that a few more steps ahead there.</p>
          </div>
        </div>
       </div>
       </div>
  </div>
</section>

 <!--=================================
 custom -->

 <!--=================================
 custom -->

<section class=" page-section-ptb bg-overlay-black-70 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php get_template_directory_uri(); ?>/images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mt-100 mb-100">
        <h2 class="text-white fw-6">Webster is Truly lightweight HTML5 template on the market</h2>
        <p class="text-white mt-20">Lightweight and load super fast so you will never lose another customer</p>
        <div class="mt-30">
           <a class="button icon xs-mt-10" href="#">
             More Demo
            <i class="fa fa-hand-o-right"></i>
         </a>
          <a class="button icon white button-border xs-mt-10" target="_blank" href="#">
            View more
            <i class="fa fa-hand-o-right"></i>
         </a>
        </div>
      </div>
    </div>
  </div>
</section>

  <!--=================================
 custom -->

<!--=================================
 action -->

 <section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
        <a class="button button-border white" href="#">
          <span>Purchase Now</span>
          <i class="fa fa-download"></i>
       </a>
    </div>
  </div>
  </div>
</section>

<!--=================================
 action -->

<?php
get_footer();
