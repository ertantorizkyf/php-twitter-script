<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb45a2d9bc1e7e1700eca883cabc936a3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb45a2d9bc1e7e1700eca883cabc936a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb45a2d9bc1e7e1700eca883cabc936a3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
