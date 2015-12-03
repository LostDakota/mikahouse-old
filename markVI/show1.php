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
  <span><a style="text-decoration: none;" href="#panel-example" class="toggle-panel"><i id="burger" class="fa fa-bars white"></i></a><h1>TV Shows</h1></span>
</div>

<div id="hero" style="height: 11vh;"></div>

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

<div id="spacer">
<div class=grid>
<div class='card'><div class='cardHeader'><h2>American Horror Story</h2></div><div class='cardImgCont'><div class='cardImg'><img style='width: 100%;' src='images/tv1.jpg'></div><div class='cardContent'><div class='cardIcons' style='float:left'><h2 style='margin: 0;'>The Ten Commandments Killer</h2><h4 style='margin: 0;'>S05E08</h4><div class=seperator2></div><p>John closes in on The Ten Commandments Killer. Sally's arrangement with March is revealed.</p></div></div></div></div><div class='card'><div class='cardHeader'><h2>The League</h2></div><div class='cardImgCont'><div class='cardImg'><img style='width: 100%;' src='images/tv2.jpg'></div><div class='cardContent'><div class='cardIcons' style='float:left'><h2 style='margin: 0;'>The 13 Stages of Grief</h2><h4 style='margin: 0;'>S07E12</h4><div class=seperator2></div><p>The league is kicked off their fantasy football website, so Kevin runs the league old school. Jenny deals with loss. Rafi counsels Ruxin. Andre tries to co-opt Ruxin's dinner reservation.</p></div></div></div></div><div class='card'><div class='cardHeader'><h2>Modern Family</h2></div><div class='cardImgCont'><div class='cardImg'><img style='width: 100%;' src='http://thetvdb.com/banners/episodes/95011/5374719.jpg'></div><div class='cardContent'><div class='cardIcons' style='float:left'><h2 style='margin: 0;'>Clean Out Your Junk Drawer</h2><h4 style='margin: 0;'>S07E08</h4><div class=seperator2></div><p>Gloria won a bid at the school auction for a family seminar with famed doctor and author Debra Radcliffe, whose self-help book 'Clean Out Your Junk Drawer' encourages people get out all their emotional junk to become healthier people and in turn better partners and spouses. Jay is resistant to the whole experience and can't get away fast enough; Mitch and Cam decide to keep it very surface level so they can come off as super stable; and Phil and Claire also make it competitive and strive to be the best and strongest couple of the group. Things quickly escalate, though, as junk starts flying. Elsewhere, Haley and Alex meet up and counsel each other on their boy problems.</p></div></div></div></div>
</div>

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
