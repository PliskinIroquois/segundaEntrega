<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

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
            <p>
                <a href="<?php echo (WEB_PATH . '/hotel.php') ?>">
                    <input type="button" value="Volver" class="btn btn-success" />
                </a>
                <a href="<?php echo (WEB_PATH . '/hotel.php?action=edit&id=' . $hotel->id) ?>">
                    <input type="button" value="Editar" class="btn btn-primary" />
                </a>
                <a href="<?php echo (WEB_PATH . '/hotel.php?action=delete&id=' . $hotel->id) ?>">
                    <input type="button" value="Eliminar" class="btn btn-danger" />
                </a>
            </p>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
