<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2e4011527bfa9e056d13417bbc6fcdc
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zalo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zalo\\' => 
        array (
            0 => __DIR__ . '/..' . '/zaloplatform/zalo-php-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2e4011527bfa9e056d13417bbc6fcdc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2e4011527bfa9e056d13417bbc6fcdc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
