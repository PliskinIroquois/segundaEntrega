<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';

//Index web de tours
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Tours</div>
    </div>
    <div class="crear-container">
  
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
                        <a href="tours.php?action=show&id=<?php echo $tour->id; ?>"> <!-- cambiar -->
                            <?php echo ($tour->nombre); ?>
                        </a>
                    </td>
                    <td><?php echo $tour->descripcion; ?></td>
                    <td><?php echo $tour->empresa; ?></td>
                    <td><?php echo $tour->telefono; ?></td>
                    <td><?php echo $tour->correo; ?></td>
                                </tr>
            <?php endforeach; ?>
             <tr> <a href="tours.php?action=showMainPage">
            <button class="btn btn-success">Menu Principal</button>
        </a></tr>
        </table>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
