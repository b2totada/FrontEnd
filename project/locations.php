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
			<defs>
				<filter id="trans-shadow-big">
					<feColorMatrix type="matrix" values="1 0 0 0 0 
														0 1 0 0 0 
														0 0 1 0 0 
														0 0 0 100 0"
														result="boostedInput"/>
														
					<feGaussianBlur stdDeviation="15 15"/>
					<feComposite operator="out" in2="boostedInput"/>
				</filter>
				<filter id="trans-shadow-med">
					<feColorMatrix type="matrix" values="1 0 0 0 0 
														0 1 0 0 0 
														0 0 1 0 0 
														0 0 0 100 0"
														result="boostedInput"/>
														
					<feGaussianBlur stdDeviation="10 10"/>
					<feComposite operator="out" in2="boostedInput"/>
				</filter>
				<filter id="trans-shadow">
					<feColorMatrix type="matrix" values="1 0 0 0 0 
														0 1 0 0 0 
														0 0 1 0 0 
														0 0 0 100 0"
														result="boostedInput"/>
														
					<feGaussianBlur stdDeviation="5 5"/>
					<feComposite operator="out" in2="boostedInput"/>
				</filter>
			</defs>
			<image id="map-img" width="1920" height="1080" xlink:href="images/locations/interactive_map.png"></image>
			<a xlink:href="#">
				<polygon class="poly-big" onclick="showCard('.card-nilfgaard')" points="793,825 793,950 799,978 818,998 847,1010 860,1017 889,1030 921,1046 953,1030 982,1017 1014,1004 1039,982 1049,953 1049,828" fill="#0ff" fill-opacity="0.01" opacity="1" width="256" height="192"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly" onclick="showCard('.card-lyria')" points="1216,709 1219,741 1225,773 1241,793 1257,805 1280,809 1305,796 1325,777 1331,754 1334,725 1334,709"  fill="#0ff" fill-opacity="0.01" opacity="1" width="137" height="109"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly-med" onclick="showCard('.card-aedirn')" points="1498,485 1498,539 1500,560 1511,577 1527,590 1539,602 1556,612 1578,621 1594,610 1613,600 1629,584 1644,566 1652,540 1652,513 1652,485" fill="#0ff" fill-opacity="0.01" opacity="1" width="100" height="100"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly-med" onclick="showCard('.card-temeria')" points="883,545 885,600 889,616 895,631 905,645 918,656 930,664 944,672 959,680 977,676 994,668 1010,656 1025,639 1035,621 1041,598 1041,545" fill="#0ff" fill-opacity="0.01" opacity="1" width="112" height="100"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly-med" onclick="showCard('.card-verden')" points="432,637 434,691 440,707 448,723 459,738 471,746 486,756 506,765 525,760 543,751 558,741 570,725 578,705 582,680 582,637" fill="#0ff" fill-opacity="0.01" opacity="1" width="100" height="85"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly" onclick="showCard('.card-cidaris')" points="440,462 440,499 442,522 451,540 463,555 477,567 496,575 508,583 525,575 541,565 555,553 572,532 578,510 578,462" fill="#0ff" fill-opacity="0.01" opacity="1" width="121" height="108"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly" onclick="showCard('.card-bremervooris')" points="243,511 243,535 249,558 255,575 269,591 282,595 298,605 315,595 333,585 346,568 352,548 352,511" fill="#0ff" fill-opacity="0.01" opacity="1" width="128" height="114"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly" onclick="showCard('.card-skellige')" points="136,623 138,686 146,703 160,713 177,723 197,732 218,726 234,717 251,705 265,684 263,621" fill="#0ff" fill-opacity="0.01" opacity="1" width="126" height="111"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly-med" onclick="showCard('.card-redania')" points="1068,305 1068,360 1076,381 1091,401 1105,414 1119,424 1144,434 1165,424 1181,414 1198,397 1210,379 1216,356 1216,305" fill="#0ff" fill-opacity="0.01" opacity="1" width="132" height="119"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly-med" onclick="showCard('.card-kaedwen')" points="1504,230 1504,281 1510,306 1521,322 1533,335 1545,345 1560,353 1578,361 1599,353 1615,345 1632,333 1644,316 1652,296 1654,273 1656,230" fill="#0ff" fill-opacity="0.01" opacity="1" width="100" height="88"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly" onclick="showCard('.card-hengfors')" points="1158,17 1156,61 1165,81 1179,98 1195,110 1214,118 1233,112 1251,100 1265,81 1274,57 1274,20" fill="#0ff" fill-opacity="0.01" opacity="1" width="134" height="122"></polygon>
			</a>
			<a xlink:href="#">
				<polygon class="poly-med" onclick="showCard('.card-kovir_and_poviss')" points="765,37 767,86 772,107 780,121 790,133 804,144 821,154 837,160 856,152 874,142 889,129 899,113 907,92 909,72 909,37" fill="#0ff" fill-opacity="0.01" opacity="1" width="136" height="123"></polygon>
			</a>
		</svg>
	</div>
</body>
</html>