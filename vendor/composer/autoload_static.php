<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41cca9336bb82d8756d07aa3a50153df
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'index\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'index\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit41cca9336bb82d8756d07aa3a50153df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41cca9336bb82d8756d07aa3a50153df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41cca9336bb82d8756d07aa3a50153df::$classMap;

        }, null, ClassLoader::class);
    }
}
