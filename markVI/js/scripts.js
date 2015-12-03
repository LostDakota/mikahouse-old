$('#burger').click(function(){
   $('#panel').css({
	"-webkit-transform":"translateX(80vw)",
	transition: '.25s'
  });
  $('body').css('position','fixed');
  $('#darken').css('display','block');
});

$('#darken').click(function(){
   $(this).css('display','none');
   $('#panel').css({
	"-webkit-transform":"translateX(0vw)",
	transition: '.25s'
   });
   $('body').css('position','relative');
});

window.requestAnimationFrame = window.requestAnimationFrame
  || window.webkitRequestAnimationFrame
  || function(f) {setTimeout(f, 1000/60)}

var hero = document.getElementById('hero')
var header = document.getElementById('header')
function parallax(){
	var scrolltop = window.pageYOffset
	hero.style.transform = "translate3d(0," + scrolltop * .5 + 'px' + ",0)"
	header.style.opacity = (1-(scrolltop/100))
}

window.addEventListener('scroll',function(){
	requestAnimationFrame(parallax)
	},false)

$(window).scroll(function(){
  var scrollTop = $(this).scrollTop();

  if($(window).scrollTop() > 40){
        $('#actionButton').css({
                "-webkit-transform":"translateY(200px)",
                transition: '.5s'
        });
  }else{
        $('#actionButton').css({
                "-webkit-transform":"translateY(0px)",
                transition: '.5s'
        });
  }
});

$(document).ready(function(){
	$('#hero').fadeIn();
	setInterval(function(){
        	$("#music_container").load(location.href + "#music_container");}
        ,10000);
});

$(window).load(function(){
	var path = window.location.pathname;
	var filename = path.substring(path.lastIndexOf("/") + 1, path.lastIndexOf("."));
	var navDiv = document.getElementById(filename);
	$(navDiv).css("background-color","#EEE");
});

function changeOrange(element){
        $(element).find('.cardIcons').css('color','#FFF');
        $(element).css({
                backgroundColor: '#FF5722',
		boxShadow: '1px 1px 5px #666',
                transition: '.5s'
        });
        setInterval(function(){
                $(element).find('.cardIcons').css('color','#666');
                $(element).css('background-color','white');
		$(element).css('box-shadow','none');}
        ,1000);
}

function changeButton(element){
        $(element).find('.cardIcons').css('color',"#FFF");
        $(element).css({
                backgroundColor: '#FF5722',
		boxShadow: '1px 1px 5px #666',
                transition: '.5s'
        });
        setInterval(function(){
                $(element).find('.cardIcons').css('color',"#444");
                $(element).css('background-color',"#AAA");
		$(element).css('box-shadow','none');}
        ,1000);
}

function expandControls(param){
	$(param).stop().fadeToggle("fast");
}

function updateValue(elementId){
        $.ajax({
           url: 'db.php',
           dataType: 'text',
           type: 'POST',
           data: ({value:elementId}),
        })
}

function motionOverride(overrideId){
        $.ajax({
           url: 'motion.php',
           dataType: 'text',
           type: 'POST',
           data: ({value:overrideId}),
        })
}

function deleteReminder(elementId){
        $.ajax({
           url: 'remCompleted.php',
           dataType: 'text',
           type: 'POST',
           data: ({value:elementId}),
        })
}

function musicControl(command){
//      document.getElementById(this).css("background-color","orange");
        $.ajax({
                url: './musicControl.php',
                dataType: 'text',
                type: 'POST',
                data: {command:command},
                success: function(){
                        alert("This is what I'm getting \: " + command + ".");
                }
        });
}

function stationFunction(station){
        window.scrollTo(0,0);
        $('.card').hide();
        $('#footer').hide();
        $('#hero').hide();
        $('#header').hide();
        switch (station){
                case "1":
                        $('#ices').fadeIn(200);
                        break;
                case "2":
                        $('#country').fadeIn(200);
                        break;
                case "3":
                        $('#billy').fadeIn(200);
                        break;
                case "4":
                        $('#latestTracks').fadeIn(200);
                        break;
                case "5":
                        $('#nineties').fadeIn(200);
                        break;
                case "6":
                        $('#k105').fadeIn(200);
                        break;
                default:
                        alert("This one is not set");
                }
}

function closeIt(which){
        $(which).hide();
        $('#footer').show();
        $('.card').show();
        $('#hero').show();
        $('#header').show();
}
function moveIt(someElement){
        var whichOne = document.getElementById(someElement);
        setInterval(function(){
                $(whichOne).find("#bar1").animate({height: Math.floor(Math.random() * 20)});
                $(whichOne).find("#bar2").animate({height: Math.floor(Math.random() * 30)});
                $(whichOne).find("#bar3").animate({height: Math.floor(Math.random() * 25)});}
                ,300);
}
function playStation(station){
        var theStation = /streamtheworld/g;
        var wqmx = theStation.test(station);
        var player = document.getElementById('player');
        if (wqmx == true) {
                $(player).find('#ice').attr('type', 'audio/mp4');
        }else{
                $(player).find('#ice').attr('type', 'audio/mp3');
        }
        $(player).find('#ice').attr('src', station);
        if (player.paused == false) {
                player.pause();
        } else {
                player.load();
                player.play();
        }
        player.addEventListener("ended", function(){
                player.load();
                player.play();
        }, false);
}

$(document).ready(function(){

        $('#power').click(function(){

                $.ajax({
                        url: 'wear/tv.php',
                        success: function()
                        {
                                document.location.reload();
                        }
                });
        });

        $('#remote').click(function(){
                $.ajax({
                        url:'../index.html',
                        success: function()
                        {
                                alert("Opening Yatse remote");
                        }
                });
        });

        $('#override').click(function(){
                $.ajax({
                        //url:'./atoggle.php',
                        success: function()
                        {
                                $('#blur').css("display","none");
                        }
                });
        });

        $('#old').click(function(){

                $.ajax({
                        url: 'ajaxphp/mineOld.php',
                        success: function()
                        {
                                $('#old').css("background-color","#FF5722");
                                $('#oldtext').css("color","#FFF");
                        }
                });
        });

        $('#new').click(function(){

                $.ajax({
                        url: 'ajaxphp/mineNew.php',
                        success: function()
                        {
                                $('#new').css("background-color","#FF5722");
                                $('#newtext').css("color","#FFF");
                        }
                });
        });

        $('#pandora').click(function(){

                $.ajax({
                        url: 'ajaxphp/radio.php',
                        success: function()
                        {
                                $('#pandora').css("background-color","#FF5722");
                                $('#pandoratext').css("color","#FFF");
                        }
                });
        });
});

function submitForm(action){
        document.getElementById('form').action = action;
        document.getElementById('form').submit();
}

$('#actionButton').on('click', function(){
        $('.fa-pencil,.fa-bug').css({
                display: 'none',
                transition: '.25s'
        });
        $(this).css({
                right: '0',
                top: '15vh',
                transform: 'scale(100,100)',
                backgroundColor: '#fff',
                borderRadius: '0px',
                transition: '1s',
        });
        var div = document.getElementById('overlay');
        setTimeout(function(){
                div.style.display = 'block';
        },300);
});
$('#close').click(function(){
        $("#actionButton").css({
                width: "55px",
                height: "55px",
                top: "80vh",
                right: "20px",
                borderRadius: '100px',
                transform: 'scale(1,1)',
                transition: '.5s',
                backgroundColor: '#FF5722'
        });
        var div = document.getElementById('overlay');
        div.style.display = 'none';
        setTimeout(function(){
                $('.fa-pencil,.fa-bug').css({
                        display: 'block',
                        transition: '.25s'
                });
        },500);
        $(this).find('.cardIcons').css('color','#FF5722');

});

$(document).ready(function(){
        jQuery('#completed').click(function(){
           $('#f_submit').trigger("click");
           $(this).css("background-color","#FF5722");
        });
        jQuery('#all').click(function(){
           $(this).css("background-color","#FF5722");
        });
});

$(':input').focus(function(){
    var top = $(this).offset().top ;
    if (top < 500){
        $('#reminder').css({
                "transform":"translateY(-" + (top/2) + "px)",
                transition: '1s'
        });
    }
});
$(':input').focusout(function(){
        $('#reminder').css({
                "transform":"translateY(0px)",
                transition: '1s'
        });
});

function imgError(image){
        image.onerror = "";
        motionCapture = document.getElementById('motionCapture');
        $(motionCapture).hide();
        return true;
}
$('#eventLink').on('click', function(){
        $('#events').css("background-color","#FF5722");
        $('#events').find('.cardIcons').css('color','#FFF');
        $('#blur').css("display","block");
        window.scrollTo(0,0);
});
$('#override').on('click', function(){
        $('#override').css("background-color","#FF5722");
        $('#override').css("background-color","#FF5722");
        $('#blur').css("display","block");
});
