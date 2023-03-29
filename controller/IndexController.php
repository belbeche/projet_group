<?php

require_once "model/Model.php";
require_once "vues/index.php";

class IndexController
{
    /*public function model()
    {
        $model = new Model();
        $test = $model->Test();
        echo $test;
    }*/

    public function index()
    {
        $index = new Index();
        $index->index();
    }
}