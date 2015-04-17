<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 04/17/15
 * Time: 6:01 AM
 */

namespace Cognalys;


interface ClientInterface {
    /**
     * @param $phone_number
     * @return string keymatch
     */
    public function otp_call($phone_number);

    /**
     * @param $otp
     * @return mixed
     */
    public function otp_verify($otp);
}