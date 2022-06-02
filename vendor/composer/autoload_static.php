<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4205be79e0f4b03510ef7e621e6ac541
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4205be79e0f4b03510ef7e621e6ac541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4205be79e0f4b03510ef7e621e6ac541::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4205be79e0f4b03510ef7e621e6ac541::$classMap;

        }, null, ClassLoader::class);
    }
}