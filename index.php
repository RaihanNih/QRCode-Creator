<?php

require_once "vendor/autoload.php";

use Steampixel\Route;

const BASEPATH = '/';
const ROOT = "src";
const RESOURCES = "resources";

Route::add("/", fn () => include_once ROOT . "/View/Index.php");

Route::add("/result", fn () => include_once ROOT . "/Controller/GenerateController.php", "post");

Route::run(BASEPATH);
