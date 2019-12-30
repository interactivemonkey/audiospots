<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://estudiodevozes.com.br/
 *
 * @package Estudio_de_Vozes
 */

?>

	<!--=================================
 footer -->

<footer id="footer-fixed" class="footer black-bg">
 <div class="page-section-pt">
 <div class="container">
  <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
      <div class="footer-logo">
        <img id="logo-footer" class="mb-20" src="images/logo.png" alt="">
        <p class="pb-10"> Webster is the most enticing, creative, modern and multipurpose Premium HTML5 Template suitable for any business or corporate websites. Build whatever you like with the Webster. It has endless possibilities for creating stunning websites no matter what type of business is!</p>
      </div>
       <div class="social-icons color-hover">
         <ul>
          <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
          <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li>
         </ul>
       </div>
  </div>
      <div class="col-lg-2 col-md-6 col-sm-6 sm-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6 xs-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
        <ul>
          <li><a href="#">Create Account</a></li>
          <li><a href="#">Company Philosophy</a></li>
          <li><a href="#">Corporate Culture</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Client Management</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
    <ul class="addresss-info">
        <li><i class="fa fa-map-marker"></i> <p>Address: 17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p> </li>
        <li><i class="fa fa-phone"></i> <a href="tel:7042791249"> <span>+(704) 279-1249 </span> </a> </li>
        <li><i class="fa fa-envelope-o"></i>Email: letstalk@webster.com</li>
      </ul>
    </div>
   </div>
     <div class="footer-widget mt-20">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#">
        <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf('<a href="http://estudiodevozes.com.br">Estudio de Vozes</a>' );
				?></a> Todos direitos reservados </p>
      </div>
     </div>
    </div>
   </div>
  </div>
</footer>

<!--=================================
 footer -->

</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>


<?php wp_footer(); ?>

</body>
</html>
