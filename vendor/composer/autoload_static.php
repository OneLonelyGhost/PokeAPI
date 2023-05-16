<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb285447907198326c783c2adcd8c251
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PokePHP\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PokePHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/danrovito/pokephp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb285447907198326c783c2adcd8c251::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb285447907198326c783c2adcd8c251::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb285447907198326c783c2adcd8c251::$classMap;

        }, null, ClassLoader::class);
    }
}
