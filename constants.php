<?php
define('DIR', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

define('CLASSES', DIR . DS . 'Class');
define('CONTROLLERS', DIR . DS . 'Controllers');
define('DATABASE', DIR . DS . 'Database');
define('MODELS', DIR . DS . 'Models');
define('ADMIN', DIR . DS . 'admin');

define('AUTOLOAD_CLASSES', [CLASSES, CONTROLLERS, MODELS, DATABASE, ADMIN]);
