<?php

// Geolocation detection with JavaScript, HTML5 and PHP
// Written by J Harvey
$title = 'GEO-PHP';
$version = '1.0.1';

?>
<html>
	<head>
		<title><?php echo $title .' '. $version ?></title>
		<style>
		  *{
		  font-family: Verdana;
		  font-size: 1.0em;
		  }
			form {
			text-align: center; 
			margin-left: auto; 
			margin-right: auto; 
			width: 80%; 
			height: 90px; 
			border:2px solid #f5f5f5; 
			border-radius:4px; 
			background: #eeeeee;
			}
			
			form p:last-child{
			margin-bottom: 15px;
			}
			
			#results{
			margin-left: auto; 
			margin-right: auto; 
			overflow: auto; 
			width: 80%; 
			height: 450px; 
			border:2px solid #f5f5f5; 
			border-radius:4px; 
			background: #fff;
			}
			
			#results h2{
			text-align: center;
			}
			
			#geo{
			width: 40%;
			float: left;
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			}
			
			#nearby{
			width: 40%;
			float: right;
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			}
			
			#city_change{
			width: 80%;
			font-size: 0.825em;
			}
		</style>
		
		
	</head>
</html>
<form method="post" style="">
<h2>PHP-Geo</h2>
<p>PHP-Geo uses the GoogleMaps Api and the GeoPlugin API to return to you your location, map and Nearby Citites.</p>

</form>


<div id="results">
<h2>Getting your Location</h2>
<div id="geo"></div>

<div id="nearby">
	<select id="city_change">
		
	</select>

</div>
</div>
<script src="geo/geo.js" type="text/javascript"></script>
<script src="geo/nearby.js" type="text/javascript"></script>