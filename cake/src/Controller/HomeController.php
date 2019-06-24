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
        //出力は最後の行だけとれる
        // $query = TableRegistry::get('Incomes')->find();


        // $incomes = [];
        // foreach ($query as $income) {
        //     debug($income->price);
        //     $incomes = $income['price'];
        // }

        // $this->set('incomes',$incomes);

        $query = TableRegistry::get('Incomes')->find();
        $results = $query->select(['price']);

        $this->set('results',$results);





    }
}
