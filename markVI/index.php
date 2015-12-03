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
<script>console.log('localhost');</script>
<div id="header">
  <span><a style="text-decoration: none;" class="toggle-panel"><i id="burger" class="fa fa-bars white"></i></a><h1>Welcome</h1></span>
</div>

<div id="hero" style="height: 11vh"></div>

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

<div class="grid">
<div id='who-home' class='card'><div class='cardHeader'><h2>Who's Home</h2></div><div class='seperator2'></div>
<div class='cardCollection' style='background-image: url(images/ash.jpg);'></div>
<div class='collectionBody'><h4>Ashleigh - Not Home</h4></div>
<div class='collectionTag' id='Ashleigh'>
<h6>Last Activity</br>9:37 am</h6>
</div>
<div class='seperator2'></div>
<script>document.getElementById('Ashleigh').style.borderRight = "solid 1px #FF5722";</script>

<div class='cardCollection' style='background-image: url(images/me2.jpg);'></div>
<div class='collectionBody'><h4>Drew - Not Home</h4></div>
<div class='collectionTag' id='Drew'>
<h6>Last Activity</br>9:30 am</h6>
</div>
<script>document.getElementById('Drew').style.borderRight = "solid 1px #FF5722";</script>

</div>
<div id=motionCapture class="card">
  <div class="cardHeader">
    <h2>Most Recent Motion Capture</h2>
  </div>
    <div class="cardImgCont">
     <div class="cardImg">
        <img style="width: 100%; height: auto;" src="images/lastImg.jpg" onerror="imgError(this);">
     </div>
     <div class="cardContent">
        <div class="cardIcons">
	1237_03-12-2015
        </div>
     </div>
    </div>
</div>

<div class="card">
  <div class="cardHeader">
    <h2>Network Stats</h2>
  </div>
	<div class="cardContent">
		<div class='cardStats'>Ping: 9.490ms</div><div class='seperator2'></div><div class='cardStats'>Server Load:  0.96, 0.67, 0.72</div>	</div>
</div>

<div class="card">
  <div class="cardHeader">
    <h2>Latest Movie</h2>
  </div>
    <div class="cardImgCont">
     <div class="cardImg">
        <img style="width: 100%; height: auto;" src="images/newest.jpg">
     </div>
     <div class="cardContent">
	<div class="cardIcons">
	Heat, The (2013)
	</div>
     </div>
    </div>
</div>

<div class="card">
  <div class="cardHeader">
    <h2>Latest Album</h2>
  </div>
    <div class="cardImgCont">
     <div class="cardImg">
        <img style="width: 100%; height: auto;" src="images/album.jpg">
     </div>
     <div class="cardContent">
        <div class="cardIcons">
        Eric Church - Mr. Misunderstood [2015]
        </div>
     </div>
    </div>
</div>

</div>
</div>

<div id="actionButton">

<i class="fa fa-pencil fa-inverse" style="position: relative; top: 16px; font-size: 24px;"></i></div></div><div id=overlay><div id=reminder><br>
        <h2 style="margin: 2vw;">Reminders</h2>
        <div class="seperator2"></div>
        </br>
        <div class="reminder">
        <form method="post" action="remPost.php">
        <input type="text" name="fname" placeholder="Set a new reminder" style="margin-left: 5%; width: 90%; font-size: 100%; color: #1976D2;">
        </form>
        </br><center><img src="images/sun.png" style="top: 20px; width: 100px; height: 90px;"></br><p>You have no more reminders</p></center>
        <div class="cardContent"><div id="close" class="cardBox" onClick="changeOrange(this)"><div class="cardIcons">CLOSE</div></div></div>
	</div><br><br><br></div>
</div>

<script>
$("#who-home").hide();
$(document).ready(function(){
	$("#who-home").show();
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
