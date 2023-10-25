<?php
function chargerClass($class)
{
  require $class . '.class.php';
}

spl_autoload_register('chargerClass');


$ted = new Person('Ted');
echo $ted->getName();