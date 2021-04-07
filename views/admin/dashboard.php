<?php $v->layout("admin/_theme"); ?>

<article class="content_right">
    <header>
        <h1>LISTA DE USUÁRIOS</h1>
    </header>
    <table>
        <thead>
        <tr ALIGN=center>
            <th class="text-center">ID</th>
            <th class="text-center">NOME</th>
            <th class="text-center">SOBRENOME</th>
            <th class="text-center">E-MAIL</th>
            <th class="text-center">PERMISSÃO</th>
            <th class="text-center">DATA CRIAÇÃO</th>
        </tr>
        </thead>
        <tbody>
        <tr ALIGN=center>
            <td NOWRAP><?= $user->id; ?></td>
            <td NOWRAP><?= $user->first_name; ?></td>
            <td NOWRAP><?= $user->last_name; ?></td>
            <td NOWRAP><?= $user->email; ?></td>
            <td NOWRAP><?= ($user->level == "1" ? "USER" : "ADMIN") ?></td>
            <td NOWRAP><?= $user->created_at ?></td>
        </tr>
        </tbody>
    </table>
</article>
