<?
use app\ListOfMatches;

function autoloader($class){
    $file = __DIR__ . "/$class.php";
    if (file_exists($file))
        require_once $file;
}

spl_autoload_register('autoloader');

new ListOfMatches();
