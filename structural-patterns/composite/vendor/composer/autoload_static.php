<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit869ffbc771b5ed1597313c93fa30d4d2
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Composite' => __DIR__ . '/../..' . '/src/Composite.php',
        'File' => __DIR__ . '/../..' . '/src/File.php',
        'Folder' => __DIR__ . '/../..' . '/src/Folder.php',
        'Leaf' => __DIR__ . '/../..' . '/src/Leaf.php',
        'LeafInterface' => __DIR__ . '/../..' . '/src/LeafInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit869ffbc771b5ed1597313c93fa30d4d2::$classMap;

        }, null, ClassLoader::class);
    }
}
