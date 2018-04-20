@extends('layout')


@section('content')

<div id="map"></div>

<script>
		function initMap() {
		// Map options
		 var options = {
			 zoom: 12,
			 center: {lat:51.0486, lng:-114.0708}
		 }
		 // Map
		 var map = new google.maps.Map(document.getElementById('map'), options);

		 // Add marker
		 var marker = new google.maps.Marker ({
			 position:{lat:51.0486, lng:-114.0708},
			 map:map
		 });
	  }
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7f0iUwrpWtZuv30M5r7XhEFLm4l7txro&callback=initMap">
</script>


<div class="container-fluid contact-form">
	<h1 class="mb-2 text-center col-12">get in touch with me</h1>
	<h5 class="text-center col-12">fill out the form and I'll get back to you at rapid speed</h5>
	<h6 class="text-center col-12">if you aren't feeling the fillable, email's good too!</h6>
	<p class="text-center email-address col-12"><a href="mailto:kristie.wong90@gmail.com?Subject=Inquiry" target="_top>"><i class="fa fa-envelope fa-lg"></i> info@krisitewong.ca</a></p>
	<br>

	@if(session('message'))
	<div class='alert alert-success'>
		{{ session('message') }}
	</div>
	@endif

	<div class="col-12 col-md-12">
		<form class="form-horizontal" method="POST" action="/contact">
			{{ csrf_field() }}
			<div class="form-group">
			<label for="Name">name: </label>
			<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
		</div>

		<div class="form-group">
			<label for="email">email: </label>
			<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
		</div>

		<div class="form-group">
			<label for="message">message: </label>
			<textarea type="text" rows="4" cols="50" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
		</div>

			<div class="form-group contact-me">
				<a class="btn submit-btn"><button type="submit" value="Send">send message</button></a>
			</div>
		</form>
	</div>
 </div> <!-- /container -->
@endsection
