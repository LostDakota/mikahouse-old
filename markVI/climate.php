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
  <span><a style="text-decoration: none;" href="#panel-example" class="toggle-panel"><i id="burger" class="fa fa-bars white"></i></a><h1>Climate</h1></span>
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

<div id="hero" style="background-image: url('images/weather.jpg'); background-repeat: no-repeat; background-size: cover;"></div>

<div class=grid>

<div class="card">
  <div class="cardHeader">
    <h2>House Temperature</h2>
  </div>
	<div class="seperator2"></div>
    <div class="collectionBody">
	<h1 id="thermostat" style="font-size: 300%; color: #1976D2;">72</h1><h1 style="margin-left: 0; font-size: 300%; color: #1976D2;">&deg;</h1>
	<h1 id="upvote" style="font-size: 300%; color: #FF5722;"><i class="fa fa-arrow-circle-up"></i></h1>
	<h1 id="downvote" style="font-size: 300%; color: #1976D2;"><i class="fa fa-arrow-circle-down"></i></h1>
    </div>
	<div class='collectionTag'><h6>Set to 72&deg;</br>Until 4pm</h6></div>
</div>


<div class="card">
  <div class="cardHeader">
    <h2>Current Conditions</h2>
  </div>
	<div class="seperator2"></div>
    <div class="cardContent">
	<div class='cardStats'>
           Temperature: 35.1 F (1.7 C)
   Relative Humidity: 88%
   Wind: from the W (260 degrees) at 10 MPH (9 KT)
   Weather: light snow
   Sky conditions: overcast
	</div>
    </div>
</div>

<div class="card">
  <div class="cardHeader">
    <h2>Radar</h2>
  </div>
        <div class="seperator2"></div>
    <div class="cardContent">
        <div class='cardStats'>
	<div class='cardImg' style="background-image:url('http://api.wunderground.com/api/fbd09fa5ffe1e2d3/animatedradar/q/OH/Boardman.gif?newmaps=1&timelabel=1&timelabel.y=10&num=5&delay=50');">
	</div>
        </div>
    </div>
</div>

<div class="card">
  <div class="cardHeader">
    <h2>Device Temps</h2>
  </div>
	<div class="seperator2"></div>
    <div class="cardContent">
	<div class='cardStats'>
                Garage Pi: 81.8&deg;	</div>
	<div class="seperator2"></div>
	<div class='cardStats'>
                Server: 107.6&deg;
	</div>
    </div>
</div>

<script src="dbupdate.js"></script>

<script>
$('#upvote').click(function(){
	$('#thermostat').html(function(i, val){
		return parseInt(val)+1;
	});
});
$('#downvote').click(function(){
        $('#thermostat').html(function(i, val){
                return parseInt(val)-1;
        });
});
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
