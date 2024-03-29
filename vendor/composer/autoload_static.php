<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57c856616ca5484810d421920e274ba5
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ndps\\HelloWorldPackage\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ndps\\HelloWorldPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit57c856616ca5484810d421920e274ba5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57c856616ca5484810d421920e274ba5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit57c856616ca5484810d421920e274ba5::$classMap;

        }, null, ClassLoader::class);
    }
}
