<?php
require_once '../autoload.php';

if(isset($_SERVER['APPLICATION_ENV']))
    if($_SERVER['APPLICATION_ENV']==='development')
        ini_set('display_errors', 1);
    else
        ini_set('display_errors', 0);
    
<<<<<<< HEAD
// qualified name de setConfig() y le inyecto la ruta de global.php   
\Core\Application\Application::setConfig(__DIR__.'/../configs/global.php');
\Core\Application\Application::bootstrap();
\Core\Application\Application::dispatch();
=======
\Core\Application\Application::setConfig(__DIR__.'/../configs/global.php');
\Core\Application\Application::bootstrap();
\Core\Application\Application::dispatch();
>>>>>>> 9a737af81a631e16091c3185e2d90124029f45f3
