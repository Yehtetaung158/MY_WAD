<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbffacdc22799bd911e3bce4ca004b0b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Dotenv\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbffacdc22799bd911e3bce4ca004b0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbffacdc22799bd911e3bce4ca004b0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcbffacdc22799bd911e3bce4ca004b0b::$classMap;

        }, null, ClassLoader::class);
    }
}
