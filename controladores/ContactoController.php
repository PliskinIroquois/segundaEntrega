<?php
require_once 'controladores/UsuarioController.php';
require_once 'modelos/Usuario.php';
class ContactoController {

	private $requestMethod;

	public function __construct($requestMethod) {
		if ($requestMethod === 'POST') {
			$this->requestMethod = Request::POST;
		} else {
			$this->requestMethod = Request::GET;
		}
	}
	
	public function index() {
		require_once ROOT_PATH . '/web/index.php';
	}
	
	public function create() {
		require_once ROOT_PATH . '/formulario/formulario.php';
	}

	public function captura() {
		if ($_POST) {
			$contacto = new Contacto();
			$contacto->nombre = $_POST['Nombre'];
			$contacto->apellidos = $_POST['Apellidos'];
			$contacto->correo = $_POST['Email'];
			$contacto->telefono = $_POST['Telefono'];
			$contacto->asunto = $_POST['Asunto'];
			$contacto->mensaje = $_POST['Mensaje'];
			$contacto->enviar();

			header('Location: '.WEB_PATH . '../index.html');
		} else {
			require_once ROOT_PATH . '/formulario/formulario.html';
		}
	}

	public function showMainPage(){
		header('Location: ' . WEB_PATH . '/index.html');
	}


}
?>
