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
  <span><a style="text-decoration: none;" href="#panel-example" class="toggle-panel"><i id="burger" class="fa fa-bars white"></i></a><h1>Notifications</h1></span>
</div>

<div style="min-height: 91vh;">

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

<div id="hero" style="background-image: url('images/notifications.jpg'); background-repeat: no-repeat; background-size: cover;"></div>

<div class=grid>

<div class=card>
<div class=cardHeader>
<h2>Thursday Dec. 03</h2>
</div>
<div class=seperator2></div>
<div class=cardCollection id=placeholder1285 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1285></div>
</div>
<script>document.getElementById('placeholder1285').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1285').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  9:37am</h4></div><div class=cardCollection id=placeholder1284 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1284></div>
</div>
<script>document.getElementById('placeholder1284').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1284').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  6:19am</h4></div><div class=cardCollection id=placeholder1283 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1283></div>
</div>
<script>document.getElementById('placeholder1283').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1283').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left.  6:15am</h4></div></div><div class=card>
<div class=cardHeader>
<h2>Wednesday Dec. 02</h2>
</div>
<div class=seperator2></div>
<div class=cardCollection id=placeholder1282 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1282></div>
</div>
<script>
document.getElementById('placeholder1282').style.backgroundImage = "url('images/exclaim.png')";
document.getElementById('placeholder1282').style.backgroundColor = '#1976D2';
document.getElementById('accent_1282').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Attention: The garage door is still open.</h4></div><div class=cardCollection id=placeholder1281 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1281></div>
</div>
<script>document.getElementById('placeholder1281').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1281').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  7:23pm</h4></div><div class=cardCollection id=placeholder1280 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1280></div>
</div>
<script>document.getElementById('placeholder1280').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1280').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1280').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home. Stopping motion.  7:22pm</h4></div><div class=cardCollection id=placeholder1279 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1279></div>
</div>
<script>document.getElementById('placeholder1279').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1279').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1279').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  5:57pm</h4></div><div class=cardCollection id=placeholder1278 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1278></div>
</div>
<script>document.getElementById('placeholder1278').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1278').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  5:57pm</h4></div><div class=cardCollection id=placeholder1277 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1277></div>
</div>
<script>document.getElementById('placeholder1277').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1277').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  5:38pm</h4></div><div class=cardCollection id=placeholder1276 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1276></div>
</div>
<script>document.getElementById('placeholder1276').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1276').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left.  5:35pm</h4></div><div class=cardCollection id=placeholder1275 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1275></div>
</div>
<script>document.getElementById('placeholder1275').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1275').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  5:10pm</h4></div><div class=cardCollection id=placeholder1274 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1274></div>
</div>
<script>document.getElementById('placeholder1274').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1274').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1274').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home. Stopping motion.  3:08pm</h4></div><div class=cardCollection id=placeholder1273 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1273></div>
</div>
<script>document.getElementById('placeholder1273').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1273').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1273').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  8:06am</h4></div><div class=cardCollection id=placeholder1272 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1272></div>
</div>
<script>document.getElementById('placeholder1272').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1272').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  6:07am</h4></div></div><div class=card>
<div class=cardHeader>
<h2>Tuesday Dec. 01</h2>
</div>
<div class=seperator2></div>
<div class=cardCollection id=placeholder1271 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1271></div>
</div>
<script>document.getElementById('placeholder1271').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1271').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  8:15pm</h4></div><div class=cardCollection id=placeholder1270 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1270></div>
</div>
<script>document.getElementById('placeholder1270').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1270').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left.  8:03pm</h4></div><div class=cardCollection id=placeholder1269 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1269></div>
</div>
<script>document.getElementById('placeholder1269').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1269').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  6:41pm</h4></div><div class=cardCollection id=placeholder1268 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1268></div>
</div>
<script>document.getElementById('placeholder1268').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1268').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1268').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home. Stopping motion.  6:38pm</h4></div><div class=cardCollection id=placeholder1267 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1267></div>
</div>
<script>document.getElementById('placeholder1267').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1267').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1267').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  5:45pm</h4></div><div class=cardCollection id=placeholder1266 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1266></div>
</div>
<script>document.getElementById('placeholder1266').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1266').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  5:45pm</h4></div><div class=cardCollection id=placeholder1265 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1265></div>
</div>
<script>document.getElementById('placeholder1265').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1265').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  4:38pm</h4></div><div class=cardCollection id=placeholder1264 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1264></div>
</div>
<script>document.getElementById('placeholder1264').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1264').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1264').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home. Stopping motion.  4:14pm</h4></div><div class=cardCollection id=placeholder1263 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1263></div>
</div>
<script>document.getElementById('placeholder1263').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1263').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1263').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  8:03am</h4></div><div class=cardCollection id=placeholder1262 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1262></div>
</div>
<script>document.getElementById('placeholder1262').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1262').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  6:39am</h4></div></div><div class=card>
<div class=cardHeader>
<h2>Monday Nov. 30</h2>
</div>
<div class=seperator2></div>
<div class=cardCollection id=placeholder1261 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1261></div>
</div>
<script>
document.getElementById('placeholder1261').style.backgroundImage = "url('images/exclaim.png')";
document.getElementById('placeholder1261').style.backgroundColor = '#1976D2';
document.getElementById('accent_1261').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Attention: The garage door is still open.</h4></div><div class=cardCollection id=placeholder1260 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1260></div>
</div>
<script>document.getElementById('placeholder1260').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1260').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home.  5:41pm</h4></div><div class=cardCollection id=placeholder1259 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1259></div>
</div>
<script>document.getElementById('placeholder1259').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1259').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1259').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. Stopping motion.  4:44pm</h4></div><div class=cardCollection id=placeholder1258 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1258></div>
</div>
<script>document.getElementById('placeholder1258').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1258').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1258').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  7:41am</h4></div><div class=cardCollection id=placeholder1257 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1257></div>
</div>
<script>document.getElementById('placeholder1257').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1257').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  6:40am</h4></div></div><div class=card>
<div class=cardHeader>
<h2>Sunday Nov. 29</h2>
</div>
<div class=seperator2></div>
<div class=cardCollection id=placeholder1256 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1256></div>
</div>
<script>document.getElementById('placeholder1256').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1256').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. 11:59pm</h4></div><div class=cardCollection id=placeholder1255 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1255></div>
</div>
<script>document.getElementById('placeholder1255').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1255').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. 11:49pm</h4></div><div class=cardCollection id=placeholder1254 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1254></div>
</div>
<script>
document.getElementById('placeholder1254').style.backgroundImage = "url('images/exclaim.png')";
document.getElementById('placeholder1254').style.backgroundColor = '#1976D2';
document.getElementById('accent_1254').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Attention: The garage door is still open.</h4></div><div class=cardCollection id=placeholder1253 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1253></div>
</div>
<script>document.getElementById('placeholder1253').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1253').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home.  6:56pm</h4></div><div class=cardCollection id=placeholder1252 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1252></div>
</div>
<script>document.getElementById('placeholder1252').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1252').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1252').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. Stopping motion.  6:42pm</h4></div><div class=cardCollection id=placeholder1251 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1251></div>
</div>
<script>document.getElementById('placeholder1251').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1251').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1251').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  5:45pm</h4></div><div class=cardCollection id=placeholder1250 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1250></div>
</div>
<script>document.getElementById('placeholder1250').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1250').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1250').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. Stopping motion.  5:31pm</h4></div><div class=cardCollection id=placeholder1249 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1249></div>
</div>
<script>document.getElementById('placeholder1249').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1249').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1249').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  4:31pm</h4></div><div class=cardCollection id=placeholder1248 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1248></div>
</div>
<script>document.getElementById('placeholder1248').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1248').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  4:31pm</h4></div><div class=cardCollection id=placeholder1247 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1247></div>
</div>
<script>document.getElementById('placeholder1247').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1247').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home.  4:05pm</h4></div><div class=cardCollection id=placeholder1246 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1246></div>
</div>
<script>document.getElementById('placeholder1246').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1246').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1246').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. Stopping motion.  3:58pm</h4></div><div class=cardCollection id=placeholder1245 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1245></div>
</div>
<script>document.getElementById('placeholder1245').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1245').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1245').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  2:40pm</h4></div><div class=cardCollection id=placeholder1244 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1244></div>
</div>
<script>document.getElementById('placeholder1244').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1244').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  2:40pm</h4></div><div class=cardCollection id=placeholder1243 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1243></div>
</div>
<script>document.getElementById('placeholder1243').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1243').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  1:47pm</h4></div><div class=cardCollection id=placeholder1242 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1242></div>
</div>
<script>document.getElementById('placeholder1242').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1242').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1242').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home. Stopping motion.  1:37pm</h4></div><div class=cardCollection id=placeholder1241 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1241></div>
</div>
<script>document.getElementById('placeholder1241').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1241').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1241').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  1:37pm</h4></div><div class=cardCollection id=placeholder1240 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1240></div>
</div>
<script>document.getElementById('placeholder1240').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1240').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left. 10:29am</h4></div><div class=cardCollection id=placeholder1239 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1239></div>
</div>
<script>document.getElementById('placeholder1239').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1239').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  1:21am</h4></div><div class=cardCollection id=placeholder1238 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1238></div>
</div>
<script>document.getElementById('placeholder1238').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1238').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left.  1:18am</h4></div></div><div class=card>
<div class=cardHeader>
<h2>Saturday Nov. 28</h2>
</div>
<div class=seperator2></div>
<div class=cardCollection id=placeholder1237 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1237></div>
</div>
<script>document.getElementById('placeholder1237').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1237').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home.  6:45pm</h4></div><div class=cardCollection id=placeholder1236 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1236></div>
</div>
<script>document.getElementById('placeholder1236').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1236').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1236').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home. Stopping motion.  6:43pm</h4></div><div class=cardCollection id=placeholder1235 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1235></div>
</div>
<script>document.getElementById('placeholder1235').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1235').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1235').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left. Starting motion.  5:22pm</h4></div><div class=cardCollection id=placeholder1234 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1234></div>
</div>
<script>document.getElementById('placeholder1234').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1234').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left.  5:21pm</h4></div><div class=cardCollection id=placeholder1233 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1233></div>
</div>
<script>document.getElementById('placeholder1233').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1233').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home.  3:49pm</h4></div><div class=cardCollection id=placeholder1232 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1232></div>
</div>
<script>document.getElementById('placeholder1232').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1232').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1232').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. Stopping motion.  1:58pm</h4></div><div class=cardCollection id=placeholder1231 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1231></div>
</div>
<script>document.getElementById('placeholder1231').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1231').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1231').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  1:28pm</h4></div><div class=cardCollection id=placeholder1230 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1230></div>
</div>
<script>document.getElementById('placeholder1230').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1230').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left.  8:05am</h4></div></div><div class=card>
<div class=cardHeader>
<h2>Friday Nov. 27</h2>
</div>
<div class=seperator2></div>
<div class=cardCollection id=placeholder1229 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1229></div>
</div>
<script>
document.getElementById('placeholder1229').style.backgroundImage = "url('images/exclaim.png')";
document.getElementById('placeholder1229').style.backgroundColor = '#1976D2';
document.getElementById('accent_1229').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Attention: The garage door is still open.</h4></div><div class=cardCollection id=placeholder1228 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1228></div>
</div>
<script>document.getElementById('placeholder1228').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1228').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh is home.  7:45pm</h4></div><div class=cardCollection id=placeholder1227 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1227></div>
</div>
<script>document.getElementById('placeholder1227').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1227').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1227').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. Stopping motion.  6:41pm</h4></div><div class=cardCollection id=placeholder1226 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1226></div>
</div>
<script>document.getElementById('placeholder1226').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1226').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1226').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left. Starting motion.  5:38pm</h4></div><div class=cardCollection id=placeholder1225 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1225></div>
</div>
<script>document.getElementById('placeholder1225').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1225').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1225').style.backgroundColor = '#FF5722';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew is home. Stopping motion.  5:05pm</h4></div><div class=cardCollection id=placeholder1224 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1224></div>
</div>
<script>document.getElementById('placeholder1224').style.backgroundImage = "url('images/ash.jpg')";
document.getElementById('accent_1224').style.backgroundImage = "url('images/camera.png')";
document.getElementById('accent_1224').style.backgroundColor = '#1976D2';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Ashleigh left. Starting motion.  9:06am</h4></div><div class=cardCollection id=placeholder1223 style='background-size:cover;background-repeat:no-repeat;margin-top:5px;background-position:50%50%;box-shadow: 2px 2px 2px #BBB'>
<div class=accent id=accent_1223></div>
</div>
<script>document.getElementById('placeholder1223').style.backgroundImage = "url('images/me2.jpg')";document.getElementById('accent_1223').style.display = 'none';
</script>
<div class='collectionBody' style='width: 65%; margin-top: -10px; margin-bottom: -15px; vertical-align: middle;'><h4>Drew left.  7:05am</h4></div></div></div>
<script src="dbupdate.js"></script>
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
