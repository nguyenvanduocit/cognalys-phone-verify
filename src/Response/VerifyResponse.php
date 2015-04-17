<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 04/17/15
 * Time: 6:20 AM
 */

namespace Cognalys\Response;


class VerifyResponse extends SuccessResponse
{
    protected $message;

    public function get_message(){
        return $this->message;
    }
    public function is_verified(){
        return $this->message == 'Verified';
    }
}