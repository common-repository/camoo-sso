<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit672872e775a42b3bed17f4255372a4d4
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP_CAMOO\\SSO\\' => 13,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
            'Lcobucci\\Clock\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP_CAMOO\\SSO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'Lcobucci\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/clock/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit672872e775a42b3bed17f4255372a4d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit672872e775a42b3bed17f4255372a4d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit672872e775a42b3bed17f4255372a4d4::$classMap;

        }, null, ClassLoader::class);
    }
}
