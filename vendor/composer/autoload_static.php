<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26265eec39b9f4be73dcc1e47b566c90
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pheanstalk\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pheanstalk\\' => 
        array (
            0 => __DIR__ . '/..' . '/pda/pheanstalk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26265eec39b9f4be73dcc1e47b566c90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26265eec39b9f4be73dcc1e47b566c90::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}