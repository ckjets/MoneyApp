<?php

namespace App\Controller;

use Cake\Controller\Controller;

class SpendingController extends Controller
{
    public $paginate = ['limit' => 5];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $this->set('spendings', $this->paginate($this->Spending->find('all')));

        $this->set('entity', $this->Spending->newEntity());
    }

    public function add()
    {
        //add
        if ($this->request->is('Post')) {
            $spending = $this->Spending->newEntity($this->request->getData());

            if ($this->Spending->save($spending)) {
                $this->Flash->success(__('支出が登録されました。'));
                $this->redirect(['action' => 'index']);
            }

            $this->set('entity', $spending);
        }
    }


    public function delete($id)
    {
        // POSTとPUTメソッドを許可
        $this->request->allowMethod(['post', 'put']);

        $spending = $this->Spending->get($id);

        // 削除成功
        if ($this->Spending->delete($spending)) {
            $this->Flash->success(__('支出が削除されました。'));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function edit()
    { }
}
