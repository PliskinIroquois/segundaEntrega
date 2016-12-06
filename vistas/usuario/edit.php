<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Crear nuevo Tour</div>
        <div class="panel-body">
            <div class="form-style-2" role="form">
                <form action="<?php echo (WEB_PATH . '/usuario.php?action=edit&id=' . $usuario->id) ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $usuario->id ?>" />
                    <label for="nombre">
                        <span>Nombre <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="nombre" value="<?php echo $usuario->nombre; ?>" />
                    </label>
                    <label for="apellidos">
                        <span>Apellidos <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="apellidos" value="<?php echo $usuario->apellidos; ?>" />
                    </label>
                    <label for="correo">
                        <span>Correo <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="correo" value="<?php echo $usuario->correo; ?>" />
                    </label>
                    <label for="telefono">
                        <span>Telefono <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="telefono" value="<?php echo $usuario->telefono; ?>" />
                    </label>
                    <label for="usuario">
                        <span>Usuario <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="usuario" value="<?php echo $usuario->usuario; ?>" />
                    </label>
                    <label for="password">
                        <span>Clave <span class="required">*</span></span>
                        <input type="password" class="form-control input-field" type="password" name="password" value="" />
                    </label>
                    <label for="es_admin">
                        <span>Tipo de Usuario <span class="required">*</span></span>
                        <select name="es_admin">
                            <option value="0" <?php if ($usuario->es_admin == 0): ?>selected="selected"<?php endif; ?>>Gestor de Contenido</option>
                            <option value="1" <?php if ($usuario->es_admin == 1): ?>selected="selected"<?php endif; ?>>Usuario administrador</option>
                        </select>
                    </label>
                    <p>
                        <input type="submit" value="Guardar" class="btn btn-success" />
                        <a href="<?php echo (WEB_PATH . '/usuario.php') ?>">
                            <input type="button" value="Cancelar" class="btn btn-success" />
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>
