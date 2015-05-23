<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

	<head>

		<title>soft</title>
		<meta name="description" content="dreams">
		<meta name="author" content="someweirddream.info">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
		<link rel="shortcut icon" href="img/favicon.ico">

		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>

		<style type="text/css">
		body {
		background-color: #000;			
		}
		</style>
		
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   4000,		// Length between transitions
					transition              :   0, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	500,		// Speed of transition
					image_protect			:	1,			// Disables right clicking and image dragging using Javascript
					horizontal_center		:	1,
					fit_portrait			:	1,					
					// Components							
					slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					: 
					
[<?php
//path to directory to scan
$directory = "photos-soft/";
//get all image files with a .jpg extension.
$images = glob($directory . "*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);
//print each file name
$number = count($images);
$start = 0;
foreach($images as $image)
{
echo "{image : './" . $image . "', title : '" .$image . "'}";
if ($start < $number - 1)
    echo ", ";
$start = $start + 1;
}
?>],					
				});
		    });
		    
		</script>
		
	</head>

<body>

</body>

<script type="text/javascript">
$(document).ready(function() {
		$('body').css('display', 'none');
		$('body').fadeIn(2000);

	});
</script>
</html>
