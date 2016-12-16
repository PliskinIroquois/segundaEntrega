<?php

class HotelController {

    private $requestMethod;

    public function __construct($requestMethod) {
        if ($requestMethod === 'POST') {
            $this->requestMethod = Request::POST;
        } else {
            $this->requestMethod = Request::GET;
        }
    }

    public function index() {
        $hoteles = Hotel::findAll();
        require_once ROOT_PATH . '/vistas/hotel/index.php';
    }

    public function show($id) {
        $hotel = Hotel::find($id);
        require_once ROOT_PATH . '/vistas/hotel/show.php';
    }

    public function create(Request $request) {
        if ($this->requestMethod == Request::POST) {
            $hotel = new Hotel();
            $hotel->nombre = $request->input('nombre');
            $hotel->descripcion = $request->input('descripcion');
            $hotel->estrellas = $request->input('estrellas');
            //$hotel->estrellas = (int)$hotel->estrellas;
            $hotel->ciudad = $request->input('ciudad');
            $hotel->direccion = $request->input('direccion');
            $hotel->telefono = $request->input('telefono');
            $hotel->correo = $request->input('correo');
            $hotel->foto = $request->input('file');
            
            if( !empty( $_FILES['file']['name'] ) ){
            	$foto = date('ymdhis') . '-' . strtolower($_FILES['file']['name']);
            	move_uploaded_file ($_FILES['file']['tmp_name'], 'C:\UwAmp\www\segundaEntrega\uploads/' . $foto);
            
            	$hotel->foto = $foto;
            	
            }
            
            $hotel->save();
            // Redirige a pagina index de Persona
            header('Location: ' . WEB_PATH . '/hotel.php?action=index');
        } else {
            require_once ROOT_PATH . '/vistas/hotel/create.php';
        }
    }

    public function edit($id, Request $request) {
        $hotel = Hotel::find($id);
        if ($this->requestMethod == Request::POST) {
            $hotel->nombre = $request->input('nombre');
            $hotel->descripcion = $request->input('descripcion');
            $hotel->estrellas = $request->input('estrellas');
            //$hotel->estrellas = (int)$hotel->estrellas;
            $hotel->ciudad = $request->input('ciudad');
            $hotel->direccion = $request->input('direccion');
            $hotel->telefono = $request->input('telefono');
            $hotel->correo = $request->input('correo');
            $hotel->foto = $request->input('file');
            
            if( !empty( $_FILES['file']['name'] ) ){
            	$foto = date('ymdhis') . '-' . strtolower($_FILES['file']['name']);
            	move_uploaded_file ($_FILES['file']['tmp_name'], 'C:\UwAmp\www\segundaEntrega\uploads/' . $foto);
            
            	$hotel->foto = $foto;
            	 
            }
            $hotel->save();
            header('Location: ' . WEB_PATH . '/hotel.php?action=index');
        } else {
            require_once ROOT_PATH . '/vistas/hotel/edit.php';
        }
    }

    public function delete($id) {
        $hotel = Hotel::find($id);
        $hotel->delete();
        header('Location: ' . WEB_PATH . '/hotel.php?action=index');
        // Redirige a pagina index de Persona
    }

}
