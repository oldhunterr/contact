<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitae28f9e11590b45389cbfa492ae7bf98
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

        spl_autoload_register(array('ComposerAutoloaderInitae28f9e11590b45389cbfa492ae7bf98', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitae28f9e11590b45389cbfa492ae7bf98', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitae28f9e11590b45389cbfa492ae7bf98::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
