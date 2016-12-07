<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';

//este index es donde el usuario web visualizara los datos
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Tours</div>
    </div>
    <div class="crear-container">
        <a href="tour.php?action=create">
            <button class="btn btn-success">Crear Tour</button>
        </a>
    </div>
    <div class="user-index-container">
        <table width="100%" class="table table-striped table-bordered table-hover">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Empresa que lo brinda</th>
                <th>Telefono de la empresa</th>
                <th>Correo</th>

                <th></th>
            </tr>
            <?php foreach ($tours as $tour): ?>
                <tr>
                    <td>
                        <a href="tour.php?action=show&id=<?php echo $tour->id; ?>">
                            <?php echo ($tour->nombre); ?>
                        </a>
                    </td>
                    <td><?php echo $tour->descripcion; ?></td>
                    <td><?php echo $tour->empresa; ?></td>
                    <td><?php echo $tour->telefono; ?></td>
                    <td><?php echo $tour->correo; ?></td>
                    <td>
                        <a href="tour.php?action=edit&id=<?php echo $tour->id; ?>">Editar</a>
                        &nbsp; | &nbsp;
                        <a href="tour.php?action=delete&id=<?php echo $tour->id; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
