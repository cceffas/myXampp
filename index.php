<?php

require_once __DIR__ . "/vendor/autoload.php";

use MyXampp\lib\RenderPages;

$app = new RenderPages();
$route = $app->routeSystem();

$app->render($route) ?>