<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
require_once ROOT_PATH . '/vistas/_commons/navigation.php';
?>

<div id="page-wrapper">
    <div class="panel panel-info">
        <div class="panel-heading">Crear nuevo Tour</div>
        <div class="panel-body">
            <div class="form-style-2" role="form">
                <form action="<?php echo (WEB_PATH . '/tour.php?action=create') ?>" method="post" enctype="multipart/form-data">
                    <label for="nombre">
                        <span>Nombre <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="nombre" />
                    </label>
                    <label for="descripcion">
                        <span>Descripcion <span class="required">*</span></span>
                        <textarea class="form-control textarea-field" name="descripcion"></textarea>
                    </label>
                    <label for="empresa">
                        <span>Empresa que lo brinda <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="empresa"  />
                    </label>
                    <label for="telefono">
                        <span>Telefono de la empresa <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="telefono" />
                    </label>
                    <label for="correo">
                        <span>Correo de la empresa <span class="required">*</span></span>
                        <input type="text" class="form-control input-field" type="text" name="correo" />
                    </label>
                    <label for="file">
                        <span>Imagen <span class="required">*</span></span>
                        <input class="form-control input-field" type="file" name="file" accept="file/*"/>
                    </label>
                    <p>
                        <input type="submit" value="Crear Tour" class="btn btn-success" />
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
