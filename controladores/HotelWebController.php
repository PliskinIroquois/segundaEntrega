<?php

class HotelWebController {

    private $requestMethod;

    public function __construct($requestMethod) {
        if ($requestMethod === 'POST') {
            $this->requestMethod = Request::POST;
        } else {
            $this->requestMethod = Request::GET;
        }
    }

    public function showWebList() {
        $hoteles = Hotel::findAll();
        require_once ROOT_PATH . '/web/hotel/index.php';//chg to show top 5 rand list
    }
    
    public function showBoth(){//muestra ambos tours y hoteles
    	
    	$hoteles=Hotel::findRandTop5();
    	
    	
    	$tours=Tour::findRandTop5();
    	
    	require_once ROOT_PATH . '/web/index.php';    	
    }
    
    public function show($id) {
    	$hotel = Hotel::find($id);
    	require_once ROOT_PATH . '/web/hotel/show.php';
    }
    
    public function show2($id) {
    	$hotel = Hotel::find($id);
    	require_once ROOT_PATH . '/web/hotel/show2.php';
    }

  
    public function showMainPage(){
    	header('Location: ' . WEB_PATH . '/index.html');
    }
}
