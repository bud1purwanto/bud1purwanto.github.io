<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html"><span class="img" style="background-image: url(images/budi.jpg);"></span>Budi Purwanto</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                    <?php if ($nav == 'index')
							{ ?> <li class="colorlib-active"><a href="index.php">Home</a></li> <?php
							} else { ?> <li><a href="index.php">Home</a></li>  <?php } ?>

					<?php if ($nav == 'about')
							{ ?> <li class="colorlib-active"><a href="about.php">About Me</a></li> <?php
							} else { ?> <li><a href="about.php">About Me</a></li>  <?php } ?>

				    <?php if ($nav == 'cv')
							{ ?> <li class="colorlib-active"><a href="cv.php">Curriculum Vitae</a></li> <?php
							} else { ?> <li><a href="cv.php">Curriculum Vitae</a></li>  <?php } ?>

				    <?php if ($nav == 'blog')
							{ ?> <li class="colorlib-active"><a href="blog.php">Blog</a></li> <?php
							} else { ?> <li><a href="blog.php">Blog</a></li>  <?php } ?>

					<?php if ($nav == 'contact')
							{ ?> <li class="colorlib-active"><a href="contact.php">Contact</a></li> <?php
							} else { ?> <li><a href="contact.php">Contact</a></li>  <?php } ?>
				
				</ul>
			</nav>