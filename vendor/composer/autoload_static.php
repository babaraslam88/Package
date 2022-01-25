<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbf5b9b0f202b33bb2e6d4329fa07829
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cal\\Calculator\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cal\\Calculator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbf5b9b0f202b33bb2e6d4329fa07829::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbf5b9b0f202b33bb2e6d4329fa07829::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdbf5b9b0f202b33bb2e6d4329fa07829::$classMap;

        }, null, ClassLoader::class);
    }
}
