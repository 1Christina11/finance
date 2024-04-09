      <!-- Footer start-->
      <footer class="footer" id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="footer-top-bg row">
                 <div class="col-lg-4 footer-box"><i class="icon icon-phone3"></i>
                     <div class="footer-box-content">
                        <h3>Call Us</h3>
                        <p><a href="tel:<?php echo $contact_us->phone1?>"><?php echo $contact_us->phone1?></a></p>
                     </div>
                  </div>
                  <!-- Box 1 end-->
                  <div class="col-lg-4 footer-box"><i class="icon icon-phone3"></i>
                     <div class="footer-box-content">
                        <h3>Call Us</h3>
                        <p><a href="tel:<?php echo $contact_us->phone2?>"><?php echo $contact_us->phone2?></a></p>
                     </div>
                  </div>
                  <!-- Box 2 end-->
                  <div class="col-lg-4 footer-box"><i class="icon icon-envelope"></i>
                     <div class="footer-box-content">
                        <h3>Mail Us</h3>
                        <p><a href="mailto:<?php echo $contact_us->e_mail?>" class="__cf_email__"><?php echo $contact_us->e_mail?></a></p>
                     </div>
                  </div>
                  <!-- Box 3 end-->
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Footer top end-->
		  <div class="footer-main bg-overlay">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 footer-widget footer-about">
                     <div class="footer-logo">
                        <img width="200px" height="200px" src="<?php echo base_url()?>assets/images/GCS Logo-01.png" alt="logo">
                     </div>
                     <p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p>
                     <div class="footer-social">
                        <ul>
                           <li>
                           <a title="Facebook" href="<?php echo $contact_us->facebook_link?>">
                              <span class="social-icon"><i class="fa fa-facebook"></i></span>
                           </a>
                           <a title="Twitter" href="<?php echo $contact_us->twitter_link?>">
                              <span class="social-icon"><i class="fa fa-twitter"></i></span>
                           </a>
                           <a title="Linkdin" href="<?php echo $contact_us->linkedin_link?>">
                              <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                           </a>
                           <a title="instgram" href="<?php echo $contact_us->instgram_link?>">
                              <span class="social-icon"><i class="fa fa-instagram"></i></span>
                           </a>
                           <a title="pinterest" href="<?php echo $contact_us->pinterest_link?>">
                              <span class="social-icon"><i class="fa fa-pinterest"></i></span>
                           </a>
                        </li>
                        </ul>
                     </div>
                     <!-- Footer social end-->
                  </div>
                  <!-- About us end-->
                  <div class="col-lg-4 col-md-12 footer-widget">
                     <h3 class="widget-title">Useful Links</h3>
                     <ul class="list-dash">
                        <li><a href="<?php echo site_url('About_us/index')?>">About Us</a></li>
                        <li><a href="">consultation</a></li>
                        <li><a href="<?php echo site_url('Loan_solution/loan_options')?>">Loan Options</a></li>
                        <li><a href="<?php echo site_url('Blog')?>">Our Blog</a></li>
                        <li><a href="<?php echo site_url('Contact_us/index')?>">Contact Us</a></li>
                        <li><a href="">Why need a consultant?</a></li>
<!--
                        <li><a href="<?php echo site_url('We_serve/index')?>">Our Services</a></li>
                        <li><a href="<?php echo site_url('Loan_solution/index')?>">Projects</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="<?php echo site_url('Blog/index')?>">Our Blog</a></li>
                        <li><a href="#">Why Need Agent?</a></li>
                        <li><a href="#">Investments</a></li>
                        <li><a href="#">Consultation</a></li>
                        <li><a href="<?php echo site_url('Contact_us/index')?>">Contact Us</a></li>
-->
                     </ul>
                  </div>
                  <div class="col-lg-4 col-md-12W footer-widget">
                     <h3 class="widget-title">Subscribe</h3>
                     <div class="newsletter-introtext">Don’t miss to subscribe to our new feeds, kindly fill the form below.</div>
                     <form class="newsletter-form" id="newsletter-form" action="#" method="post">
                        <div class="form-group">
                           <input class="form-control form-control-lg" id="newsletter-form-email" type="email" name="email" placeholder="Email Address"
                              autocomplete="off">
                           <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Footer Main-->
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="copyright-info"><span>Copyright © 2023 www.gcsfinancialcorp.com. All Rights Reserved.</span></div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="footer-menu">
                        <ul class="nav unstyled">
                           <li><a href="<?php echo site_url('About_us')?>">About Us</a></li>
                           <li><a href="<?php echo site_url('Privacy_policy')?>">Privacy Policy</a></li>
                           <li><a href="#">services</a></li>
                           <li><a href="<?php echo site_url('We_serve/industries')?>">Industries</a></li>
                           <li><a href="<?php echo site_url('Contact_us')?>">Contact</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- Row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Copyright end-->
      </footer>
      <!-- Footer end-->

      <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
         <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
            <!-- icon end-->
         </button>
         <!-- button end-->
      </div>
      <!-- End Back to Top-->

      <!--
      Javascript Files
      ==================================================
      -->
      <!-- initialize jQuery Library-->
      <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
      <!-- Popper-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
      <!-- Bootstrap jQuery-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
      <!-- Owl Carousel-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
      <!-- Counter-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
      <!-- Waypoints-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
      <!-- Color box-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.colorbox.js"></script>
      <!-- Smoothscroll-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/smoothscroll.js"></script>
      <!-- Google Map API Key-->
      <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
      <!-- Google Map Plugin-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/gmap3.js"></script>
      <!-- For Chart-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
      <script type="text/javascript" src="js/morris.js"></script>
      <script type="text/javascript">
         Morris.Area({
            element: 'graph',
            behaveLikeLine: true,
            lineColors: ['#e36217', '#2154cf', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed'],
            data: [{
                  x: '2012',
                  y: 9,
                  z: 7
               },
               {
                  x: '2013',
                  y: 6,
                  z: 8
               },
               {
                  x: '2014',
                  y: 6,
                  z: 5
               },
               {
                  x: '2015',
                  y: 8,
                  z: 10
               }
            ],
            xkey: 'x',
            ykeys: ['y', 'z'],
            labels: ['Y', 'Z']
         });
      </script>
      <!-- Template custom-->
      <!-- Template custom-->
      <script type="text/javascript" src="<?php echo base_url()?>assets/js/custom.js"></script>
   </div>
   <!--Body Inner end-->
</body>

</html>