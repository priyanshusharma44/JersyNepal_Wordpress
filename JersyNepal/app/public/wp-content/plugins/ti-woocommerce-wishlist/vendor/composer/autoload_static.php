<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2af101309227f90c6d42451ac81d635
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2af101309227f90c6d42451ac81d635::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2af101309227f90c6d42451ac81d635::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2af101309227f90c6d42451ac81d635::$classMap;

        }, null, ClassLoader::class);
    }
}