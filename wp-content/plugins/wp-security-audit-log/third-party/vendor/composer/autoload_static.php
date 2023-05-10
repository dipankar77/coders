<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit201f86ba52b29dc488d34f8e732c3d2f
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WSAL_Vendor\\WP_Async_Request' => __DIR__ . '/..' . '/classes/wp-async-request.php',
        'WSAL_Vendor\\WP_Background_Process' => __DIR__ . '/..' . '/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit201f86ba52b29dc488d34f8e732c3d2f::$classMap;

        }, null, ClassLoader::class);
    }
}