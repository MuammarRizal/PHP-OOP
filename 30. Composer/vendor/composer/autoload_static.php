<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35ac6a6d80de60f5bc0f0da5fa5c1aed
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'ModernOOP\\StudiKasus\\PPH21\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ModernOOP\\StudiKasus\\PPH21\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35ac6a6d80de60f5bc0f0da5fa5c1aed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35ac6a6d80de60f5bc0f0da5fa5c1aed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit35ac6a6d80de60f5bc0f0da5fa5c1aed::$classMap;

        }, null, ClassLoader::class);
    }
}
