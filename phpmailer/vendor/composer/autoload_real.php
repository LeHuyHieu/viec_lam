<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd18bd75f2d0229b396f39f2eca80b7ed
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd18bd75f2d0229b396f39f2eca80b7ed', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd18bd75f2d0229b396f39f2eca80b7ed', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd18bd75f2d0229b396f39f2eca80b7ed::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
