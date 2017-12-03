<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf36661aaa6078e5b7bb96cc9d4aa222e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/SON',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf36661aaa6078e5b7bb96cc9d4aa222e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf36661aaa6078e5b7bb96cc9d4aa222e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}