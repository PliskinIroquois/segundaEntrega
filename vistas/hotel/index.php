<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Hoteles</div>
    </div>
    <div class="crear-container">
        <a href="hotel.php?action=create">
            <button class="btn btn-success">Crear Hotel</button>
        </a>
    </div>
    <div class="user-index-container">
        <table width="100%" class="table table-striped table-bordered table-hover">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estrellas</th>
                <th>Ciudad</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th></th>
            </tr>
            <?php foreach ($hoteles as $hotel): ?>
                <tr>
                    <td>
                        <a href="hotel.php?action=show&id=<?php echo $hotel->id; ?>">
                            <?php echo ($hotel->nombre); ?>
                        </a>
                    </td>
                    <td><?php echo $hotel->descripcion; ?></td>
                    <td><?php echo $hotel->estrellas; ?></td>
                    <td><?php echo $hotel->ciudad; ?></td>
                    <td><?php echo $hotel->direccion; ?></td>
                    <td><?php echo $hotel->telefono; ?></td>
                    <td><?php echo $hotel->correo; ?></td>
                    <td>
                        <a href="hotel.php?action=edit&id=<?php echo $hotel->id; ?>">Editar</a>
                        &nbsp; | &nbsp;
                        <a href="hotel.php?action=delete&id=<?php echo $hotel->id; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
