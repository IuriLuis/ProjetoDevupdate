<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>
    <link rel="stylesheet" href="<?= asset("/css/adminTheme.css"); ?>"/>
    <link rel="icon" type="image/png" href="<?= asset("/images/favicon.png"); ?>"/>
</head>
<body>

<main class="main_content">
    <section class="main_content_left">
        <div>
            <img src="<?= asset("/images/logoTemp.png") ?>" alt="Logo DEVUPDATE" title="Logo DEVUPDATE">
        </div>
        <p>IURI LUIS</p>
        <ul>
            <a href="<?= $router->route("admin.home"); ?>" alt="" title=""><li>LISTA DE USUÁRIOS</li></a>
            <a href="<?= $router->route("admin.update"); ?>" alt="" title=""><li>ATUALIZAR USUÁRIOS</li></a>
            <a href="<?= $router->route("admin.delete"); ?>" alt="" title=""><li>DELETAR USUÁRIOS</li></a>
            <a href="<?= $router->route("admin.register"); ?>" alt="" title=""><li>REGISTRAR USUÁRIOS</li></a>
            <a class="btn btn-green" href="<?= $router->route("admin.logoff"); ?>" title="Sair agora"><li>SAIR</li></a>
        </ul>
    </section>
    <section class="main_content_right">
        <?= $v->section("content"); ?>
    </section>
</main>

</body>
</html>
