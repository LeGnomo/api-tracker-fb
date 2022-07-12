<?php 

namespace App\Http\Controllers;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;

class FacebookController extends Controller
{


    private Facebook $fb ;

    public function __construct(){

        // $this->fb =  new Facebook([
        //     'app_id'  => '1030890940737463',
        //     'app_secret' => '4e88d4462274a4d8440df16e898eb87e',
        //     'default_graph_version' => 'v2.2'
        //     ]);

    }

    public  function getPosts (){
    /* PHP SDK v5.0.0 */
    /* make the API call */
    try {
        $face = new Facebook([
            'app_id'  => '1030890940737463',
            'app_secret' => '4e88d4462274a4d8440df16e898eb87e',
            'default_graph_version' => 'v2.2'
            ]);

    // Returns a `Facebook\FacebookResponse` object
    $helper = $face->getRedirectLoginHelper();


     $login = $helper->getLoginUrl('https://localhost/fb-callback.php');
     $token = $helper->getAccessToken();
     var_dump($helper);
     return"eae";

    $response = $face->get(
      '/{587799765889909}/feed',
      '{access-token}'
    );
  } catch(FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  //$graphNode = $response->getGraphNode();
  /* handle the result */

    }

    private function getToken(){

    }
}