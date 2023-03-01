<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit565f520510d3d3ce7b4dc29c1f3ed56f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Danil\\Vipm1\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Danil\\Vipm1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit565f520510d3d3ce7b4dc29c1f3ed56f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit565f520510d3d3ce7b4dc29c1f3ed56f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit565f520510d3d3ce7b4dc29c1f3ed56f::$classMap;

        }, null, ClassLoader::class);
    }
}
