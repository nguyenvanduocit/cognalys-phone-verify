<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 04/17/15
 * Time: 6:14 AM
 */

namespace Cognalys\Response;


abstract class Response implements ResponseInterface{

    public function __construct(array $options = array()){
        $this->handleOption($options);
    }

    /**
     * Handle all option to it's self properties
     * @param array $options
     */
    public function handleOption(array $options = array()){
            foreach($this as $property_name => $property_values){
                if(isset($options[$property_name])){
                    $this->$property_name = $options[$property_name];
                }
            }
    }
}