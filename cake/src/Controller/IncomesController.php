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
<<<<<<< HEAD
                $this->Flash->success(__('収入が登録されました。'));
=======
                //$this->Flash->success(__('収入が登録されました。'));
>>>>>>> 4de5ef4a7fe5ccebc03ad1855d5e73252ea5c20a
                $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('投稿エラー'));
            }
            $this->set('entity', $income);
        }
    }

    public function delete($id)
    {
<<<<<<< HEAD
        // POSTとPUTメソッドを許可
        $this->request->allowMethod(['post', 'put']);

        $income = $this->Incomes->get($id);

        // 削除成功
        if ($this->Incomes->delete($income)) {
            $this->Flash->success(__('収入が削除されました。'));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function edit()
    {
        if ($this->request->is('post')) {
            $postData = $this->request->getData();
            $income = $this->Incomes->get($postData['id']);

            $income = $this->Incomes->patchEntity($income, $postData);
            if ($this->Incomes->save($income)) {
                $this->Flash->success(__('更新しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }

        $this->set(compact('income'));
        $this->render('edit');
=======
      // POSTとPUTメソッドを許可
      $this->request->allowMethod(['post','put']);
      $income = $this->Incomes->get($id);
      // 削除成功
      if ($this->Incomes->delete($income)) {
        // $this->Flash->success(__('収入が削除されました。'));
        return $this->redirect(['action' => 'index']);
      }
    }

    public function edit($id = null) {

        if($this->request->is('post')) {
            $postData = $this->request->getData();
            $income = $this->Incomes->patchEntity($income, $postData);
        }

        if ($this->Incomes->save($postData)) {
            return $this->redirect(['action' => 'index']);
          }
>>>>>>> 4de5ef4a7fe5ccebc03ad1855d5e73252ea5c20a
    }
}
