<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

use Closure;

class ComposerStaticInit42010586ef8153c3e9b554b47b5ff41c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ShapedPlugin\\TestimonialFree\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ShapedPlugin\\TestimonialFree\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42010586ef8153c3e9b554b47b5ff41c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42010586ef8153c3e9b554b47b5ff41c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42010586ef8153c3e9b554b47b5ff41c::$classMap;

        }, null, ClassLoader::class);
    }
}
