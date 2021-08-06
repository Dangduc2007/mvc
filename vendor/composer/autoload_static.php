<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9102af2e0c5d7d5a1d4c2304843364c5
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9102af2e0c5d7d5a1d4c2304843364c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9102af2e0c5d7d5a1d4c2304843364c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9102af2e0c5d7d5a1d4c2304843364c5::$classMap;

        }, null, ClassLoader::class);
    }
}