<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

class HomeController extends Controller
{

    public function initialize()
    { 

    }

    public function index()
    {

        //収入のトータル
        $query = TableRegistry::get('Incomes')->find();
        $incomes = $query->select(['sum' => $query->func()->sum('price')]);

        foreach($incomes as $income){
            $income = $income['sum'];
        }
        $this->set('income',$income);

        //支出のトータル
        $query = TableRegistry::get('Spending')->find();
        $spendings = $query->select(['sum' => $query->func()->sum('price')]);

        foreach($spendings as $spending){
            $spending = $spending['sum'];
        }
        $this->set('spending',$spending);





    }
}
