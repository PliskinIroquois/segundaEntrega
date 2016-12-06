<?php

/**
 * Description of Request
 *
 * @author oscarmatinezmora
 */
class Request {
    
    private $dataRequest;
    private $id;
    const POST = 'POST';
    const GET = 'GET';
    
    public function __construct($dataRequest) {
        $this->dataRequest = $dataRequest;
    }
    
    public function input($inputName){
        $value = null;
        if(isset($this->dataRequest[$inputName])){
            $value = $this->dataRequest[$inputName];
        }
        return $value;
    }
    
}
