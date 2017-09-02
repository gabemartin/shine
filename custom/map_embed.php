
	<section class="map"> 

		<?php $map_address_location = $location[0]['address']; ?>
		
		<?php $map_lat = $location[0]['lat']; ?>
		<?php $map_lng = $location[0]['lng']; ?>
		<?php //include( "custom/map_embed.php" ); ?>

		


        <style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 150%;
                height: 500px;
            }
        </style>
        
        <!-- 
            You need to include this script tag on any page that has a Google Map.

            The following script tag will work when opening this example locally on your computer.
            But if you use this on a localhost server or a live website you will need to include an API key. 
            Sign up for one here (it's free for small usage): 
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key

            After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
        -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkq8l33O0ZwgHhLVK7BckFHW2_NM-AAXI"></script>
        
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16, 
                    draggable: false,
                    gestureHandling: "none",
                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(<?php echo $map_lat; ?>, <?php echo $map_lng; ?>), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
 
            }
        </script>


		<div id="map"></div> 
		<div class="row">
			<div class="col1">
                <h3 class="map_text"><?php echo $map_text; ?></h3>
            </div>
            <div class="col2">
                <div class="map-bubble">
                    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/FLOW_LOGO.svg" alt="Logo" class="logo-img"></div>
                    <div class="address">
                        <?php echo $map_address; ?>
                    </div>
                    <div class="phone-number">
                        <?php echo $map_phone_number; ?>
                    </div>
                </div>
            </div>

		</div>
	</section>