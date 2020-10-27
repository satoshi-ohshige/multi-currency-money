<?php
declare(strict_types=1);

require_once "vendor/autoload.php";

use App\Hello;

$hello = new Hello('たなか');
var_dump($hello->say());
