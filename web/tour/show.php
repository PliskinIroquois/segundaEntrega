<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';

//tour web show
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading"><?php echo $tour->nombre; ?></div>
        <div class="panel-body">
            <p><strong>Nombre: </strong><?php echo $tour->nombre; ?></p>
            <p><strong>Descripcion: </strong><?php echo $tour->descripcion; ?></p>
            <p><strong>Empresa que lo brinda: </strong><?php echo $tour->empresa; ?></p>
            <p><strong>Telefono de la empresa: </strong><?php echo $tour->telefono; ?></p>
            <p><strong>Correo de la empresa: </strong><?php echo $tour->correo; ?></p>
            <a href="hotel.php?action=show&id=<?php echo $tour->id; ?>">
            <img src="uploads/<?php echo $tour->foto; ?>" style="width:45%;" />
            <p>
                <a href="<?php echo (WEB_PATH . '/tours.php') ?>">
                    <input type="button" value="Volver" class="btn btn-success" />
                </a>
            </p>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>

