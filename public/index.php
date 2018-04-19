<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 16/04/18
 * Time: 12:58
 */
require_once '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
$helloWorld = new SayHello();

echo $hello->talk() . '<br>';
echo $helloWorld->talk();
