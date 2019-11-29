  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="register.html">Create an Account</a>
						</div>
					</div>
				</div>
				<!-- form login here -->
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" id="contactForm">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="Password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<label id="error" for="f-option2" style="color: red; display: none;"></label>
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" id="btnLogin" class="button button-login w-100">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
	<!--================ Start footer Area  =================-->  
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row section_gap">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title large_title">Tentang Kami</h4>
              <p>
                Menyediakan segala jenis <b>Kerupuk</b> Khas Daerah,
              </p>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">link cepat</h4>
              <ul class="list">
                <li><a href="<?php echo base_url('index.php/Welcome')?>">Shop</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/article_page')?>">Articles</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/contact_page')?>">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget instafeed">
              <h4 class="footer_title">Media Sosial</h4>
              <div class="ml-40">
                <p class="sm-head">
                  <span class="fab fa-instagram"></span>
                  @khas_ibu
                </p>
              </div>
              
              <!-- <ul class="list instafeed d-flex flex-wrap">
                <li>
                  <p class="sm-head">
                    <span class="fab fa-instagram"></span>
                    @khas_ibu
                  </p>
                </li>
              </ul> -->
            </div>
          </div>
          <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Kontak Kami</h4>
              <div class="ml-40">
                <p class="sm-head">
                  <span class="fa fa-location-arrow"></span>
                  Kantor
                </p>
                <p>Kp Palawija Rt.006/Rw.010 Desa Mekarsari Kecamatan Ciparay, 40381</p>
  
                <p class="sm-head">
                  <span class="fa fa-phone"></span>
                  WhatsApp
                </p>
                <p>
                  +62 857 2239 2735
                </p>
  
                <p class="sm-head">
                  <span class="fa fa-envelope"></span>
                  Email
                </p>
                <p>
                  khasIbu@gmail.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row d-flex">
          <p class="col-lg-12 footer-text text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" style="color: #ffeee9;" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <script src="<?php echo base_url('assets/aroma/vendors/jquery/jquery-3.2.1.min.js');?>"></script>

  <script src="<?php echo base_url('assets/aroma/vendors/bootstrap/bootstrap.bundle.min.js');?>"></script>

  <!-- <script src="<?//php echo base_url('assets/aroma/vendors/skrollr.min.js');?>"></script> -->

  <script src="<?php echo base_url('assets/aroma/vendors/owl-carousel/owl.carousel.min.js');?>"></script>

  <script src="<?php echo base_url('assets/aroma/vendors/nice-select/jquery.nice-select.min.js');?>"></script>

  <script src="<?php echo base_url('assets/aroma/vendors/nouislider/nouislider.min.js');?>"></script>
  
  <script src="<?php echo base_url('assets/aroma/vendors/jquery.ajaxchimp.min.js');?>"></script>

  <script src="<?php echo base_url('assets/aroma/vendors/mail-script.js');?>"></script>
  <!-- <script src="<?//php echo base_url('assets/aroma/js/main.js');?>"></script> -->
  <!-- custom js -->
  <script>
  	//login
  	$('#btnLogin').click(function(){
  		var user_name = $("#name").val();
		  var password = $("#password").val();
		  // Returns error message when submitted without req fields.

		  if(user_name==''||password=='')  
		  {
		  	$('#contactForm')[0].reset();
		  	$('#error').html('username or password null').fadeIn().delay(4000).fadeOut('slow');
		  }  
		  else  
		  {  
		  	var url = "<?php echo base_url('index.php/Auth/check_login');?>"; 
		  	// AJAX Code To Submit Form.  
		  	$.ajax({  
		  		type: "POST",
		  		url: url,
		  		data: {name: user_name, pwd: password},
		  		cache: false,  
		  		success: function(result){
		    		if(result!=0){
		      		// On success redirect.  
		    			window.location.replace(result);
		    		}else{
		    			$('#contactForm')[0].reset();
		      		$('#error').html('Failed Login, username or password wrong').fadeIn().delay(4000).fadeOut('slow');
		        }
					},
		      error: function(data){
		        alert('Could not add data');
		      }
		  	});  
		  }  
		  return false;
  	})
  </script>
</body>
</html>