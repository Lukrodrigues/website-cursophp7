<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit544f28aecb028b3fc7b2a494e744a1f9
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit544f28aecb028b3fc7b2a494e744a1f9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
