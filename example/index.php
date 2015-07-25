<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/EcwidOAuth2Provider.php';


/*
 * Initalize Ecwid oAuth2 client.
 * Parameters:
 *   - clientId: Your application ID, e.g. '1234567890abcdef'
 *   - clientSecret: Your application secret key, e.g. '1234567890abcdef1234567890abcdef'
 *   - redirectUri: Redirect URL – an URL where Ecwid sends the user after they authorizes your application
 *   - scopes: Access scopes your application is asking for
 * 
 * For the details on these paramteres, please refer to the Ecwid API documentation: http://api.ecwid.com/#authentication
 */
$provider = new Ecwid\OAuth2Client\EcwidOAuth2Provider([
    'clientId'     => 'yourclientid',
    'clientSecret' => 'yoursecretkey',
    'redirectUri'  => 'http://www.yourappwebsite.com/callback.php',
    'scopes'        => [
        'read_profile', 
        'read_catalog', 
        'update_catalog',
        'create_catalog',
        'read_orders'
    ],
]);


/*
 * Use the oAuth client code to authorize app and get the token
 */
if (isset($_GET['code'])) {
    // Try to get an access token (using the authorization code grant)
    $token = $provider->getAccessToken('authorizationCode', [
        'code' => $_GET['code']
    ]);

    $accessToken = $token->accessToken;

    echo $accessToken;

} else if (isset($_GET['error'])) {
    // The user hasn't authorized the app (the "Cancel" button was clicked). Display error.
    echo $_GET['error'];
    
} else {
    // If we don't have an authorization code then get one
    header('Location: '.$provider->getAuthorizationUrl());
    
}
?>