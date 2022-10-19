<?php

namespace App\Controller;

use Controller\Component\Auth;
use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{



    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user ) {
                $this->Auth->setUser($user);
               
                if($user['role_id']==2) {
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);}
                else{
                    return $this->redirect(['controller' => 'admin/Users', 'action' => 'index']);
                }
            } else {
                $this->Flash->error(__('Usuário incorreto'));
            }
        }
    }
    public function produtos()
    {
        $this->redirect(['controller' => 'Produtos', 'action' => 'index']);
    }
    public function compras()
    {
        $this->redirect(['controller' => 'Compras', 'action' => 'index']);
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()

    {

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário não foi salvo. Tente novamente.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);

        $this->set(compact('user', 'roles'));
    }

    public function perfil()
    {
        $session = $this->request->getSession()->read("Auth.User");
        $querynome = $this->Users->find()
            ->select(['id', 'nome', 'email', 'senha', 'foto'])
            ->where(['email' => $session['email']])
            ->toArray();
        $this->set(compact('querynome'));
    }

    public function edit($id= 0)
    {

        if ($id != '') {
            $userid = $this->Users->find()
                ->where(['id' => $id])->first();
        
            $this->set(compact('id'));
        }
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário não foi salvo. Tente novamente.'));
        }
        $this->set(compact('user'));
    }


    public function livraria()
    {
    }

    public function delete($id = null)
    {
        
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Usuário não foi deletado. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
