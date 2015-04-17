<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 04/17/15
 * Time: 6:56 AM
 */

namespace Cognalys\Response;


class ResponseFactory {
    public static function make(array $options){
        if(isset($options['status'])){
            if('')
        }
        else{
            throw new \InvalidArgumentException("Missing status argument");
        }
    }
}