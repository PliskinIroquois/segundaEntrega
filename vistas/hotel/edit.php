<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Editar Hotel: <?php echo $hotel->nombre; ?></div>
        <div class="panel-body">
            <div class="form-style-2" role="form">
                <form action="<?php echo (WEB_PATH . '/hotel.php?action=edit&id=' . $hotel->id) ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $hotel->id ?>" />
                    <label for="nombre">
                        <span>Nombre <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="nombre" value="<?php echo $hotel->nombre; ?>" />
                    </label>
                    <label for="descripcion">
                        <span>Descripcion <span class="required">*</span></span>
                        <textarea class="form-control textarea-field" name="descripcion"><?php echo $hotel->descripcion; ?></textarea>
                    </label>
                    <label for="estrellas">
                        <span>Estrellas <span class="required">*</span></span>
                        <select name="estrellas">
                            <option value="1" <?php if ($hotel->estrellas == 1): ?>selected="selected"<?php endif; ?>>1</option>
                            <option value="2" <?php if ($hotel->estrellas == 2): ?>selected="selected"<?php endif; ?>>2</option>
                            <option value="3" <?php if ($hotel->estrellas == 3): ?>selected="selected"<?php endif; ?>>3</option>
                            <option value="4" <?php if ($hotel->estrellas == 4): ?>selected="selected"<?php endif; ?>>4</option>
                            <option value="5" <?php if ($hotel->estrellas == 5): ?>selected="selected"<?php endif; ?>>5</option>
                        </select>
                    </label>
                    <label for="ciudad">
                        <span>Ciudad <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="ciudad" value="<?php echo $hotel->ciudad; ?>" />
                    </label>
                    <label for="direccion">
                        <span>Direccion <span class="required">*</span></span>
                        <textarea class="form-control textarea-field" name="direccion"><?php echo $hotel->direccion; ?></textarea>
                    </label>
                    <label for="telefono">
                        <span>Telefono <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="telefono" value="<?php echo $hotel->telefono; ?>" />
                    </label>
                    <label for="correo">
                        <span>Correo <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="correo" value="<?php echo $hotel->correo; ?>" />
                    </label>
                    <label for="file">
                        <span>Imagen <span class="required">*</span></span>
                         <img src="uploads/<?php echo $hotel->foto; ?>" style="width:45%;" />
                        <input class="form-control input-field" type="file" name="file" accept="file/*"/>
                    </label>
                    <p>
                        <input type="submit" value="Actualizar Hotel" class="btn btn-success" />
                        <a href="<?php echo (WEB_PATH . '/hotel.php') ?>">
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
