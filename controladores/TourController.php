<?php

class TourController {

    private $requestMethod;

    public function __construct($requestMethod) {
        if ($requestMethod === 'POST') {
            $this->requestMethod = Request::POST;
        } else {
            $this->requestMethod = Request::GET;
        }
    }

    public function index() {
        $tours = Tour::findAll();
         require_once ROOT_PATH . '/vistas/tour/index.php';
    }

    public function show($id) {
        $tour = Tour::find($id);
        require_once ROOT_PATH . '/vistas/tour/show.php';
    }

    public function create(Request $request) {
        if ($this->requestMethod == Request::POST) {
            $tour = new Tour();
            $tour->nombre = $request->input('nombre');
            $tour->descripcion = $request->input('descripcion');
            $tour->empresa = $request->input('empresa');
            $tour->telefono = $request->input('telefono');
            $tour->correo = $request->input('correo');
            $tour->foto = $request->input('file');
            
            if( !empty( $_FILES['file']['name'] ) ){
            	$foto = date('ymdhis') . '-' . strtolower($_FILES['file']['name']);
            	move_uploaded_file ($_FILES['file']['tmp_name'], 'C:\UwAmp\www\segundaEntrega\uploads/' . $foto);
            
            	$tour->foto = $foto;
            	 
            }
            $tour->save();
            
            // Redirige a pagina index de Persona
           header('Location: ' . WEB_PATH . '/tour.php?action=index');
        } else {
            require_once ROOT_PATH . '/vistas/tour/create.php';
        }
    }

    public function edit($id, Request $request) {
        $tour = Tour::find($id);
        if ($this->requestMethod == Request::POST) {
            $tour->nombre = $request->input('nombre');
            $tour->descripcion = $request->input('descripcion');
            $tour->empresa = $request->input('empresa');
            $tour->telefono = $request->input('telefono');
            $tour->correo = $request->input('correo');
            $tour->foto = $request->input('file');
            
            if( !empty( $_FILES['file']['name'] ) ){
            	$foto = date('ymdhis') . '-' . strtolower($_FILES['file']['name']);
            	move_uploaded_file ($_FILES['file']['tmp_name'], 'C:\UwAmp\www\segundaEntrega\uploads/' . $foto);
            
            	$tour->foto = $foto;
            
            }
            $tour->save();
            header('Location: ' . WEB_PATH . '/tour.php?action=index');
        } else {
            require_once ROOT_PATH . '/vistas/tour/edit.php';
        }
    }

    public function delete($id) {
        $tour = Tour::find($id);
        $tour->delete();
        header('Location: ' . WEB_PATH . '/tour.php?action=index');
        // Redirige a pagina index de Persona
    }

}
