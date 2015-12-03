<!doctype html>
<html>
<head>
    <title>MikaHouse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.png" />

	<!--Styles-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <link id="stylesheet" rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

	<!--Scripts-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
    <link rel="manifest" href="manifest.json">
</head>

<body>
<script>
function adjustStyle(width){
        width = parseInt(width);
        if (width > 701){
                $("#stylesheet").attr("href","css/wide.css");
		$("#footer").hide();
		$("#hero").hide();
        }else{
		$("#stylesheet").attr("href","css/style.min.css");
	}
}

$(function(){
        adjustStyle($(this).width());
        $(window).resize(function(){
                adjustStyle($(this).width());
        });
});
</script>
<div id="status-bar"></div>

<body>

<div id="header">
  <span><a style="text-decoration: none;" href="#panel-example" class="toggle-panel"><i id="burger" class="fa fa-bars white"></i></a><h1>Services</h1></span>
</div>

<div id="panel">
     <div id="navHeader">
        <a href=".">
	<i class="fa fa-home fa-inverse landscapeHome" style="font-size: 2em;">
	<h1>MikaHouse</h1>
	</i>
	</a>
     </div>

        <a class="navLinks" href="media_center.php">
		<div id=media_center class="navDiv">
			<div class="navItems">
				<i class="fa fa-play-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Media Center
			</div>
		</div>
	</a>
        <a class="navLinks" href="music.php">
		<div id=music class="navDiv">
			<div class="navItems">
				<i class="fa fa-music"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Music
			</div>
		</div>
	</a>
        <a class="navLinks" href="minecraft.php">
		<div id=minecraft class="navDiv">
			<div class="navItems">
				<i class="fa fa-cube"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minecraft
			</div>
		</div>
	</a>
        <a class="navLinks" href="lighting.php">
		<div id=lighting class="navDiv">
			<div class="navItems">
				<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controls
			</div>
		</div>
	</a>
        <a class="navLinks" href="security.php">
		<div id=security class="navDiv">
			<div class="navItems">
				<i class="fa fa-video-camera"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Security
			</div>
		</div>
	</a>
        <a class="navLinks" href="services.php">
		<div id=services class="navDiv">
			<div class="navItems">
				<i class="fa fa-database"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services
			</div>
		</div>
	</a>
        <a class="navLinks" href="climate.php">
		<div id=climate class="navDiv">
			<div class="navItems">
				<i class="fa fa-sun-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Climate
			</div>
		</div>
	</a>
        <a class="navLinks" href="notifications.php">
		<div id=notifications class="navDiv">
			<div class="navItems">
				<i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notifications
			</div>
		</div>
	</a>
</div>

<div id="hero" style="background-image: url('images/scaled_server.jpg'); background-repeat: no-repeat; background-size: cover;"></div>
<div class=grid>
        <div class='card'>
<div class='cardHeader'><h2>Server Status</h2></div>
<div class='seperator2'></div>
<div class='cardContent'>
<div class='cardStats'>Current Load<div class='divFloat' id='load'>...loading</div></div>
<div class='seperator2'></div>
<div class='cardStats'>Network Ping (ms)<div class='divFloat' id='ping'>...loading</div></div>
<div class='seperator2'></div>
<div class='cardStats'>Icecast Server<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></div>
<div class='seperator2'></div>
<div class='cardStats'>Plex Media Server<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></div>
<div class='seperator2'></div>
<div class='cardStats'>Subsonic Music Server<div class='divFloat'><i class='blIconBlack fa fa-close'></i></div></div>
</div>
</div>

<div class='card'>
<div class='cardHeader'><h2>Storage</h2></div>
<div class='seperator2'></div>
<div class='cardContent'>
<div class='cardStats'>
	Root<div style='float: right; border: 1px solid #AAA; width: 70%;'>
	<div style='padding: 0; margin: 0; background: #1976D2; width: %; height:100%; z-index: -1; float: right; display: inline;'>
	<div class='divFloatPer'>%</div>
	</div>
	</div>
</div>

<div class='cardStats'>
	Movies<div style='float: right; border: 1px solid #AAA; width: 70%;'>
	<div style='padding: 0; margin: 0; background: #1976D2; width: 94%; height:100%; z-index: -1; float: right; display: inline;'>
	<div class='divFloatPer'>94%</div>
	</div>
	</div>
</div>

<div class='cardStats'>
	Shows<div style='float: right; border: 1px solid #AAA; width: 70%;'>
	<div style='padding: 0; margin: 0; background: #1976D2; width: 71%; height:100%; z-index: -1; float: right; display: inline;'>
	<div class='divFloatPer'>71%</div>
	</div>
	</div>
</div>

<div class='cardStats'>
	Music<div style='float: right; border: 1px solid #AAA; width: 70%;'>
	<div style='padding: 0; margin: 0; background: #1976D2; width: 23%; height:100%; z-index: -1; float: right; display: inline;'>
	<div class='divFloatPer'>23%</div>
	</div>
	</div>
</div>

<div class='cardStats'>
	Old Shows<div style='float: right; border: 1px solid #AAA; width: 70%;'>
	<div style='padding: 0; margin: 0; background: #1976D2; width: 84%; height:100%; z-index: -1; float: right; display: inline;'>
	<div class='divFloatPer'>84%</div>
	</div>
	</div>
</div>

<div class='cardStats'>
	Kids<div style='float: right; border: 1px solid #AAA; width: 70%;'>
	<div style='padding: 0; margin: 0; background: #1976D2; width: 84%; height:100%; z-index: -1; float: right; display: inline;'>
	<div class='divFloatPer'>84%</div>
	</div>
	</div>
</div>

<div class='cardStats'>
	Downloads<div style='float: right; border: 1px solid #AAA; width: 70%;'>
	<div style='padding: 0; margin: 0; background: #1976D2; width: 14%; height:100%; z-index: -1; float: right; display: inline;'>
	<div class='divFloatPer'>14%</div>
	</div>
	</div>
</div>
</div>
</div>

<div class='card'>
<div class='cardHeader'><h2>Network</h2></div>
<div class='seperator2'></div>
<div class='cardContent'>
<div class='cardStats'>pfSense<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></div>
<div class='seperator2'></div>
<div class='cardStats'>Wireless N Router<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></div>
<div class='seperator2'></div>
<div class='cardStats'>Wireless G Router<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></div>
</div>
</div>

<div class='card'>
<div class='cardHeader'><h2>Black Box</h2></div>
<div class='seperator2'></div>
<div class='cardContent'>
<div class='cardStats'>Deluge<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></div>
<div class='seperator2'></div>
<div class='cardStats'><a target=_blank href=http://192.168.1.101:9091>Transmission<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></a></div>
<div class='seperator2'></div>
<div class='cardStats'><a target=_blank href=http://192.168.1.101:5050>CouchPotato<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></a></div>
<div class='seperator2'></div>
<div class='cardStats'><a target=_blank href=http://192.168.1.101:8081>SickBeard<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></a></div>
<div class='seperator2'></div>
<div class='cardStats'>Headphones<div class='divFloat'><i class='blIconBlue fa fa-check'></i></div></div>
<div class='seperator2'></div>
<div class='cardStats'>SabNZBd+<div class='divFloat'><i class='blIconBlack fa fa-close'></i></div></div>
</div>
</div>

<script>
        var autoRefresh = setInterval(
        function(){
              $("#load").load("../automation/load.php");
              $("#ping").load("../automation/ping.php");
           }, 5000);
</script>

</div>

<div id='footer'></div>

<div id="blur">
<center>
<div class="loader">
    <svg class="circular">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
</center>
</div>

<div id="darken"></div>

<script>
$(window).load(function(){
	var elem = document.querySelector('.grid');
	var msnry = new Masonry( elem, {
	  // options
	  itemSelector: '.card',
	  columnWidth: 200
	});

	// element argument can be a selector string
	//   for an individual element
	var msnry = new Masonry( '.grid', {
	  // options
	});
});
</script>

<script src='js/scripts.js'></script>

</body>
</html>
