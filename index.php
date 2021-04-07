<?php
ob_start();
session_start();

require __DIR__."/external/autoload.php";

use CoffeeCode\Router\Router;
$router = new Router(site());
$router->namespace("Source\Controllers");

/**
 * CAMADA WEB
 */
$router->group(null);
$router->get("/","Web:login","web.login");
$router->get("/cadastrar","Web:register","web.register");

/**
 * CAMADA DE AUTENTICAÇÃO
 */
$router->group(null);
$router->post("/login","Auth:login","auth.login");
$router->post("/register","Auth:register","auth.register");

/**
 * CAMADA PERFIL COMUM
 */
$router->group("/perfil");
$router->get("/","Profile:home","profile.home");
$router->get("/sair","Profile:logoff","profile.logoff");

/**
 * CAMADA PERFIL ADMINISTRADOR
 */
$router->group("/admin");
$router->get("/","Admin:home","admin.home");
$router->get("/atualizar","Admin:update", "admin.update");
$router->post("/update","Admin:updateUser","admin.updateuser");
$router->post("/updateatz","Admin:updateUseratz","admin.updateuseratz");
$router->get("/deletar","Admin:delete","admin.delete");
$router->post("/delete","Admin:deleteUser","admin.deleteuser");
$router->post("/deleterem","Admin:deleteUserrem","admin.deleteuserrem");
$router->get("/registrar","Admin:register","admin.register");
$router->post("/register","Admin:registerUser","admin.registeruser");
$router->post("/registeradc","Admin:registerUseradc","admin.registeruseradc");
$router->get("/sair","Admin:logoff","admin.logoff");

/**
 * CAMADA DE ERROS ROTAS
 */
$router->group("ooops");
$router->get("/{errcode}","Web:error","web.error");

/**
 * PROCESSAMENTO DAS ROTAS
 */
$router->dispatch();

/**
 * CAMADA DE ERROS PROCESSOS
 */
if ($router->error()){
    $router->redirect("web.error",[
        "errcode" => $router->error()
    ]);
}

ob_end_flush();
