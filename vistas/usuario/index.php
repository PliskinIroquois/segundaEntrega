<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
//index de Usuarios
?>


<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Usuarios</div>
    </div>
    <div class="crear-container">
        <a href="usuario.php?action=create">
            <button class="btn btn-success">Crear Usuario</button>
        </a>
    </div>
    
    <div class="user-index-container">
        <table width="100%" class="table table-striped table-bordered table-hover">
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Tipo</th>
                <?php if (LoginController::getUsuario()->isAdmin()): ?>
                    <th></th>
                <?php endif; ?>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td>
                        <a href="usuario.php?action=show&id=<?php echo $usuario->id; ?>">
                            <?php echo ($usuario->nombre . ' ' . $usuario->apellidos); ?>
                        </a>
                    </td>
                    <td><?php echo $usuario->correo; ?></td>
                    <td><?php echo $usuario->telefono; ?></td>
                    <td><?php if ($usuario->es_admin == 1): ?>Usuario administrador<?php else: ?>Gestor de Contenido<?php endif; ?></td>
                    <?php if (LoginController::getUsuario()->isAdmin()): ?>
                        <td>
                            <a href="usuario.php?action=edit&id=<?php echo $usuario->id; ?>">Editar</a>
                            &nbsp; | &nbsp;
                            <a href="usuario.php?action=delete&id=<?php echo $usuario->id; ?>">Eliminar</a>
                        </td>
                    <?php endif; ?>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>

