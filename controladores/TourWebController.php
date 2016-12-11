<?php

class TourWebController {

    private $requestMethod;

    public function __construct($requestMethod) {
        if ($requestMethod === 'POST') {
            $this->requestMethod = Request::POST;
        } else {
            $this->requestMethod = Request::GET;
        }
    }

   public function showWebList(){
   		$tours= Tour::findAll();
   		require_once ROOT_PATH . '/web/tour/index.php';
   }
   public function showMainPage(){
   	header('Location: ' . WEB_PATH . '/index.html');
   }
   
   public function show($id) {
   	$tour = Tour::find($id);
   	require_once ROOT_PATH . '/web/tour/show.php';
   }
   
   public function show2($id) {
   	$tour = Tour::find($id);
   	require_once ROOT_PATH . '/web/tour/show2.php';
   }
    

}
