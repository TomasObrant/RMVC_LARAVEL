<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e032bd1480156e83f5c8689567ebf0a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e032bd1480156e83f5c8689567ebf0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e032bd1480156e83f5c8689567ebf0a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e032bd1480156e83f5c8689567ebf0a::$classMap;

        }, null, ClassLoader::class);
    }
}
