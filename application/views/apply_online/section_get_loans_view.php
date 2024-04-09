      <div class="banner-area" id="banner-area" style="background-image:url(
	<?php echo base_url()?>assets/images/banner/banner5.jpg);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col">
              <div class="banner-heading">
                <h1 class="banner-title">Request</h1>
                <ol class="breadcrumb">
                  <li>
                    <a href="https://gcsfinancialcorp.com/">Home</a>
                  </li>
                  <li> Request a Quote</li>
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
      <section class="quote-area bg-overlay overlay-color" id="quote-ZZZZZZZZarea">
        <form action="
		<?php echo site_url('Apply_online/send_mail')?>" method="post">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 qutoe-form-inner-left">
                <div class="quote_form">
                  <h2 class="column-title title-white">
                    <span>We are always ready</span> Request a Quote
                  </h2>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input class="form-control" id="s_name" name="s_name" placeholder="Full Name" required="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input class="form-control" id="phone" name="phone" placeholder="Phone Number" required="">
                      </div>
                    </div>
                  </div>
                  <!-- Row 1 end-->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="form-control" id="e_mail" name="e_mail" type="email" placeholder="E_mail Address" required="">
                      </div>
                    </div>
                  </div>
                  <!-- Row end-->
                  <style>
                    select option {
                      margin: 40px;
                      background: rgba(0, 0, 0, 0.3);
                      color: #fff;
                      text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                    }
                  </style>
                  <div class="row">
                    <div class="col-lg-6">
                      <select class="form-control" aria-label="Default select example" name="credit_score">
                        <option selected>credit_score</option>
                        <option value="Excellent (700 >)">Excellent (700 >)</option>
                        <option value="Good (650-700)">Good (650-700)</option>
                        <option value="Fair (600-650)">Fair (600-650)</option>
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <select class="form-control" aria-label="Default select example" name="time_in_business">
                        <option selected>time_in_business</option>
                        <option value="3+ years">3+ years</option>
                        <option value="2-3 years">2-3 years</option>
                        <option value="6-12 months">6-12 months</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input class="form-control" id="monthly_revenue" name="monthly_revenue" type="monthly_revenue" placeholder="monthly_revenue" required="">
                      </div>
                    </div>
                  </div>
                  <br>
                  <!-- Row end-->
                  <div class="form-group text-right mb-0">
                    <input class="button btn btn-primary" type="submit" value="submit">
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
		  </form>
      </section>