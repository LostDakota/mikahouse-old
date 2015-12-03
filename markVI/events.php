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

<body>


<div id="header">
  <span>
	<a style="text-decoration: none;" href="#panel-example" class="toggle-panel">
	<i id="burger" class="fa fa-bars white"></i>
	</a>
	<h1>Events</h1>
	</span>
</div>

<div id="hero" style="height: 10vh;"></div>
</br>

<div id=eventContainer style="min-height: 79.5vh;">

<center>
<div class="card"><div class="cardHeader"><h2>No Events Yet</h2></div><div class="cardImgCont"><div class="cardImg"><img style="width: 100%;" src="../automation/images/fanart.jpg"></div></div></div></center>
</div>

<script>
function reSize(img){
	var image = document.getElementById(img);
	var theTop = $(image).offset().top - 50;

	$(image).toggleClass('grow');
	setTimeout(function(){
		$("body").animate({scrollTop: theTop + 'px'});}
	, 500);
};
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
