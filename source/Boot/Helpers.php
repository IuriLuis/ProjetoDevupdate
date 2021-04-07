<?php

/*
 * FUNÇÃO PARA RETORNAR O ENDEREÇO DO SITE
 */
/**
 * @param string|null $param
 * @return string
 */
function site(string $param = null): string
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }
    return SITE["root"];
}

/**
 * @param string|null $param
 * @return string|null
 */
function social(string $param = null): ?string
{
    if ($param && !empty(SOCIAL[$param])) {
        return SOCIAL[$param];
    }
    return null;
}

/**
 * @param string $param
 * @return string
 */
function routeImage(string $param): string
{
    return "https://via.placeholder.com/1200x628/0984e3/ffffff?text={$param}";
}


/**
 * @param string $path
 * @param bool $time
 * @return string
 */
function asset(string $path, $time = true): string
{
    $file = SITE["root"] . "/views/assets/{$path}";
    $fileOnDir = dirname(__DIR__, 1) . "/views/assets/{$path}";
    if ($time && file_exists($fileOnDir)) {
        $file .= "?time=" . filemtime($fileOnDir);
    }
    return $file;
}

/**
 * @param string|null $type
 * @param string|null $message
 * @return string|null
 */
function flash(string $type = null, string $message = null): ?string
{
    if ($type && $message) {
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];
        return null;
    }
    if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"message {$flash["type"]}\">{$flash["message"]}</div>";
    }
    return null;
}