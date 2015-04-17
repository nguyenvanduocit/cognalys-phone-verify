<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 04/17/15
 * Time: 6:51 AM
 */

namespace Cognalys\Response;


abstract class SuccessResponse extends Response
{
    protected $status;
    protected $mobile;
    protected $otp_start;
    protected $codes;

    public function get_status()
    {
        return $this->status;
    }

    public function get_codes()
    {
        return $this->codes;
    }

    public function get_message()
    {
        return $this->status;

    }
}