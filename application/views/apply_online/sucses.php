    <style>
      sbody {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }

      sh1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
      }

      sp {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
      }

      si {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
      }

      .scard {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <sbody>
      <div class="banner-area" id="banner-area" style="background-image:url(
		<?php echo base_url()?>assets/images/banner/banner5.jpg);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col">
              <div class="banner-heading">
                <h1 class="banner-title">Email Success ✓</h1>
              </div>
            </div>
            <!-- Col end-->
          </div>
          <!-- Row end-->
        </div>
        <!-- Container end-->
      </div>
      <!-- Banner area end-->
      <form action="
		<?php echo site_url('Apply_online/request')?>" method="post">
        <!-- Banner area end-->
        <section class="quote-area bg-overlay overlay-color" id="quote-ZZZZZZZZarea">
          <form action="
				<?php echo site_url('Apply_online/send_mail')?>" method="post">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 qutoe-form-inner-left">
                  <div class="scard">
                    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                      <si class="checkmark">✓</si>
                    </div>
                    <sh1>Success</sh1>
                    <p>you r email is sent;</p>
                    <div class="form-group text-center mb-0">
                      <input class="button btn btn-success" type="submit" value="Done">
                    </div>
                  </div>
                  <!-- Quote form end-->
                </div>
                <!-- Col end-->
                <!-- Col end-->
              </div>
              <!-- Content row end-->
            </div>
            <!-- Container end-->
        </section>
        </div>
    </sbody>
    </html>