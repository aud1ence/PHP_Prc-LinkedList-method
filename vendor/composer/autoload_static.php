<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c02fb1e43dfae0d0c7fe49439d164e3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\LinkedList' => __DIR__ . '/../..' . '/app/LinkedList.php',
        'App\\Node' => __DIR__ . '/../..' . '/app/Node.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c02fb1e43dfae0d0c7fe49439d164e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c02fb1e43dfae0d0c7fe49439d164e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c02fb1e43dfae0d0c7fe49439d164e3::$classMap;

        }, null, ClassLoader::class);
    }
}