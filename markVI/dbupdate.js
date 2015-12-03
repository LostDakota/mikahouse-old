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
//	document.getElementById(this).css("background-color","orange");
	$.ajax({
		url: 'musicControl.php',
		dataType: 'text',
		type: 'POST',
		data: {command:command},
//		success: function(){
//			alert("This is what I'm getting \: " + command + ".");
//		}
	});	
}
