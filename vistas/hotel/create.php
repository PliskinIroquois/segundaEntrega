<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Crear nuevo Hotel</div>
        <div class="panel-body">
            <div class="form-style-2" role="form">
                <form action="<?php echo (WEB_PATH . '/hotel.php?action=create') ?>" method="post">
                    <label for="nombre">
                        <span>Nombre <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="nombre" />
                    </label>
                    <label for="descripcion">
                        <span>Descripcion <span class="required">*</span></span>
                        <textarea class="form-control textarea-field" name="descripcion"></textarea>
                    </label>
                    <label for="estrellas">
                        <span>Estrellas <span class="required">*</span></span>
                        <select name="estrellas">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </label>
                    <label for="ciudad">
                        <span>Ciudad <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="ciudad" />
                    </label>
                    <label for="direccion">
                        <span>Direccion <span class="required">*</span></span>
                        <textarea class="form-control textarea-field" name="direccion"></textarea>
                    </label>
                    <label for="telefono">
                        <span>Telefono <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="telefono"" />
                    </label>
                    <label for="correo">
                        <span>Correo <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="correo" />
                    </label>
                    <p>
                        <input type="submit" value="Crear Hotel" class="btn btn-success" />
                        <a href="<?php echo (WEB_PATH . '/hotel.php'); ?>">
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