<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Crear nuevo Tour</div>
        <div class="panel-body">
            <div class="form-style-2" role="form">
                <form action="<?php echo (WEB_PATH . '/tour.php?action=edit&id=' . $tour->id) ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $tour->id ?>" />
                    <label for="nombre">
                        <span>Nombre <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="nombre" value="<?php echo $tour->nombre; ?>" />
                    </label>
                    <label for="descripcion">
                        <span>Descripcion <span class="required">*</span></span>
                        <textarea class="form-control textarea-field" name="descripcion"><?php echo $tour->descripcion; ?></textarea>
                    </label>
                    <label for="empresa">
                        <span>Empresa que lo brinda <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="empresa" value="<?php echo $tour->empresa; ?>"  />
                    </label>
                    <label for="telefono">
                        <span>Telefono de la empresa <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="telefono" value="<?php echo $tour->telefono; ?>" />
                    </label>
                    <label for="correo">
                        <span>Correo de la empresa <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="correo" value="<?php echo $tour->correo; ?>" />
                    </label>
                    <p>
                        <input type="submit" value="Guardar" class="btn btn-success" />
                        <a href="<?php echo (WEB_PATH . '/tour.php') ?>">
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