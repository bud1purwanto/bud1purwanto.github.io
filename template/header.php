<?php 

$nav_name = 'Default';
$title_name = 'Default';

if($nav == 'cv'){
    $nav_name = 'CV';
    $title_name = 'My Curriculum Vitae';
}
elseif($nav == 'blog'){    
    $nav_name = 'Blog';
    $title_name = 'Read My Blog';
}
elseif($nav == 'contact'){    
    $nav_name = 'Contact';
    $title_name = 'Where You Can Find Me';
}

?>

<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
	        <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span><?php echo $nav_name ?></span></p>
	            <h1 class="bread"><?php echo $title_name ?></h1>

                <?php if($nav == 'cv') { ?>
                    <nobr><a href="images/cvdownload.pdf"><input href="" type="submit" value="Download CV" class="mt-2 btn btn-white submit"></a>
                <?php } ?>
	        </div>
	    </div>
	</div>
</section>