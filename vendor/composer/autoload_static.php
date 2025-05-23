<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76ba1e168e2a7bc8e8ebac81c41c43a6
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'X' => 
        array (
            'Xtrad\\VizsgafeladatIdopontfoglalo\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Xtrad\\VizsgafeladatIdopontfoglalo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit76ba1e168e2a7bc8e8ebac81c41c43a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76ba1e168e2a7bc8e8ebac81c41c43a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit76ba1e168e2a7bc8e8ebac81c41c43a6::$classMap;

        }, null, ClassLoader::class);
    }
}
