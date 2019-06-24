<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class IncomesController extends Controller
{
    public $paginate = ['limit' => 5];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');


    }
    // public $components = array ('Flash');
    
    public function index()
    {
        //IncomesControllerでReasonsTableを呼び出す
        $this->Reasons = TableRegistry::get('Reasons');

        // 関連テーブルのリスト取得
        $this->set('incomes', $this->paginate($this->Incomes->find('all')->contain(['Reasons'])));
        $this->set('reasons', $this->Reasons->find('all'));
        
        $this->set('entity', $this->Incomes->newEntity());
    }


    public function add()
    {


        if ($this->request->is('Post')) {
            $income = $this->Incomes->newEntity($this->request->getData());

            if ($this->Incomes->save($income)) {

                $this->Flash->success(__('収入が保存されました。',['element'=>'flash']));

                $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('投稿エラー'));
            }

            $this->set('entity', $income);
        }
    }

    public function delete($id)
    {
      // POSTメソッドのみを許可
      $this->request->allowMethod(['post','put']);
    
      $income = $this->Incomes->get($id);
    
      // 削除成功
      if ($this->Incomes->delete($income)) {
        $this->Flash->success(__('収入が削除されました。'));
        return $this->redirect(['action' => 'index']);
      }
    }

    public function edit() {
        //
    }
}
