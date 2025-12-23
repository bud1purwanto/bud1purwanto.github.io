<!DOCTYPE html>
<html lang="en">
  <?php include "template/bootstrap.html" ?>

  <body>

<div id="colorlib-page">
		<?php $nav = 'blog'; include "template/nav.php" ?>

		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<?php $nav = 'blog'; include "template/header.php" ?>

			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-16">
	    				<div class="row">	

							<?php 	$post = 'post3.php';
								  	$image = 'Blog/post3.jpg';
								  	$title = 'New Journey'; ?>

							<div class="col-md-12">
				    			<div class="blog-entry ftco-animate d-md-flex">
									<a href=<?php echo $post; ?> class="img img-2" style="background-image: url(images/<?php echo $image; ?>);"></a>
									<div class="text text-2 p-4">
										<h3 class="mb-2"><a href=<?php echo $post; ?> > <?php echo $title; ?></a></h3>
										<div class="meta-wrap">
											<p class="meta">
											<span>9 September 2019</span>
											<span><a href=<?php echo $post; ?>><br>Memories</a></span>
											<span>0 Comment</span>
											</p>
										</div>
										<p class="mb-4">Bersekolah dan mencari ilmu itu adalah suatu tingkatan yang sangat berbeda dengan bekerja karena ... 
										</p>
										<p><a href=<?php echo $post; ?> class="btn-custom">Coming Soon <span class="ion-ios-arrow-forward"></span></a></p>
					            	</div>
								</div>
			    			</div>

							<?php 	$post = 'post2.php';
									$image = 'Blog/post2.jpg';
								  	$title = 'Mencari Jati Diri'; ?>

		    				<div class="col-md-12">
				    			<div class="blog-entry ftco-animate d-md-flex">
									<a href=<?php echo $post; ?> class="img img-2" style="background-image: url(images/<?php echo $image; ?>);"></a>
									<div class="text text-2 p-4">
										<h3 class="mb-2"><a href=<?php echo $post; ?> > <?php echo $title; ?></a></h3>
										<div class="meta-wrap">
											<p class="meta">
											<span>15 Mei 2019</span>
											<span><a href=<?php echo $post; ?>><br>Memories</a></span>
											<span>1 Comment</span>
					              			</p>
				              			</div>
										<p class="mb-4">Pertama kali merantau di Kota Orang? Tentu sangat menantang bagiku karena ... </p>
										<p><a href=<?php echo $post; ?> class="btn-custom">Coming Soon <span class="ion-ios-arrow-forward"></span></a></p>
									</div>
								</div>
			    			</div>
			    			
							<?php 	$post = 'post1.php';
								  	$image = 'Blog/post1.jpg';
								  	$title = 'Tidak Bisa DiLupakan'; ?>

			    			<div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
									<a href=<?php echo $post; ?> class="img img-2" style="background-image: url(images/<?php echo $image; ?>);"></a>
									<div class="text text-2 p-4">
										<h3 class="mb-2"><a href=<?php echo $post; ?> > <?php echo $title; ?></a></h3>
										<div class="meta-wrap">
											<p class="meta">
											<span>25 April 2015</span>
											<span><a href=<?php echo $post; ?>><br>Memories</a></span>
											<span>2 Comment</span>
				              				</p>
			              				</div>
										<p class="mb-4">Masa apa yang paling berkesan dan tidak dapat dilupakan? Ya menurutku adalah masa SMA, karena ... </p>
										<p><a href=<?php echo $post; ?> class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
									</div>
								</div>
			    			</div>
				        </div>
			    	</div>
    			<div class="col-lg-4 sidebar ftco-animate bg-light">	       
	    	</div>
	    </section>
	   
	<?php include "template/footer.php" ?>
</html>
