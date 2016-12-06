<?php
require_once ROOT_PATH . '/vistas/_commons/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Ingresar al módulo administrativo</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo (WEB_PATH . '/login.php?action=login'); ?>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Constraseña" name="password" type="password" value="">
                            </div>
                            <!--div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div-->
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Entrar" class="btn btn-success" />
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php if ($error): ?>
                <div class="alert alert-danger">Usuario o contraseña incorrectos</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
require_once ROOT_PATH . '/vistas/_commons/footer.php';
?>