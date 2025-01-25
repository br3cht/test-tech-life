<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit132707aa0b3cd4fa40de74e91aa9dcac
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

        spl_autoload_register(array('ComposerAutoloaderInit132707aa0b3cd4fa40de74e91aa9dcac', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit132707aa0b3cd4fa40de74e91aa9dcac', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit132707aa0b3cd4fa40de74e91aa9dcac::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
