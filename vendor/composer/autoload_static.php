<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee42ccb57c505152cc08f3d4df00bad8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Postqueue\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Postqueue\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee42ccb57c505152cc08f3d4df00bad8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee42ccb57c505152cc08f3d4df00bad8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee42ccb57c505152cc08f3d4df00bad8::$classMap;

        }, null, ClassLoader::class);
    }
}
