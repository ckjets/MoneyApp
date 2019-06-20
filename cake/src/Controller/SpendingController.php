<?php

namespace App\Controller;

use Cake\Controller\Controller;

class SpendingController extends Controller
{
    public $paginate = ['limit' => 5];

    public function initialize()
    {

    }

    public function index()
    {
        $this->set('spendings', $this->paginate());

        $this->set('entity', $this->Spending->newEntity());
    }

    public function add()
    {
        //add
        if ($this->request->is('Post')) {
            $spending = $this->Spending->newEntity($this->request->getData());

            if ($this->Spending->save($spending)) {
                $this->redirect(['action' => 'index']);
            }

            pr($spending);
            $this->set('entity', $spending);
        }
    }

    public function edit() 
    {



    }
}
