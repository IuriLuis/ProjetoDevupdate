<?php

/**
 * MINIFICAÇÃO DE CSS
 */
$minCSS = new \MatthiasMullie\Minify\CSS();
$minCSS->add(dirname(__DIR__, 2) . "/views/assets/css/style.css");
$minCSS->add(dirname(__DIR__, 2) . "/views/assets/css/form.css");
$minCSS->add(dirname(__DIR__, 2) . "/views/assets/css/button.css");
$minCSS->add(dirname(__DIR__, 2) . "/views/assets/css/message.css");
$minCSS->add(dirname(__DIR__, 2) . "/views/assets/css/load.css");
$minCSS->minify(dirname(__DIR__,2)."/views/assets/style.min.css");

/**
 * MINIFICAÇÃO DE JS
 */

