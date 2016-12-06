<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Crear nuevo Usuario</div>
        <div class="panel-body">
            <div class="form-style-2" role="form">
                <form action="<?php echo (WEB_PATH . '/usuario.php?action=create') ?>" method="post">
                    <label for="nombre">
                        <span>Nombre <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="nombre"  />
                    </label>
                    <label for="nombre">
                        <span>Apellidos <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="apellidos" />
                    </label>
                    <label for="nombre">
                        <span>Correo <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="correo" />
                    </label>
                    <label for="nombre">
                        <span>Telefono <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="telefono" />
                    </label>
                    <label for="nombre">
                        <span>Usuario <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="usuario" />
                    </label>
                    <label for="nombre">
                        <span>Clave <span class="required">*</span></span>
                        <input type="password" class="form-control input-field" type="password" name="password" />
                    </label>
                    <label for="es_admin">
                        <span>Tipo de Usuario <span class="required">*</span></span>
                        <select name="es_admin">
                            <option value="0">Gestor de Contenido</option>
                            <option value="1">Usuario administrador</option>
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
