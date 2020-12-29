		<div class="bradcam_area breadcam_bg overlay2">
		</div>
		<!-- bradcam_area_end -->

		<!--================Blog Area =================-->
		<section class="blog_area single-post-area section-padding">
		   <div class="container">
		      <div class="row">
		         <div class="col-lg-10 posts-list">
		            <div class="single-post">
		               <h1><?= $berita['judul']; ?></h1>
		               <br>
		               <div class="feature-img">
		                  <img class="img-fluid" src="<?= base_url('upload/berita/' . $berita['foto']) ?>" alt="">
		               </div>
		               <div class="blog_details">

		                  <ul class="blog-info-link mt-3 mb-4">
		                     <li>"&nbsp;<?= $berita['Tanggal']; ?>&nbsp;"</li>
		                  </ul>
		                  <h5 class="text-justify">
		                     <?= $berita['konten']; ?>
		                  </h5>
		                  <br>
	                      <h5 class="text-right">Sumber : <a href="http://<?= $berita['sumber'];?>"> <?= $berita['sumber']; ?> </a></h5>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</section>
		<!--================ Blog Area end =================-->