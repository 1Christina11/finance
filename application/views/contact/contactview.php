      <div class="banner-area" id="banner-area" style="background-image:url(<?php echo base_url()?>/assets/images/banner/banner2.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact Us</h1>
                     <ol class="breadcrumb">
                        <li><a href="https://www.gcsfinancialcorp.com/">Home</a></li>
                        <li>contact</li>
                     </ol>
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->

      <section class="main-container" id="main-container">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Send Us Message</span>Contact Us</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Call Us</h3>
                            <p><a href="tel:<?php echo $contact_us->phone1?>"><?php echo $contact_us->phone1?></a></p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Call Us</h3>
                            <p><a href="tel:<?php echo $contact_us->phone2?>"><?php echo $contact_us->phone2?></a></p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Mail Us</h3>
                           <p><a href="mailto:<?php echo $contact_us->e_mail?>" class="__cf_email__"><?php echo $contact_us->e_mail?></a></p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
            </div>
            <!-- Row End-->
         </div>
         <!-- container end-->
         <div class="gap-60"></div>
         <div class="ts-form" id="ts-form">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <form class="contact-form" action="<?php echo site_url()?>/Contact_us/send_mail" method="post">
                        <div class="error-container"></div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input required class="form-control form-name" id="s_name" name="s_name" placeholder="Full Name" type="text">
                              </div>
                           </div>
							<div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-name" id="s_phone" name="s_phone" placeholder="Phone Number" type="phone" required>
                              </div>
                           </div>
                           <!-- Col end-->
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-website" id="url" name="url" placeholder="https://example.com/" type="url">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-email" id="e_mail" name="e_mail" placeholder="Email" type="email" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <textarea required class="form-control form-message required-field" id="message" name="message" placeholder="Comments" rows="8"></textarea>
                              </div>
                           </div>
                           <!-- Col 12 end-->
                        </div>
                        <!-- Form row end-->
                        <div class="text-right">
                           <button class="btn btn-primary tw-mt-30" type="submit">Contact US</button>
                        </div>
                     </form>
                     <!-- Form end-->
                  </div>
                  <div class="col-lg-6">
                     <div class="map" id="">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7245785.476839735!2d-88.2998557308653!3d27.532043500800373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C%20USA!5e0!3m2!1sen!2seg!4v1680727404812!5m2!1sen!2seg" width="535" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </section>