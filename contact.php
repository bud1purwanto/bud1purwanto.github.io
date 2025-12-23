<!DOCTYPE html>
<html lang="en">
  <?php include "template/bootstrap.html" ?>

  <body>

	<div id="colorlib-page">
		<?php $nav = 'contact'; include "template/nav.php" ?>

		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<?php $nav = 'contact'; include "template/header.php" ?>

			<section class="ftco-section contact-section">
	      <div class="container">
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h3 font-weight-bold">Contact Information</h2>
	          </div>
	          <div class="w-100"></div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Address:</span> Pasuruan, East Java, Indonesia</p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Phone:</span> <br><a href="http://wa.me/+6285155050020">085155050020</a></p>
		          </div>
	          </div>
	          
	          <div class="col-md-5 d-flex">
	          	<div class="info bg-light p-4">
		            <p><div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="light" data-type="HORIZONTAL" data-vanity="bud1purwanto" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://id.linkedin.com/in/bud1purwanto?trk=profile-badge">	</a></div>
              </p>
		          </div>
	          </div>
	        </div>
	        <div class="row block-9">
	          <div class="col-md-6 d-flex">
	            <form action="#" class="bg-light p-5 contact-form">
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Name">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Email">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Subject">
	              </div>
	              <div class="form-group">
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          
	          </div>

	          <div class="col-md-6 d-flex">
	          	<div id="map" class="bg-light"></div>
	          </div>
	        </div>
	      </div>
	    </section>
	    
	<?php include "template/footer.php" ?>
</html>
