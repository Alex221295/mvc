<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2507b6d5a4bcf759c2d1668f0df7fc93
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2507b6d5a4bcf759c2d1668f0df7fc93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2507b6d5a4bcf759c2d1668f0df7fc93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2507b6d5a4bcf759c2d1668f0df7fc93::$classMap;

        }, null, ClassLoader::class);
    }
}
