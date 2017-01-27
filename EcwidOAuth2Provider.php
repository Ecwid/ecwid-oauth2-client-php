<?php
namespace Ecwid\OAuth2Client;

use \League\OAuth2\Client\Token\AccessToken as AccessToken;

class EcwidOAuth2Provider extends \League\OAuth2\Client\Provider\AbstractProvider
{
    public function getBaseAuthorizationUrl()
    {
        return 'https://my.ecwid.com/api/oauth/authorize';
    }
    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://my.ecwid.com/api/oauth/token';
    }
    public function getResourceOwnerDetailsUrl(AccessToken $token){}
    protected function getDefaultScopes(){}
    protected function checkResponse(\Psr\Http\Message\ResponseInterface $response, $data){}
    protected function createResourceOwner(array $response, AccessToken $token){}
}


?>
