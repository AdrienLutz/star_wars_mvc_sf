<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita08c7fc664421113c261b68899fbc6e8
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita08c7fc664421113c261b68899fbc6e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita08c7fc664421113c261b68899fbc6e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita08c7fc664421113c261b68899fbc6e8::$classMap;

        }, null, ClassLoader::class);
    }
}
