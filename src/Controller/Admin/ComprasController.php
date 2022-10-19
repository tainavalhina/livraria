<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Compras Controller
 *
 * @property \App\Model\Table\ComprasTable $Compras
 *
 * @method \App\Model\Entity\Compra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComprasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Produtos']
        ];
        $compras = $this->paginate($this->Compras);

        $this->set(compact('compras'));
    }

    /**
     * View method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compra = $this->Compras->get($id, [
            'contain' => ['Users', 'Produtos']
        ]);

        $this->set('compra', $compra);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    public function add()
    {
        $compra = $this->Compras->newEntity();
        if ($this->request->is('post')) {
            $compra = $this->Compras->patchEntity($compra, $this->request->getData());
            //   debug($this->request->getData());
            //  die;
            if ($this->Compras->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra could not be saved. Please, try again.'));
        }
        $users = $this->Compras->Users->find('list', ['limit' => 200]);
        $produtos = $this->Compras->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('compra', 'users', 'produtos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compra = $this->Compras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compra = $this->Compras->patchEntity($compra, $this->request->getData());
            if ($this->Compras->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra could not be saved. Please, try again.'));
        }
        $users = $this->Compras->Users->find('list', ['limit' => 200]);
        $produtos = $this->Compras->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('compra', 'users', 'produtos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compra = $this->Compras->get($id);
        if ($this->Compras->delete($compra)) {
            $this->Flash->success(__('The compra has been deleted.'));
        } else {
            $this->Flash->error(__('The compra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
