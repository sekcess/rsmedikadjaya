<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd44483b28de136336304e8abdea897e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd44483b28de136336304e8abdea897e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd44483b28de136336304e8abdea897e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd44483b28de136336304e8abdea897e::$classMap;

        }, null, ClassLoader::class);
    }
}
