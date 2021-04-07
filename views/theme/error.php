<?php $v->layout("theme/_theme"); ?>
<div class="main_content_box">
    <div class="page">
        <div class="img_box">
            <img src="<?= asset("images/DevupdateLogo.png") ?>" width="200px" alt="Logo DEVUPDATE"
                 title="Logo DEVUPDATE">
        </div>
        <h1>Ooops, erro <?= $error; ?></h1>
        <p>Desculpe por isso, caso o problema persista, por favor entre em contato conosco.</p>
        <p><a class="btn btn-blue" href="<?= $router->route("web.login"); ?>" title="<?= site("name"); ?>">VOLTAR!</a>
        </p>
    </div>
</div>