<?php


/**
 * 
 * @param string $classname The name of the class to load
 */
function aawezAutoload($classname)
{
    //Can't use __DIR__ as it's only in PHP 5.3+
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'class.'.strtolower($classname).'.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    //SPL autoloading was introduced in PHP 5.1.2
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register('aawezAutoload', true, true);
    } else {
        spl_autoload_register('aawezAutoload');
    }
} else {
   
    function __autoload($classname)
    {
        aawezAutoload($classname);
    }
}
