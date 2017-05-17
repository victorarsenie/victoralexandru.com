<!DOCTYPE html>
<html>
	<head>	
		<style type="text/css" media="screen">
			body, html {
				margin: 0;
				padding: 0;
				height: 100%;
				width: 100%;
			}
			table, th, td {
				border: 1px solid black;
			}
			.distance, .array {
				padding:50px;
			}
			#number-array {
				width:300px;
			}
			#array-output {
				
			}
		</style>
	</head>
	<body>
		<div class="array">
			<h1>Flatten an array of integers</h1>

			<div id="array-output">
			
			<?php
			//Function to flatten an array
			function flatten($array) {
					if (!is_array($array)) {
						// nothing to do if it's not an array
						return array($array);
					}

					$result = array();
					foreach ($array as $value) {
						// explode the sub-array, and add the parts
						$result = array_merge($result, flatten($value));
					}

					return $result;
				}
				//The array to be flattened
				$number_array = [[1,2,[3]],4,[5,6,7,[8,9]]];
				//The array to be populated
				$output_array = [];
				foreach (flatten($number_array) as $value) {
					array_push($output_array, $value);
				}
				echo "Array to flatten: [[1,2,[3]],4,[5,6,7,[8,9]]]<br><br>";
				echo "Flattened array: ";
				echo '<pre>'; print_r($output_array); echo '</pre>';
			?>
			
			</div>
		</div>
		
		<div class="distance">
			<h1>List of all clients in a 40 miles radius from the office</h1>
			<!-- The table where the customer list is appended -->
			<table id="distanceTable">
				<tr>
					<th>ID</th>
					<th>Name</th> 
					<th>Distance</th>
				</tr>
				<!-- Each row containing the customer details will be appended here -->
			</table>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script>
			
			//Read the JSON file and print the users within 40 miles
			$.getJSON( "../assets/files/customer_data.json", function( data ) {
				var items = [];
				//loop through each of the customer objects from the json file and get the details
				$.each( data, function(key) {
					var latitude = data[key]['location']['lat'];
					var longitude = data[key]['location']['lon'];
					var name = data[key]['name'];
					var distance = distanceInMiles(52.951458, -1.142332, latitude, longitude);
					distance = distance.toFixed(1);
					//check if the distance between the office and customers is less than 40 miles
					if (distance <= 40) {
						$('#distanceTable').append("<tr><td>"+key+"</td><td>"+name+"</td><td>"+distance+"mi</td></tr>");
					}
				});
			});
			//Convert degrees to radians
			function degreesToRadians(degrees) {
				return degrees * Math.PI / 180;
			}
			//Calculate the distance between the office and each customer
			function distanceInMiles(lat1, lon1, lat2, lon2) {
				var earthRadiusMiles = 3959;

				var dLat = degreesToRadians(lat2-lat1);
				var dLon = degreesToRadians(lon2-lon1);

				lat1 = degreesToRadians(lat1);
				lat2 = degreesToRadians(lat2);

				var a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
				var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
				return earthRadiusMiles * c;
			}

		</script>
	</body>