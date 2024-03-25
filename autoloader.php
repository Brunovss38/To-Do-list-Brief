<?php
spl_autoload_register(function ($class) {

    $class = ucfirst(strtr($class, "\\", DIRECTORY_SEPARATOR));

    require_once($class . ".php");
});
