<?php

require_once "controller/IndexController.php";

$index = new IndexController();

$index->model();

$index->getUser();

