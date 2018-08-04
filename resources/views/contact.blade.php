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

		 var marker = new google.maps.Marker ({
			 position:{lat:49.2827, lng:-123.1207},
			 map:map
		 });
	  }
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7f0iUwrpWtZuv30M5r7XhEFLm4l7txro&callback=initMap">
</script>


<div class="container-fluid contact-form">
	<h1 class="mb-2 text-center col-12">get in touch with me</h1>
	<h5 class="text-center col-12">send an email and I'll get back to you at rapid speed</h5>
	<p class="text-center email-address col-12"><a href="mailto:kristie.wong90@gmail.com?Subject=Inquiry" target="_top>"><i class="fa fa-envelope fa-lg"></i> info@kristiewong.ca</a></p>
	<br>



</div>
@endsection
