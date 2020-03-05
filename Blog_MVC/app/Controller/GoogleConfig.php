<?php
  namespace Controller;
  use Google_Client;
  use Google_Service_Oauth2;
  class GoogleConfig {
    private $googleClient;

    function __construct($redirect_uri){
      $this->googleClient = new Google_Client();
      $this->googleClient->setAuthConfig('resources/credentials.json');
      $this->googleClient->addScope("email");
      $this->googleClient->addScope("profile");
      $this->googleClient->setRedirectUri($redirect_uri);
      
    }

    function createauthurl() {
      return $this->googleClient->createAuthUrl();
    }

    function returnclient() {
      return $this->googleClient;
    }

    function getserviceOauth2() {
      $objOAuthService = new Google_Service_Oauth2($this->googleClient);
      return $objOAuthService;
    }
  }