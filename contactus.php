<?php include('navbar.php'); ?>

<section class = "contactus-header">
	<div class = "contactus-img">
		<img src = "images/contactus/header.jpg" alt = "CONTACT US HEADER">
	</div>

	<center>
		<div class = "contactus-title">
			<h1> OUR PASSION IS INNOVATION </h1>
		</div>
	</center>
</section>

<section class = "contactus-fgtpmap">
	<div class = "container-fluid" id = "contactus-section">
		<div class = "row">
			<div class = "col-md-6">
				<div class = "container-fluid">
					<div class = "fgtp-map">
						<a href = "https://g.page/FGCTechnopark?share" target = "_blank"><img src = "images/contactus/fgtp_map.jpg" alt = "FGTP Map"></a>
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.196257082426!2d121.01757141483674!3d14.300026789994458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d7cc09f3fc3d%3A0x346cf1e0e630b861!2sFirst%20Global%20Technopark!5e0!3m2!1sen!2sph!4v1643158618250!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
					</div>
				</div>
			</div>

			<div class = "col-md-6">
				<div class = "contactus-info">
					<div class = "container-fluid">
						<div class = "contactus-phone">
							<h4><i class = "fas fa-phone"></i> PHONE </h4>

							<p> Phone: 02 8812 3202 </p>
							<p> Mobile: 0917 166 3487 / 0998 572 3487 </p>
							<p> Fax: 02 844 3705 </p>
						</div>

						<div class = "contactus-email">
							<h4><i class = "fas fa-envelope-open-text"></i> EMAIL </h4>

							<p> mktg@firstglobaltechnopark.com </p>
						</div>

						<div class = "contactus-address">
							<h4><i class = "fas fa-map-marker-alt"></i> ADDRESS </h4>

							<p>
								9248 Governor's Drive <br>
								Brgy. Mabuhay <br>
								Carmona, Cavite
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<center>
	<section class = "contactus-inquiries">
		<div class = "inquiries-header">
			<h2> FOR INQUIRIES </h2>
		</div>

		<div class = "container-fluid" id = "contactus-inquiries">
			<form action = "functions/send_mail.php" method = "POST">
				<input type = "text" name = "name" class = "form-control" placeholder = "NAME">

				<input type = "text" name = "email" class = "form-control" placeholder = "EMAIL">

				<input type = "text" name = "subject" class = "form-control" placeholder = "SUBJECT">

				<textarea name = "message" id = "message" cols="30" rows="10" class = "form-control" placeholder = "MESSAGE"></textarea>

				<button type = "submit" id = "submit-btn" class = "btn btn-default"> - SUBMIT - </button>
			</form>
		</div>
	</section>
</center>

<center>
	<section class = "contactus-socials">
		<div class = "socials-header">
			<h2> OUR SOCIAL MEDIA </h2>
		</div>

		<div class = "container-fluid" id = "socials-icons">
			<div class = "fgtp-facebook">
				<a href = "https://www.facebook.com/FGCTechnopark" target = "_blank"><i class = "fab fa-facebook-f"></i></a>
			</div>

			<div class = "fgtp-instagram">
				<a href = "https://www.instagram.com/accounts/login/?next=/firstglobaltechnopark/" target = "_blank"><i class = "fab fa-instagram"></i></a>
			</div>

			<div class = "fgtp-youtube">
				<a href = "https://www.youtube.com/channel/UCn5GgwpU5aMxLFPTTtoiveg" target = "_blank"><i class = "fab fa-youtube"></i></a>
			</div>
		</div>
	</section>
</center>

<?php include('footer.php'); ?>