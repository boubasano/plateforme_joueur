<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit746ddf9256c28ac30f5853bca7953f75
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit746ddf9256c28ac30f5853bca7953f75::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}