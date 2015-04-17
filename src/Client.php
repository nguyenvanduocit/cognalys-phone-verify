<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 04/17/15
 * Time: 5:51 AM
 */

namespace Cognalys;
use GuzzleHttp;

class Client implements ClientInterface
{
    /**
     * Constructor
     */
    protected $app_id;
    protected  $access_token;

    protected $base_url = 'https://www.cognalys.com';
    protected $api_version = 'v1';
    protected $otp_endpoint = 'otp';
    protected $otp_verify_endpoint = 'confirm';

    public function __construct($app_id,$access_token)
    {
        $this->app_id = $app_id;
        $this->access_token = $access_token;
    }
    protected function settup_http_client(){
        $http_client = new GuzzleHttp\Client();
    }
    /**
     * @param $phone_number
     * @return string keymatch
     */
    public function otp_call($phone_number)
    {
        $http_client = $this->settup_http_client();
    }

    /**
     * @param $otp
     * @return mixed
     */
    public function otp_verify($otp)
    {
        // TODO: Implement otp_verify() method.
    }
}