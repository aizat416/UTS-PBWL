<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit554e89bd7b62c6cec083ae718746be59
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit554e89bd7b62c6cec083ae718746be59::$classMap;

        }, null, ClassLoader::class);
    }
}