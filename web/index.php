<link rel="shortcut icon" type="image/x-icon" href="images/medical.ico" />
<meta charset="utf-8">
<title>Agencia de Viajes S.A</title>

<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';

//index todos!
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Hoteles y Tours</div>
    </div>
    <div class="crear-container">
     
    </div>
    <div class="user-index-container">
    	 <div class="panel-heading">Hoteles</div>
        <table width="100%" class="table table-striped table-bordered table-hover">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estrellas</th>
                <th>Ciudad</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                
            </tr>
            <?php foreach ($hoteles as $hotel): ?>
                <tr>
                    <td>
                        <a href="hoteles.php?action=show2&id=<?php echo $hotel->id; ?>">
                            <?php echo ($hotel->nombre); ?>
                        </a>
                    </td>
                    <td><?php echo $hotel->descripcion; ?></td>
                    <td><?php echo $hotel->estrellas; ?></td>
                    <td><?php echo $hotel->ciudad; ?></td>
                    <td><?php echo $hotel->direccion; ?></td>
                    <td><?php echo $hotel->telefono; ?></td>
                    <td><?php echo $hotel->correo; ?></td>
                </tr>
                
            <?php endforeach; ?>
            <tr> <a href="hoteles.php?action=showMainPage">
            <button class="btn btn-success">Menu Principal</button>
        </a></tr>
        </table>
         <div class="panel-heading">Tours</div>
       <table width="100%" class="table table-striped table-bordered table-hover">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Empresa que lo brinda</th>
                <th>Telefono de la empresa</th>
                <th>Correo</th>
            </tr>
            <?php foreach ($tours as $tour): ?>
                <tr>
                    <td>
                        <a href="tours.php?action=show2&id=<?php echo $tour->id; ?>"> <!-- cambiar -->
                            <?php echo ($tour->nombre); ?>
                        </a>
                    </td>
                    <td><?php echo $tour->descripcion; ?></td>
                    <td><?php echo $tour->empresa; ?></td>
                    <td><?php echo $tour->telefono; ?></td>
                    <td><?php echo $tour->correo; ?></td>
                                </tr>
            <?php endforeach; ?>
          
        </table>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
