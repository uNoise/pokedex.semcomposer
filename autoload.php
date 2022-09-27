<?php
function __autoload ($class_name)
{
if(file_exists('pokedex/' .$class_name. '.php')){
require_once 'pokedex/' . $class_name . '.php';

}
}