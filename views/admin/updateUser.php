<?php $v->layout("admin/_theme"); ?>

<article class="content_right">
    <header>
        <h1>ATUALIZAÇÃO DE USUÁRIOS</h1>
    </header>
    <div class="content_right_forms">
        <header>
            <h2>INFORME O E-MAIL DO USUÁRIO A SER ATUALIZADO</h2>
        </header>
        <form class="form_id" action="<?= $router->route("admin.updateuser"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <label>
                <input value="" type="email" name="email" placeholder="Escreva aqui:"/>
            </label>
            <div>
                <button>CARREGAR DADOS</button>
            </div>
        </form>
        <div class="form_atz">
            <p>Obs.: Para atualizar um cadastro é necessário preencher todos os campos mesmo que repita as informações
                já salvas.</p>
            <form action="<?= $router->route("admin.updateuseratz"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <div class="row">
                    <label>
                        <span class="field">Nome:</span>
                        <input value="<?= $user->first_name; ?>" type="text" name="first_name"
                               placeholder="Primeiro nome:"/>
                    </label>

                    <label>
                        <span class="field">Sobrenome:</span>
                        <input value="<?= $user->last_name; ?>" type="text" name="last_name"
                               placeholder="Último nome:"/>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <span class="field">E-mail:</span>
                        <input value="<?= $user->email; ?>" type="email" name="email"
                               placeholder="Informe seu e-mail:"/>
                    </label>
                    <label>
                        <span class="field">Nivel de Acesso:</span>
                        <select name="level">
                            <option value="0">ADMINISTRADOR</option>
                            <option value="1" selected>USUARIO</option>
                        </select>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <span class="field">Senha:</span>
                        <input autocomplete="" type="password" name="passwd"
                               placeholder="Informe sua senha:"/>
                    </label>
                        <button class="btn btn-green btn-full">ATUALIZAR</button>
                </div>
            </form>
        </div>
    </div>
</article>
