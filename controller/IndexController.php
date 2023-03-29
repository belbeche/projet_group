<?php

require_once "model/Model.php";

class IndexController
{
    public function Accueil()
    {
        $model = new Model();
        $test = $model->Test();
        echo $test;
    }
}