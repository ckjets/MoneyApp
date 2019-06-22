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

        //$this->Incomes = TableRegistry::get('incomes');
        $incomes = TableRegistry::get('incomes');
        //$query =  $this->Incomes->find('all');
        $query = $incomes->find('all');

        $results = $query->all();
        $this->set('incomes',$results);

    }
}
