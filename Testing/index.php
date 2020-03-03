<?php
include('test.php');
if (isset($_GET['code'])) {
	$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

if (!isset($token['error'])) {
	$google_client->setAccessToken(($token['access_token']));
}

$session['access_token'] = $token['access_token'];

$google_service = new Google_Service_Oauth2($google_client);
$data = $google_service->userinfo->get();

print_r($data);
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
</head>

<body>
	<div id="my-signin2"></div>
	<script>
		function onSuccess(googleUser) {
			console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
		}

		function onFailure(error) {
			console.log(error);
		}

		function renderButton() {
			gapi.signin2.render('my-signin2', {
				'scope': 'profile email',
				'width': 240,
				'height': 50,
				'longtitle': true,
				'theme': 'dark',
				'onsuccess': onSuccess,
				'onfailure': onFailure
			});
		}
	</script>

	<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>

</html>