<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbcb948930060fe6322977d38c7a6421f
{
    public static $files = array (
        'e471bf351add62873bc0289ccd6a937f' => __DIR__ . '/..' . '/league/plates/src/Template/match.php',
        '152c98af9456eeb8f53697d6a7dfd689' => __DIR__ . '/..' . '/league/plates/src/Extension/Data/data.php',
        'e20239a76b73b9912f51f0005956d1db' => __DIR__ . '/..' . '/league/plates/src/Extension/Path/path.php',
        'd513f8e004e152493580ca1917e308ba' => __DIR__ . '/..' . '/league/plates/src/Extension/RenderContext/func.php',
        '27980683f1626a3fd1405d27b171c0fe' => __DIR__ . '/..' . '/league/plates/src/Extension/RenderContext/render-context.php',
        'bdc465a053da7f7ddb072631f6d41d45' => __DIR__ . '/..' . '/league/plates/src/Extension/LayoutSections/layout-sections.php',
        'afa76803f24616d7599be3b7b0846adc' => __DIR__ . '/..' . '/league/plates/src/Extension/Folders/folders.php',
        '16c5be35e32c6cf916d875518b909210' => __DIR__ . '/..' . '/league/plates/src/Util/util.php',
        'f50802863be25ba7bdc77bfd76f9fee9' => __DIR__ . '/../..' . '/source/Boot/Config.php',
        'ae0234755aee673b38d299d18fb665dc' => __DIR__ . '/../..' . '/source/Boot/Helpers.php',
        '71a4430b15ce5cba9280b371e4b8a3b1' => __DIR__ . '/../..' . '/source/Boot/Minify.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\Optimizer\\' => 21,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\Optimizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/optimizer/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbcb948930060fe6322977d38c7a6421f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbcb948930060fe6322977d38c7a6421f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbcb948930060fe6322977d38c7a6421f::$classMap;

        }, null, ClassLoader::class);
    }
}
