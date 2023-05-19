<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4a59771eb0ba154123969c9cbeb5dc4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita4a59771eb0ba154123969c9cbeb5dc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4a59771eb0ba154123969c9cbeb5dc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4a59771eb0ba154123969c9cbeb5dc4::$classMap;

        }, null, ClassLoader::class);
    }
}