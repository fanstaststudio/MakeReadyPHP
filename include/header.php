<?php include('config/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Make Ready | Design, Web & Video</title>

    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/comment.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
				 <!-- Google map -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		    <script>
		      function initialize() {
		        var mapCanvas = document.getElementById('map');
		        var makepos = new google.maps.LatLng(55.487784, 8.446826);
						var mapOptions = {
		          center: makepos,
		          zoom: 15,
							disableDefaultUI: true,
							styles:
					
[{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]
					
,scrollwheel: false,
navigationControl: false,
mapTypeControl: false,
scaleControl: false,
draggable: false,
mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(mapCanvas, mapOptions)

var iconBase = 'images/';
var marker = new google.maps.Marker({
	position: makepos,
	map: map,
	title: 'Her bor vi !',
	icon: iconBase + 'mapmarker.png'
});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62776123-1', 'auto');
  ga('send', 'pageview');

</script>

  </head>
  <body>
	  <!--
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Make Ready</a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Forside</a></li>
	        <li><a href="blog.html">Blog</a></li>
            <li><a href="#">Projekter</a></li>
            <li><a href="#about">Om Os</a></li>
            <li><a href="#contact">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </nav>
    -->	
	
    <nav>
	    <div class="nav-logo">
		    <a href="index.php"><img src="images/M-logo.svg"></a>
	    </div>
	    <div class="nav-topics">
		    <ul>
			    <li><a href="index.php?site=frontpage">Forside</a></li>
			    <li><a href="index.php?site=case">Cases</a></li>
			    <li><a href="index.php?site=blog">Blog</a></li>
			    <li><a href="index.php?site=aboutus">Om Os</a></li>
			    <li><a href="index.php?site=kontakt">Kontakt</a></li>
		    </ul>
	    </div>
	    
	    <div class="nav-topics-burger">
				<span class="glyphicon glyphicon-menu-hamburger" id="clickme"></span>
    	</div>
    	<div class="nav-topics-mobil" >
	    	<ul id="topicsmobil" style="display: none">
		    <li><a href="index.php?site=frontpage">Forside</a></li>
		    <li><a href="index.php?site=case">Cases</a></li>
		    <li><a href="index.php?site=blog">Blog</a></li>
		    <li><a href="index.php?site=aboutus">Om Os</a></li>
		    <li><a href="index.php?site=kontakt">Kontakt</a></li>
		    </ul>
    	</div>
    	
    	
    	<script>
			  $(function() {
					$('#clickme').on('click', function() {
						$('#topicsmobil').slideToggle(300);
					})  
				});
			</script>
    </nav>