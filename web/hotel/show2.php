<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
//require_once ROOT_PATH . '/vistas/_commons/navigation.php';
//Hotel web show
?>
<form method="post" action="hoteles.php?action=showBoth">
<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading"><?php echo $hotel->nombre; ?></div>
        <div class="panel-body">
            <p><strong>Nombre: </strong><?php echo $hotel->nombre; ?></p>
            <p><strong>Descripcion: </strong><?php echo $hotel->descripcion; ?></p>
            <p><strong>Estrellas: </strong><?php echo $hotel->estrellas; ?></p>
            <p><strong>Ciudad: </strong><?php echo $hotel->ciudad; ?></p>
            <p><strong>Direccion: </strong><?php echo $hotel->direccion; ?></p>
            <p><strong>Telefono: </strong><?php echo $hotel->telefono; ?></p>
            <p><strong>Correo: </strong><?php echo $hotel->correo; ?></p>
            <img src="uploads/<?php echo $hotel->foto; ?>" style="width:45%;" />
            <p>
                
                    <input type="submit" value="Volver" class="btn btn-success" />
                </a>
               
            </p>
        </div>
    </div>
</div>
</form>
<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>