<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8"/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
			integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>

	<!-- LINK YOUR CSS FILES DOWN HERE -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
			  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
			  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
			  crossorigin="anonymous"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
			  crossorigin="anonymous"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
	<!--title-->
	<title>Contact Form </title>



</head>
<body>
<!--
<form id="contactForm" action="../php/index.php" method="post">
	<div>
	<label rel="name" for="name">Name: </label>
	<input type="text" id="name"/>
	</div>
	<div>
		<label rel="email" for="email">Email: </label>
	<input type="text" id="email"/>
	</div>
	<div>
		<label rel="subject" for="subject">Subject: </label>
	<input type="text" id="subject"/>
	</div>
	<div>
		<label rel="message" for="message">Message: </label>
	<textarea id="message"></textarea>
	</div>
	<div>
		<button type="submit">Submit Contact Form</button>
	</div>
</form>-->
<!--
Begin Sample Contact Form

Create your own contact form.
Do not copy and paste this one.
-->
<div class="col-6">
	<form id="johns-form" name="johns-form" action="../php/" method="post">
		<div class="form-group">
			<label for="name">Name <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="subject" name="subject"
						 placeholder="Subject">
			</div>
		</div>
		<div class="form-group">
			<label for="message">Message <span class="text-danger">*</span></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"></span>
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<textarea class="form-control" rows="5" id="message" name="message"
							 placeholder="(2000 characters max)"></textarea>
			</div>
		</div>

		<!-- reCAPTCHA -->
		<div class="g-recaptcha" data-sitekey="6LewKsIUAAAAAEurxqpHO3Cyt0nDVEZXG3wwV4Sx"></div>

		<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
		<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
	</form>
</div>
<!--empty area for form error/success output-->
<div class="row">
	<div class="col-xs-12">
		<div id="output-area"></div>
	</div>
</div>


</body>
</html>
