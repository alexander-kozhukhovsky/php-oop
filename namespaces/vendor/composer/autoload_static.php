<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16ad4faac83997b480ab7979b5b4c188
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rych\\Random' => 
            array (
                0 => __DIR__ . '/..' . '/rych/random',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit16ad4faac83997b480ab7979b5b4c188::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
