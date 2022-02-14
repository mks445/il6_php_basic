<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit159a20f01c7e1886d91d8cb82f935be5
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app/code',
    );

    public static $classMap = array (
        'Controller\\Catalog' => __DIR__ . '/../..' . '/app/code/Controller/Catalog.php',
        'Controller\\Index\\Post' => __DIR__ . '/../..' . '/app/code/Controller/Index/Post.php',
        'Controller\\User' => __DIR__ . '/../..' . '/app/code/Controller/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit159a20f01c7e1886d91d8cb82f935be5::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit159a20f01c7e1886d91d8cb82f935be5::$classMap;

        }, null, ClassLoader::class);
    }
}
