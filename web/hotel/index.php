<link rel="shortcut icon" type="image/x-icon" href="images/hotel.ico" />
<meta charset="utf-8">
<title>Agencia de Viajes S.A</title>

<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';

//index web Hotel
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Hoteles</div>
    </div>
    <div class="crear-container">
     
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
                <th>Foto</th>
                
            </tr>
            <?php foreach ($hoteles as $hotel): ?>
                <tr>
                    <td>
                        <a href="hoteles.php?action=show&id=<?php echo $hotel->id; ?>">
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
                     	<a href="hoteles.php?action=show&id=<?php echo $hotel->id; ?>">
                        <img src="uploads/<?php echo $hotel->foto; ?>" style="width:45%;" />
                    </td>
                </tr>
                
            <?php endforeach; ?>
            <tr> <a href="hoteles.php?action=showMainPage">
            <button class="btn btn-success">Menu Principal</button>
        </a></tr>
        </table>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
