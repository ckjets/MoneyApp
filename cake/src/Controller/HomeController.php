<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

class HomeController extends Controller
{

    public function initialize()
    { }

    public function index()
    {

        $incomes = TableRegistry::get('incomes');

        $incomes = $incomes->find()->all();
        // $incomes
        //     ->select(['price' =>  $incomes->func()->sum('price')])
        //     ->all();

        $this->set('incomes',$incomes);
    }
}
