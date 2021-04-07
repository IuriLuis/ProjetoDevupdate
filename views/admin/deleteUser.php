<?php $v->layout("admin/_theme"); ?>

<article class="content_right">
    <header>
        <h1>REMOÇÃO DE USUÁRIOS</h1>
    </header>
    <div class="content_right_forms">
        <header>
            <h2>INFORME O E-MAIL DO USUÁRIO A SER DELETADO</h2>
        </header>
        <form class="form_id" action="<?= $router->route("admin.deleteuser"); ?>" method="post" autocomplete="off">
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
            <p>Obs.: Os dados mostrados abaixo são destinados a confirmação do usuário, para deletar é necessário clicar
                no botão DELETAR USUÁRIO.</p>
            <form action="<?= $router->route("admin.deleteuserrem"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <div class="row">
                    <label>
                        <span class="field">Nome:</span>
                        <input style="color: #ffffff;font-size: 1.2em;" disabled value="<?= $user->first_name; ?>" type="text" name="first_name"
                               placeholder="Primeiro nome:"/>
                    </label>

                    <label>
                        <span class="field">Sobrenome:</span>
                        <input style="color: #ffffff;font-size: 1.2em;" disabled value="<?= $user->last_name; ?>" type="text" name="last_name"
                               placeholder="Último nome:"/>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <span class="field">E-mail:</span>
                        <input style="color: #ffffff;font-size: 1.2em;" disabled value="<?= $user->email; ?>" type="email" name="email"
                               placeholder="Informe seu e-mail:"/>
                    </label>
                    <label>
                        <span class="field">Nivel de Acesso:</span>
                        <select disabled name="level">
                            <option value="0">ADMINISTRADOR</option>
                            <option style="color: #ffffff;font-size: 1.2em;" value="1" selected>INDIFERENTE</option>
                        </select>
                    </label>
                </div>
                <div class="row">
                    <label>
                        <span class="field">Senha:</span>
                        <input disabled autocomplete="" type="password" name="passwd"
                               placeholder="SENHA CRIPTOGRAFADA"/>
                    </label>
                    <button class="btn btn-green btn-full">DELETAR USUÁRIO</button>
                </div>
            </form>
        </div>
    </div>
</article>
