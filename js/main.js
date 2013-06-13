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
		   console.log('Retrieved profile for:' + resp.displayName);
		   $('#name').html(resp.displayName);;
		   $('#revokeButton').show();
		   $('#loud').removeAttr('disabled')
		 });
		});
	} else if (authResult['error']) {
		// There was an error.
		// Possible error codes:
		//   "access_denied" - User denied access to your app
		//   "immediate_failed" - Could not automatically log in the user
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
			$('#revokeButton').hide();
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
	var moment = {
	  'type' : 'http://schemas.google.com/AddActivity',
	  'target' : {
	    'url' : 'http://www.whales.com.ng/plussignin/index.html'
	  }
	};
	
	var request = gapi.client.request({
	  'path' : 'plus/v1/people/me/moments/vault',
	  'method' : 'POST',
	  'body' : JSON.stringify(moment)
	});
	
	request.execute(function(result) {
	  console.log(result);
	});
}

// Could trigger the disconnect on a button click
$('#revokeButton').click(disconnectUser);
