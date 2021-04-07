<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="img_box">
        <img src="<?= asset("images/DevupdateLogo.png") ?>" width="200px" alt="Logo DEVUPDATE" title="Logo DEVUPDATE">
    </div>
    <div class="login">
        <form class="form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">

            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <label>
                <span class="field">E-mail:</span>
                <input value="" type="email" name="email" placeholder="Informe seu e-mail:"/>
            </label>
            <label>
                <span class="field">Senha:</span>
                <input autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:"/>
            </label>

            <div class="form_actions">
                <button class="btn btn-green">Logar-se</button>

            </div>
        </form>

        <div class="form_register_action">
            <p>Ainda não tem conta?</p>
            <a href="<?= $router->route("web.register"); ?>" class="btn btn-blue">Cadastre-se Aqui</a>
        </div>
    </div>
</div>
