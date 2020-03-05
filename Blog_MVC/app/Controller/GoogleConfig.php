<?php
  namespace Controller;
  use Google_Client;
  use Google_Service_Oauth2;
  
  /**
   * GoogleConfig class handles the connection with the google client.
   */
  class GoogleConfig {
    private $googleClient;

    /**
     * Constructor of GoogleConfig Class. It configure the Google client.
     *
     * @param [String] $redirect_uri the redirect uri for the google client.
     */
    function __construct($redirect_uri){
      $this->googleClient = new Google_Client();
      $this->googleClient->setAuthConfig('resources/credentials.json');
      $this->googleClient->addScope("email");
      $this->googleClient->addScope("profile");
      $this->googleClient->setRedirectUri($redirect_uri);
      
    }

    /**
     * Return the auth url.
     *
     * @return String AuthUrl
     */
    function createauthurl() {
      return $this->googleClient->createAuthUrl();
    }

    /**
     * Return the Google_Client Object
     *
     * @return Google_Client Object
     */
    function returnclient() {
      return $this->googleClient;
    }

    /**
     * Return Google auth Object
     *
     * @return Google_Service_Oauth2 object
     */
    function getserviceOauth2() {
      $objOAuthService = new Google_Service_Oauth2($this->googleClient);
      return $objOAuthService;
    }
  }