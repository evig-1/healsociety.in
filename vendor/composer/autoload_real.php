<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbcef45ac1c5ca7a8ea9a0e1a8ff3d53f
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

        spl_autoload_register(array('ComposerAutoloaderInitbcef45ac1c5ca7a8ea9a0e1a8ff3d53f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbcef45ac1c5ca7a8ea9a0e1a8ff3d53f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbcef45ac1c5ca7a8ea9a0e1a8ff3d53f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
