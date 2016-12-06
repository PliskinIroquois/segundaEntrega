<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading"><?php echo $usuario->nombre; ?></div>
        <div class="panel-body">
            <p><strong>Nombre: </strong><?php echo $usuario->nombre; ?></p>
            <p><strong>Apellidos: </strong><?php echo $usuario->apellidos; ?></p>
            <p><strong>Correo: </strong><?php echo $usuario->correo; ?></p>
            <p><strong>Usuario: </strong><?php echo $usuario->telefono; ?></p>
            <p><strong>Tipo de Usuario: </strong><?php if ($usuario->es_admin == 1): ?>Usuario administrador<?php else: ?>Gestor de Contenido<?php endif; ?></p>
            <p>
                <a href="<?php echo (WEB_PATH . '/usuario.php') ?>">
                    <input type="button" value="Volver" class="btn btn-success" />
                </a>
                <?php if (LoginController::getUsuario()->isAdmin()): ?>
                    <a href="<?php echo (WEB_PATH . '/usuario.php?action=edit&id=' . $usuario->id) ?>">
                        <input type="button" value="Editar" class="btn btn-primary" />
                    </a>
                    <a href="<?php echo (WEB_PATH . '/usuario.php?action=delete&id=' . $usuario->id) ?>">
                        <input type="button" value="Eliminar" class="btn btn-danger" />
                    </a>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
