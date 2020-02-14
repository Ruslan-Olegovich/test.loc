<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
/**
 * Короче в этом файле все, что ниже ты можешь трогать. в сам класс
 * ты можешь добавлять новвые методы и атрибуты
 * но все, что существует - не трогай.
 *
 * В этом файле я, помимо ошибок при работе с классом, кое что еще забыл сделать
 * и поэтому самая первая ошибка - нужно исправить в этом файле
 *
 * мои комментарии не трогай, добавляй свои ниже
 */

require __DIR__ . "/classes/example.php";
require __DIR__ . "/functions/example.php";


$c = new ArrayClass([0,234,23, -34, 4345]);
$c->showArray();

  if($c1 = new ArrayClass(4)){
    $c1->generateArray();
  }
