<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
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
            <p>
                <a href="<?php echo (WEB_PATH . '/tour.php') ?>">
                    <input type="button" value="Volver" class="btn btn-success" />
                </a>
                <a href="<?php echo (WEB_PATH . '/tour.php?action=edit&id=' . $tour->id) ?>">
                    <input type="button" value="Editar" class="btn btn-primary" />
                </a>
                <a href="<?php echo (WEB_PATH . '/tour.php?action=delete&id=' . $tour->id) ?>">
                    <input type="button" value="Eliminar" class="btn btn-danger" />
                </a>
            </p>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
