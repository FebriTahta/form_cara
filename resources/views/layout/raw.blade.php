<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registrasi acara</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/opensans-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    

    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}

	<style>
		.responsive {
			width: 100%;
			height: auto;
		}
	</style>
</head>
<body>
	<div class="page-content">
		<!-- <div class="wizard-heading">Form Booking Wizard</div> -->
		<div class="wizard-v6-content" style="margin-top: 50px;">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" method="post">@csrf
		        	<div id="form-total">
			            <section style="padding: 5%;">
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Mengetuk Pintu Langit</h3>
			                		<!-- <span>_</span> -->
			                	</div>
		                		<div class="responsive">
		                			<img class="responsive" src="images/y.jpg" alt="wizard_v6">
		                		</div>
                                <hr>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="room" class="special-label-1">Nama Lengkap </label>
										<input type="text" name="name" id="name" class="form-control" style="text-transform: capitalize">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label for="day" class="special-label-1">Email</label>
										<input type="email" name="email" class="form-control" id="email" placeholder="___@__.com">
									</div>
									<div class="form-holder">
										<label for="time" class="special-label-1">Phone </label>
										<input type="number" name="telp" class="form-control" id="telp" placeholder="">
									</div>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
	<!-- <script src="js/jquery.steps.js"></script> -->
	<!-- <script src="js/jquery-ui.min.js"></script> -->
	<!-- <script src="js/main.js"></script> -->
</body>
</html>