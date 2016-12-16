
<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
?>


  <div class="container">
   <h1 class="formuh1">Contacto rapido.</h1>
    <form id="form1" class="well col-lg-12" action="<?php echo (WEB_PATH . '/contacto.php?action=captura') ?>" method="post" name="form1">
      <div class="row">
       <div class="col-lg-6">
        <label>Nombre*</label> <input id="Nombre" class="form-control" type="text" name="Nombre" /> 
        <label>Email*</label> <input id="Email" class="form-control" type="email" name="Email" />
        <label>Asunto*</label> <input id="Asunto" class="form-control" type="text" name="Asunto" />
       </div>
       <div class="col-lg-6">
        <label>Apellidos*</label> <input id="Apellidos" class="form-control" type="text" name="Apellidos" />
        <label>Telefono*</label> <input id="Telefono" class="form-control" type="text" name="Telefono" /> 
       </div>
        <div class="col-lg-6"><label>Mensaje*</label> 
         <textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
        </div>
        <div><button class="btn btn-default pull-right" type="submit">Enviar</button></div>
      </div>
    </form>
    <table> <tr> <a href= WEB_PATH . '/contacto.php?action=index'>
            <button class="btn btn-success">Menu Principal</button>
        </a></tr></table>
  </div>
<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>