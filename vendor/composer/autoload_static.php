<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac1b5761936e61f419d262125dc19a8b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
    );

    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac1b5761936e61f419d262125dc19a8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac1b5761936e61f419d262125dc19a8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac1b5761936e61f419d262125dc19a8b::$classMap;

        }, null, ClassLoader::class);
    }
}