function signinCallback(authResult) {
	if (authResult['access_token']) {
		// Successfully authorized
		// Hide the sign-in button now that the user is authorized, for example:
		document.getElementById('signinButton').setAttribute('style', 'display: none');

		//console.log('access-token: ' + authResult['access_token']);
		//console.log('Expiry: ' + authResult['expires_in']);
		
		gapi.client.load('plus','v1', function(){
		 var request = gapi.client.plus.people.get({
		   'userId': 'me'
		 });
		 request.execute(function(resp) {
		 	console.log(resp);
		   //console.log('Retrieved profile for:' + resp.displayName);
		   $('#name').html(resp.displayName);
		   $('#profile-img').attr('src', resp.image.url+'&sz=30');
		   $('#revokeButton').show();
		   $('#profile').show();
		   $('#loud').removeAttr('disabled')
		   // var options = {
		    // contenturl: 'http://gdays.whales.com.ng/',
		    // contentdeeplinkid: '',
		    // clientid: '868611294351.apps.googleusercontent.com',
		    // cookiepolicy: 'single_host_origin',
		    // prefilltext: 'Im Learning about G+ at the gDays in Nigeria #gDaysNigeria #gdg',
		    // calltoactionlabel: 'LEARN',
		    // calltoactionurl: 'http://gdays.whales.com.ng/',
		    // calltoactiondeeplinkid: '/pages/create'
		  // };
		  // // Call the render method when appropriate within your app to display
		  // // the button.
		  // gapi.interactivepost.render('sharePost', options);
		  // console.log('rendered');
		 });
		});
	} else if (authResult['error']) {
		// There was an error.
		// Possible error codes:
		//   "access_denied" - User denied access to your app
		//   "immediate_failed" - Could not automatically log in the user
		$('#profile').hide();
		$('#signinButton').show();
		
		console.log('There was an error: ' + authResult['error']);
	}
}

function disconnectUser(access_token) {
	var revokeUrl = 'https://accounts.google.com/o/oauth2/revoke?token=' + access_token;
	console.log("access-token-disconnect: " + access_token);
	// Perform an asynchronous GET request.
	$.ajax({
		type : 'GET',
		url : revokeUrl,
		async : false,
		contentType : "application/json",
		dataType : 'jsonp',
		success : function(nullResponse) {
			// Do something now that user is disconnected
			// The response is always undefined.
			console.log("logout: success");
			$('#signinButton').show();
			$('#loud').attr("disabled","disabled");
			//$('#revokeButton').hide();
			$('#profile').hide();
			$('#name').html("???");
		},
		error : function(e) {
			// Handle the error
			console.log(e);
			// You could point users to manually disconnect if unsuccessful
			// https://plus.google.com/apps
		}
	});
}

function loudIt(){
	// var moment = {
	  // 'type' : 'http://schemas.google.com/AddActivity',
	  // 'target' : {
	    // 'url' : 'http://www.whales.com.ng/plussignin/index.html'
	  // }
	// };
// 	
	// var request = gapi.client.request({
	  // 'path' : 'plus/v1/people/me/moments/vault',
	  // 'method' : 'POST',
	  // 'body' : JSON.stringify(moment)
	// });
// 	
	// request.execute(function(result) {
	  // console.log(result);
	// });
}

function session(i){
	console.log(i);
	$.getJSON('sessions.json', function(data) {
		console.log(data); 
		var sess = data.session[i];
		console.log(sess.title);
		$('#title').html(sess.title);
		$('#description').html(sess.description);
		$('#icon').attr('src', 'img/'+sess.icon);
		$('#cover').attr('src', 'img/'+sess.cover);
		$('#loud').attr('data-prefilltext', sess.share);
		
	});
}


$(document).ready(function(){
	$('#revokeButton').click(disconnectUser);
	session(0);
	$('#board a').click(function(){
		var attr = $(this).attr('data-attr');
		//console.log(attr);
		// For some browsers, `attr` is undefined; for others,
		// `attr` is false.  Check for both.
		if (typeof attr !== 'undefined' && attr !== false) {
		    // ...
		    //var i = $(this).attr('data-attr');
			session(attr-1);
			//console.log(attr-1);
		}
		
	});
});

