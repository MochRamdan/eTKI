
	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Contact Us</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

	<!-- ================ contact section start ================= -->
  <section class="section-margin--small">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 420px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Ciparay, Bandung</h3>
              <p>Palawija Rt.006/Rw.010 Desa Mekarsari</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:+6285722392735">+62 857 2239 2735</a></h3>
              <p>Every Day and Every Time</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:khasIbu@gmail.com">khasIbu@gmail.com</a></h3>
              <p>Send Your Message</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <form role="form" class="form-contact contact_form" id="contactForm">
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <label style="display: none; color: red;" class="control-label" id="nameError"for="inputError">*Wajib diisi</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                </div>

                <div class="form-group">
                  <label style="display: none; color: red;" class="control-label" id="emailError" for="inputError">*Wajib diisi</label>
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm" id="btnMessage">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->