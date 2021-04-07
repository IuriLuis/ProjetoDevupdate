<?php $v->layout("admin/_theme"); ?>

<article class="content_right">
    <header>
        <h1>CADASTRO DE USUÁRIOS</h1>
    </header>
    <div class="content_right_forms">
        <div class="form_atz">
            <p>Obs.: Para cadastrar um novo usuário preencha todos os campos e clique em CADASTRAR USUÁRIO.</p>
            <form action="<?= $router->route("admin.registeruseradc"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <div class="row">
                    <label>
                        <span class="field">Nome:</span>
                        <input type="text" name="first_name"
                               placeholder="Primeiro nome:"/>
                    </label>

                    <label>
                        <span class="field">Sobrenome:</span>
                        <input type="text" name="last_name"
                               placeholder="Último nome:"/>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <span class="field">E-mail:</span>
                        <input type="email" name="email"
                               placeholder="Informe seu e-mail:"/>
                    </label>
                    <label>
                        <span class="field">Nivel de Acesso:</span>
                        <select name="level">
                            <option value= 0 >ADMINISTRADOR</option>
                            <option value= 1 selected>USUARIO</option>
                        </select>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <span class="field">Senha:</span>
                        <input autocomplete="" type="password" name="passwd"
                               placeholder="Informe sua senha:"/>
                    </label>
                        <button class="btn btn-green btn-full">CADASTRAR USUÁRIO</button>
                </div>
            </form>
        </div>
    </div>
</article>
