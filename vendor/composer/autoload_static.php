<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1f441ecf79a47172d62ffb643183570
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1f441ecf79a47172d62ffb643183570::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1f441ecf79a47172d62ffb643183570::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1f441ecf79a47172d62ffb643183570::$classMap;

        }, null, ClassLoader::class);
    }
}