<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 04/17/15
 * Time: 6:10 AM
 */

namespace Cognalys\Response;


interface ResponseInterface {
    public function get_status();
    public function get_codes();
    public function get_message();
}