<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Witcher</title>
	<link rel="icon" href="images/icon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/locations_style.css">
	<link rel="stylesheet" type="text/css" href="css/nav_style.css">
	<script type="text/javascript" src="js/nav_script.js" defer></script>
	<script type="text/javascript" src="js/locations_script.js" defer></script>
</head>
<body usemap="#map">
	<?php include_once 'nav.html'; ?>

	<div class="map-wrapper">
		<img class="nav-toggle-down" src="images/locations/nav_toggle_down.png" onclick="locationsNavDown()">
		<img class="nav-toggle-up" src="images/locations/nav_toggle_up.png" onclick="locationsNavUp()">
		<svg class="map-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080">
			<image id="map-img" width="1920" height="1080" xlink:href="images/locations/interactive_map.png"></image>
			<a xlink:href="#">
				<rect x="794" y="834" fill="#fff" opacity="0" width="256" height="192"></rect>
			</a>
			<a xlink:href="#">
				<rect x="770" y="40" fill="#fff" opacity="0" width="137" height="109"></rect>
			</a>
			<a xlink:href="#">
				<rect x="1165" y="12" fill="#fff" opacity="0" width="100" height="100"></rect>
			</a>
			<a xlink:href="#">
				<rect x="144" y="622" fill="#fff" opacity="0" width="112" height="100"></rect>
			</a>
			<a xlink:href="#">
				<rect x="247" y="510" fill="#fff" opacity="0" width="100" height="85"></rect>
			</a>
			<a xlink:href="#">
				<rect x="450" y="463" fill="#fff" opacity="0" width="121" height="108"></rect>
			</a>
			<a xlink:href="#">
				<rect x="445" y="638" fill="#fff" opacity="0" width="128" height="114"></rect>
			</a>
			<a xlink:href="#">
				<rect x="1080" y="306" fill="#fff" opacity="0" width="126" height="111"></rect>
			</a>
			<a xlink:href="#">
				<rect x="896" y="546" fill="#fff" opacity="0" width="132" height="119"></rect>
			</a>
			<a xlink:href="#">
				<rect x="1227" y="711" fill="#fff" opacity="0" width="100" height="88"></rect>
			</a>
			<a xlink:href="#">
				<rect x="1513" y="231" fill="#fff" opacity="0" width="134" height="122"></rect>
			</a>
			<a xlink:href="#">
				<rect x="1508" y="487" fill="#fff" opacity="0" width="136" height="123"></rect>
			</a>
		</svg>
	</div>

	<div class="card"></div>
</body>
</html>