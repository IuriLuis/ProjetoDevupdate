<?php

/**
 * CONFIGURAÇÕES DO SITE
 */

define("SITE", [
    "name" => "DevUpdate Soluções Tecnológicas",
    "desc" => "Uma variedade de funções e funcionalidades gratuitas para facilitar o seu trabalho.",
    "domain" => "devupdate.com.br",
    "locale" => "pt_br",
    "root" => "http://localhost:8080/ProjetoDevupdate"
]);

/**
 * CONFIGURAÇÕES DE MINIFICAÇÃO
 * */

if ($_SERVER["SCRIPT_NAME"] == "localhost") {
    require __DIR__ . "Minify.php";
}

/**
 * CONFIGURAÇÕES DO BANCO DE DADOS
 */

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "devupdate",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * CONFIGURAÇÕES DAS REDES SOCIAIS
 */

define("SOCIAL",[
    "facebook_page" => "devupdate",
    "facebook_author" => "iuriluisferreira",
    "facebook_appId" => "00000000000000000",
    "twitter_creator" => "@delgadoiuri",
    "twitter_site" => "@delgadoiuri"
]);
