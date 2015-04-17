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
            if('failed' === $options['status']){
                return new ErrorResponse($options);
            }
            else{
                if(isset($options['keymatch'])){
                    return new OTPResponse($options);
                }
                elseif(isset($options['message']))
                {
                    return new VerifyResponse($options);
                }
            }
            throw new \Exception('Unknow exception');
        }
        else{
            throw new \InvalidArgumentException('Missing status argument');
        }
    }
}