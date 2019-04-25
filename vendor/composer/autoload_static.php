<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c5c07e063e46ead92fef660eddd6dad
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Will\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Will\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Database' => __DIR__ . '/../..' . '/src/Database.php',
        'DatabaseException' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c5c07e063e46ead92fef660eddd6dad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c5c07e063e46ead92fef660eddd6dad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c5c07e063e46ead92fef660eddd6dad::$classMap;

        }, null, ClassLoader::class);
    }
}
