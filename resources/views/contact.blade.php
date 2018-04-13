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


<div class="container">
	<h1 class="mb-2 text-center">contact me</h1>

	@if(session('message'))
	<div class='alert alert-success'>
		{{ session('message') }}
	</div>
	@endif

	<div class="col-12 col-md-6">
		<form class="form-horizontal" method="POST" action="/contact">
			{{ csrf_field() }}
			<div class="form-group">
			<label for="Name">Name: </label>
			<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
		</div>

		<div class="form-group">
			<label for="email">Email: </label>
			<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
		</div>

		<div class="form-group">
			<label for="message">message: </label>
			<textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
		</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary" value="Send">Send</button>
			</div>
		</form>
	</div>
 </div> <!-- /container -->
@endsection
