<?php

namespace App\Controllers;


use App\Controller;
use App\Exceptions\Error404;
use App\Models\Perfomance;

class Perfomance extends Controller
{
    protected static $actionDefault = 'All'; // Создаём свойство экшн по умолчанию для данного контроллера

    public function actionAll()
    {
        $afisha = Perfomance::findAll();

        $this->view->afisha = $afisha;

        $this->view->displayTwig('index.html');
    }

    public function actionPerfomance()
    {
        $perfomance = Perfomance::findById($_GET['id']);
        if (null === $perfomance) {
            throw new Error404();
        }
        $this->view->perfomance = $perfomance;

        $this->view->displayTwig('perfomance.html');
    }
}