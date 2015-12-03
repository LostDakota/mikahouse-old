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
  <span><a style="text-decoration: none;" href="#panel-example" class="toggle-panel"><i id="burger" class="fa fa-bars white"></i></a><h1>Music</h1></span>
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

<div id="hero" style="background-image: url('images/scaled_music.jpg'); background-repeat: no-repeat; background-size: cover;"></div>
<div class=grid>
<div class="card">
   <div class="cardHeader">
        <h2>Kitchen Direct Play</h2>
   </div>
        <div class="seperator2"></div>
<div class="cardContent">

   <a href="volumio.php"><div onclick="changeOrange(this)" class="cardBox"><div class="cardIcons">CONTROLS</div></div></a>

</div>
</div>

<div id=1 class='card'>
          <div class=cardImg style='width: 100%;position:relative;background-color:#484434'>
          <div class=playCircle onclick=stationFunction('1')>
          <i class='fa fa-play fa-inverse triangle'></i>
          </div>
          <div class=artistCircle style='background:url(images/art_ices.jpg?=56874836),url(images/standby.jpg);background-size:cover'></div>
          <img style='opacity:.25;width:100%;position:relative;top:-300px;left:0px' src='images/icesback.jpg'>
          </div>
          <div class='cardContent' style='background-color:#484434;width:100%;margin:0'>
                  <div class=cardIcons style='float:left;height:auto'>
                          <h4 style='color:#FFF;margin:5px'>
                          <img class='albumCircle' src=images/ices.jpg?=1251491409 src2=../automation/images/fanart.jpg>
                                Ices Radio</h4>
                  </div>
          </div>
                          <p style='display: inline-block; margin: 8px 5px 5px;font-size: .75em'>Rise Against - Sight Unseen (320Kbps)</p>
</div>

<div id=ices style='z-index:50;width:100vw;height:100vh;top:0px;left:0px;background-color:white;display:none;position:fixed;'>
<div style='background-color:#FF5722;height:7.5vh;position:fixed;z-index:99;top:92.5vh;width:100vw'></div>
<i class='fa fa-arrow-left fa-inverse' style='text-shadow: 0px 0px 10px #000;top:5vh;left:3vh;font-size:1.75em;position:absolute' onclick='closeIt(ices);autoRefresh_stations()'></i>
<img id=image_ices class='bigAlbum' src=images/ices.jpg?=1251491409 src2=../automation/images/fanart.jpg>
<div class=pButton onclick=moveIt('controls_ices');playStation('http://mikahouse.webhop.me:8000/ices') id='controls_ices'>
          <i class='fa fa-play fa-inverse play-button'></i>
<div id=sound-on><div id=bar1></div><div id=bar2></div><div id=bar3></div></div>
</div>
<div style='background-color:#FFF;margin:0;'>
<div id=titleInfo style='margin-left:2vw'>
<h2 style='color:#666;font-size:1.5em'>Ices Radio</h2>
<div id=info_ices>
<div id=pinfo_ices style='height:5vh;'>
<div style='float:left;width:8vw;height:8vw;background-image:url(images/art_ices.jpg?=56874836),url(../automation/images/fanart.jpg);vertical-align:middle;background-size:cover;border-radius:8vw;display:inline-block'></div>
<p style='line-height:6vw;width:80vw;float:left;font-size:.75em;margin:5px;display:inline-block'>Rise Against - Sight Unseen (320Kbps)</p>
</div></div></div>
<div class=firstcont  id=kitchen1>
<h2 style='color:#333'>Kitchen
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(kcont1)'></i>
</h2>
<div id=kcont1 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/kitchenstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/kitchenplay.sh http://192.168.1.101:8000/ices');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('kitchenup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('kitchendown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=bathroom1>
<h2 style='color:#333'>Bathroom
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(bcont1)'></i>
</h2>
<div id=bcont1 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/bathroomstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/bathroomplay.sh http://192.168.1.101:8000/ices');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('bathroomup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('bathroomdown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=living1>
<h2 style='color:#333'>Living Room
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(lcont1)'></i>
</h2>
<div id=lcont1 class=controls>
<div class=cardContent>
<div class=circ><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=cardBox style='width:10%'><div class=cardIcons>REMOTE</div></div>
</div>
</div>
</div>
</div>
</div>
<script>
var refresh;
$('#controls_ices').click(function() {
  $(this).find('i').toggle();
  $(this).find('#sound-on').toggle();
  $(this).toggleClass('whitey');
  function myVarices(){
		var numbers = Math.floor(Math.random() * 100000000);
		var state = player.networkState;
		var thisImage = document.getElementById('image_ices');
		var info = document.getElementById('info_ices');
		$(info).load('music.php #pinfo_ices');
		$(thisImage).attr('src','images/ices.jpg?=' + numbers);
		player.onstalled = function(){
			player.play();
		}
  }
if(player.paused == false){
	refresh = setInterval(function(){myVarices()}, 10000);
}else{
	clearInterval(refresh);
};
});
</script>
<div id=2 class='card'>
          <div class=cardImg style='width: 100%;position:relative;background-color:#4D5A5A'>
          <div class=playCircle onclick=stationFunction('2')>
          <i class='fa fa-play fa-inverse triangle'></i>
          </div>
          <div class=artistCircle style='background:url(images/art_country.jpg?=878097213),url(images/standby.jpg);background-size:cover'></div>
          <img style='opacity:.25;width:100%;position:relative;top:-300px;left:0px' src='images/countryback.jpg'>
          </div>
          <div class='cardContent' style='background-color:#4D5A5A;width:100%;margin:0'>
                  <div class=cardIcons style='float:left;height:auto'>
                          <h4 style='color:#FFF;margin:5px'>
                          <img class='albumCircle' src=images/country.jpg?=1030376380 src2=../automation/images/fanart.jpg>
                                Country Radio</h4>
                  </div>
          </div>
                          <p style='display: inline-block; margin: 8px 5px 5px;font-size: .75em'>Thompson Square - I Got You</p>
</div>

<div id=country style='z-index:50;width:100vw;height:100vh;top:0px;left:0px;background-color:white;display:none;position:fixed;'>
<div style='background-color:#FF5722;height:7.5vh;position:fixed;z-index:99;top:92.5vh;width:100vw'></div>
<i class='fa fa-arrow-left fa-inverse' style='text-shadow: 0px 0px 10px #000;top:5vh;left:3vh;font-size:1.75em;position:absolute' onclick='closeIt(country);autoRefresh_stations()'></i>
<img id=image_country class='bigAlbum' src=images/country.jpg?=1030376380 src2=../automation/images/fanart.jpg>
<div class=pButton onclick=moveIt('controls_Country');playStation('http://mikahouse.webhop.me:8000/Country') id='controls_Country'>
          <i class='fa fa-play fa-inverse play-button'></i>
<div id=sound-on><div id=bar1></div><div id=bar2></div><div id=bar3></div></div>
</div>
<div style='background-color:#FFF;margin:0;'>
<div id=titleInfo style='margin-left:2vw'>
<h2 style='color:#666;font-size:1.5em'>Country Radio</h2>
<div id=info_country>
<div id=pinfo_country style='height:5vh;'>
<div style='float:left;width:8vw;height:8vw;background-image:url(images/art_country.jpg?=878097213),url(../automation/images/fanart.jpg);vertical-align:middle;background-size:cover;border-radius:8vw;display:inline-block'></div>
<p style='line-height:6vw;width:80vw;float:left;font-size:.75em;margin:5px;display:inline-block'>Thompson Square - I Got You</p>
</div></div></div>
<div class=firstcont  id=kitchen2>
<h2 style='color:#333'>Kitchen
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(kcont2)'></i>
</h2>
<div id=kcont2 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/kitchenstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/kitchenplay.sh http://192.168.1.101:8000/Country');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('kitchenup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('kitchendown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=bathroom2>
<h2 style='color:#333'>Bathroom
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(bcont2)'></i>
</h2>
<div id=bcont2 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/bathroomstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/bathroomplay.sh http://192.168.1.101:8000/Country');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('bathroomup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('bathroomdown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=living2>
<h2 style='color:#333'>Living Room
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(lcont2)'></i>
</h2>
<div id=lcont2 class=controls>
<div class=cardContent>
<div class=circ><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=cardBox style='width:10%'><div class=cardIcons>REMOTE</div></div>
</div>
</div>
</div>
</div>
</div>
<script>
var refresh;
$('#controls_Country').click(function() {
  $(this).find('i').toggle();
  $(this).find('#sound-on').toggle();
  $(this).toggleClass('whitey');
  function myVarcountry(){
		var numbers = Math.floor(Math.random() * 100000000);
		var state = player.networkState;
		var thisImage = document.getElementById('image_country');
		var info = document.getElementById('info_country');
		$(info).load('music.php #pinfo_country');
		$(thisImage).attr('src','images/country.jpg?=' + numbers);
		player.onstalled = function(){
			player.play();
		}
  }
if(player.paused == false){
	refresh = setInterval(function(){myVarcountry()}, 10000);
}else{
	clearInterval(refresh);
};
});
</script>
<div id=3 class='card'>
          <div class=cardImg style='width: 100%;position:relative;background-color:#706B6B'>
          <div class=playCircle onclick=stationFunction('3')>
          <i class='fa fa-play fa-inverse triangle'></i>
          </div>
          <div class=artistCircle style='background:url(images/art_billy.jpg?=1816729094),url(images/standby.jpg);background-size:cover'></div>
          <img style='opacity:.25;width:100%;position:relative;top:-300px;left:0px' src='images/billyback.jpg'>
          </div>
          <div class='cardContent' style='background-color:#706B6B;width:100%;margin:0'>
                  <div class=cardIcons style='float:left;height:auto'>
                          <h4 style='color:#FFF;margin:5px'>
                          <img class='albumCircle' src=images/billy.jpg?=1472601343 src2=../automation/images/fanart.jpg>
                                Talent Radio</h4>
                  </div>
          </div>
                          <p style='display: inline-block; margin: 8px 5px 5px;font-size: .75em'>Billy Talent - Pocketful of Dreams</p>
</div>

<div id=billy style='z-index:50;width:100vw;height:100vh;top:0px;left:0px;background-color:white;display:none;position:fixed;'>
<div style='background-color:#FF5722;height:7.5vh;position:fixed;z-index:99;top:92.5vh;width:100vw'></div>
<i class='fa fa-arrow-left fa-inverse' style='text-shadow: 0px 0px 10px #000;top:5vh;left:3vh;font-size:1.75em;position:absolute' onclick='closeIt(billy);autoRefresh_stations()'></i>
<img id=image_billy class='bigAlbum' src=images/billy.jpg?=1472601343 src2=../automation/images/fanart.jpg>
<div class=pButton onclick=moveIt('controls_Billy');playStation('http://mikahouse.webhop.me:8000/Billy') id='controls_Billy'>
          <i class='fa fa-play fa-inverse play-button'></i>
<div id=sound-on><div id=bar1></div><div id=bar2></div><div id=bar3></div></div>
</div>
<div style='background-color:#FFF;margin:0;'>
<div id=titleInfo style='margin-left:2vw'>
<h2 style='color:#666;font-size:1.5em'>Talent Radio</h2>
<div id=info_billy>
<div id=pinfo_billy style='height:5vh;'>
<div style='float:left;width:8vw;height:8vw;background-image:url(images/art_billy.jpg?=1816729094),url(../automation/images/fanart.jpg);vertical-align:middle;background-size:cover;border-radius:8vw;display:inline-block'></div>
<p style='line-height:6vw;width:80vw;float:left;font-size:.75em;margin:5px;display:inline-block'>Billy Talent - Pocketful of Dreams</p>
</div></div></div>
<div class=firstcont  id=kitchen3>
<h2 style='color:#333'>Kitchen
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(kcont3)'></i>
</h2>
<div id=kcont3 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/kitchenstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/kitchenplay.sh http://192.168.1.101:8000/Billy');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('kitchenup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('kitchendown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=bathroom3>
<h2 style='color:#333'>Bathroom
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(bcont3)'></i>
</h2>
<div id=bcont3 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/bathroomstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/bathroomplay.sh http://192.168.1.101:8000/Billy');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('bathroomup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('bathroomdown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=living3>
<h2 style='color:#333'>Living Room
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(lcont3)'></i>
</h2>
<div id=lcont3 class=controls>
<div class=cardContent>
<div class=circ><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=cardBox style='width:10%'><div class=cardIcons>REMOTE</div></div>
</div>
</div>
</div>
</div>
</div>
<script>
var refresh;
$('#controls_Billy').click(function() {
  $(this).find('i').toggle();
  $(this).find('#sound-on').toggle();
  $(this).toggleClass('whitey');
  function myVarbilly(){
		var numbers = Math.floor(Math.random() * 100000000);
		var state = player.networkState;
		var thisImage = document.getElementById('image_billy');
		var info = document.getElementById('info_billy');
		$(info).load('music.php #pinfo_billy');
		$(thisImage).attr('src','images/billy.jpg?=' + numbers);
		player.onstalled = function(){
			player.play();
		}
  }
if(player.paused == false){
	refresh = setInterval(function(){myVarbilly()}, 10000);
}else{
	clearInterval(refresh);
};
});
</script>
<div id=4 class='card'>
          <div class=cardImg style='width: 100%;position:relative;background-color:#4B4B4B'>
          <div class=playCircle onclick=stationFunction('4')>
          <i class='fa fa-play fa-inverse triangle'></i>
          </div>
          <div class=artistCircle style='background:url(images/art_latestTracks.jpg?=2072522408),url(images/standby.jpg);background-size:cover'></div>
          <img style='opacity:.25;width:100%;position:relative;top:-300px;left:0px' src='images/latestTracksback.jpg'>
          </div>
          <div class='cardContent' style='background-color:#4B4B4B;width:100%;margin:0'>
                  <div class=cardIcons style='float:left;height:auto'>
                          <h4 style='color:#FFF;margin:5px'>
                          <img class='albumCircle' src=images/latestTracks.jpg?=675889815 src2=../automation/images/fanart.jpg>
                                LatestTracks Radio</h4>
                  </div>
          </div>
                          <p style='display: inline-block; margin: 8px 5px 5px;font-size: .75em'>Hunter Hayes - Wanted</p>
</div>

<div id=latestTracks style='z-index:50;width:100vw;height:100vh;top:0px;left:0px;background-color:white;display:none;position:fixed;'>
<div style='background-color:#FF5722;height:7.5vh;position:fixed;z-index:99;top:92.5vh;width:100vw'></div>
<i class='fa fa-arrow-left fa-inverse' style='text-shadow: 0px 0px 10px #000;top:5vh;left:3vh;font-size:1.75em;position:absolute' onclick='closeIt(latestTracks);autoRefresh_stations()'></i>
<img id=image_latestTracks class='bigAlbum' src=images/latestTracks.jpg?=675889815 src2=../automation/images/fanart.jpg>
<div class=pButton onclick=moveIt('controls_latestTracks');playStation('http://mikahouse.webhop.me:8000/latestTracks') id='controls_latestTracks'>
          <i class='fa fa-play fa-inverse play-button'></i>
<div id=sound-on><div id=bar1></div><div id=bar2></div><div id=bar3></div></div>
</div>
<div style='background-color:#FFF;margin:0;'>
<div id=titleInfo style='margin-left:2vw'>
<h2 style='color:#666;font-size:1.5em'>LatestTracks Radio</h2>
<div id=info_latestTracks>
<div id=pinfo_latestTracks style='height:5vh;'>
<div style='float:left;width:8vw;height:8vw;background-image:url(images/art_latestTracks.jpg?=2072522408),url(../automation/images/fanart.jpg);vertical-align:middle;background-size:cover;border-radius:8vw;display:inline-block'></div>
<p style='line-height:6vw;width:80vw;float:left;font-size:.75em;margin:5px;display:inline-block'>Hunter Hayes - Wanted</p>
</div></div></div>
<div class=firstcont  id=kitchen4>
<h2 style='color:#333'>Kitchen
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(kcont4)'></i>
</h2>
<div id=kcont4 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/kitchenstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/kitchenplay.sh http://192.168.1.101:8000/latestTracks');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('kitchenup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('kitchendown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=bathroom4>
<h2 style='color:#333'>Bathroom
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(bcont4)'></i>
</h2>
<div id=bcont4 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/bathroomstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/bathroomplay.sh http://192.168.1.101:8000/latestTracks');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('bathroomup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('bathroomdown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=living4>
<h2 style='color:#333'>Living Room
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(lcont4)'></i>
</h2>
<div id=lcont4 class=controls>
<div class=cardContent>
<div class=circ><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=cardBox style='width:10%'><div class=cardIcons>REMOTE</div></div>
</div>
</div>
</div>
</div>
</div>
<script>
var refresh;
$('#controls_latestTracks').click(function() {
  $(this).find('i').toggle();
  $(this).find('#sound-on').toggle();
  $(this).toggleClass('whitey');
  function myVarlatestTracks(){
		var numbers = Math.floor(Math.random() * 100000000);
		var state = player.networkState;
		var thisImage = document.getElementById('image_latestTracks');
		var info = document.getElementById('info_latestTracks');
		$(info).load('music.php #pinfo_latestTracks');
		$(thisImage).attr('src','images/latestTracks.jpg?=' + numbers);
		player.onstalled = function(){
			player.play();
		}
  }
if(player.paused == false){
	refresh = setInterval(function(){myVarlatestTracks()}, 10000);
}else{
	clearInterval(refresh);
};
});
</script>
<div id=5 class='card'>
          <div class=cardImg style='width: 100%;position:relative;background-color:#9E6236'>
          <div class=playCircle onclick=stationFunction('5')>
          <i class='fa fa-play fa-inverse triangle'></i>
          </div>
          <div class=artistCircle style='background:url(images/art_nineties.jpg?=1257644787),url(images/standby.jpg);background-size:cover'></div>
          <img style='opacity:.25;width:100%;position:relative;top:-300px;left:0px' src='images/ninetiesback.jpg'>
          </div>
          <div class='cardContent' style='background-color:#9E6236;width:100%;margin:0'>
                  <div class=cardIcons style='float:left;height:auto'>
                          <h4 style='color:#FFF;margin:5px'>
                          <img class='albumCircle' src=images/nineties.jpg?=1682807221 src2=../automation/images/fanart.jpg>
                                Nineties Radio</h4>
                  </div>
          </div>
                          <p style='display: inline-block; margin: 8px 5px 5px;font-size: .75em'>Nada Surf - Popular</p>
</div>

<div id=nineties style='z-index:50;width:100vw;height:100vh;top:0px;left:0px;background-color:white;display:none;position:fixed;'>
<div style='background-color:#FF5722;height:7.5vh;position:fixed;z-index:99;top:92.5vh;width:100vw'></div>
<i class='fa fa-arrow-left fa-inverse' style='text-shadow: 0px 0px 10px #000;top:5vh;left:3vh;font-size:1.75em;position:absolute' onclick='closeIt(nineties);autoRefresh_stations()'></i>
<img id=image_nineties class='bigAlbum' src=images/nineties.jpg?=1682807221 src2=../automation/images/fanart.jpg>
<div class=pButton onclick=moveIt('controls_Nineties');playStation('http://mikahouse.webhop.me:8000/Nineties') id='controls_Nineties'>
          <i class='fa fa-play fa-inverse play-button'></i>
<div id=sound-on><div id=bar1></div><div id=bar2></div><div id=bar3></div></div>
</div>
<div style='background-color:#FFF;margin:0;'>
<div id=titleInfo style='margin-left:2vw'>
<h2 style='color:#666;font-size:1.5em'>Nineties Radio</h2>
<div id=info_nineties>
<div id=pinfo_nineties style='height:5vh;'>
<div style='float:left;width:8vw;height:8vw;background-image:url(images/art_nineties.jpg?=1257644787),url(../automation/images/fanart.jpg);vertical-align:middle;background-size:cover;border-radius:8vw;display:inline-block'></div>
<p style='line-height:6vw;width:80vw;float:left;font-size:.75em;margin:5px;display:inline-block'>Nada Surf - Popular</p>
</div></div></div>
<div class=firstcont  id=kitchen5>
<h2 style='color:#333'>Kitchen
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(kcont5)'></i>
</h2>
<div id=kcont5 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/kitchenstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/kitchenplay.sh http://192.168.1.101:8000/Nineties');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('kitchenup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('kitchendown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=bathroom5>
<h2 style='color:#333'>Bathroom
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(bcont5)'></i>
</h2>
<div id=bcont5 class=controls>
<div class=cardContent><div class=circ onClick=musicControl('scripts/bathroomstop.sh');changeButton(this)><div class=cardIcons><i class='fa fa-stop play'></i></div></div>
<div class=circ onClick="musicControl('scripts/bathroomplay.sh http://192.168.1.101:8000/Nineties');changeButton(this)"><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=circ onClick=musicControl('bathroomup');changeButton(this)><div class=cardIcons><i class='fa fa-plus play'></i></div></div>
<div class=circ onClick=musicControl('bathroomdown');changeButton(this)><div class=cardIcons><i class='fa fa-minus play'></i></div></div>
</div>
</div>
</div>
<div class=firstcont id=living5>
<h2 style='color:#333'>Living Room
<i class='fa fa-ellipsis-v' style='float:right' onclick='expandControls(lcont5)'></i>
</h2>
<div id=lcont5 class=controls>
<div class=cardContent>
<div class=circ><div class=cardIcons><i class='fa fa-play play'></i></div></div>
<div class=cardBox style='width:10%'><div class=cardIcons>REMOTE</div></div>
</div>
</div>
</div>
</div>
</div>
<script>
var refresh;
$('#controls_Nineties').click(function() {
  $(this).find('i').toggle();
  $(this).find('#sound-on').toggle();
  $(this).toggleClass('whitey');
  function myVarnineties(){
		var numbers = Math.floor(Math.random() * 100000000);
		var state = player.networkState;
		var thisImage = document.getElementById('image_nineties');
		var info = document.getElementById('info_nineties');
		$(info).load('music.php #pinfo_nineties');
		$(thisImage).attr('src','images/nineties.jpg?=' + numbers);
		player.onstalled = function(){
			player.play();
		}
  }
if(player.paused == false){
	refresh = setInterval(function(){myVarnineties()}, 10000);
}else{
	clearInterval(refresh);
};
});
</script>
</div>
<audio id=player autostart=1>
<source id=ice src="" type="audio/mpeg">
</audio>

<div id=overlay></div>
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
