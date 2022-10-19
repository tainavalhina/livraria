<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 *
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    // public function indexcategoria($t = null,)
    // {

    //     echo $t;
    //     die;
    // }

    public function index($id = 0)
    {
        // $pesquisar = $_POST['pesquisa'];
        // echo $pesquisar;
        // $pesquisa = $_POST('pesquisar');
        // $this->indexcategoria('teste');

        $tipocategoria = $this->Produtos->find()
            ->where(['categoria_id' => $id]);

        // debug($tipocategoria);
        // die;

        if ($this->request->is(['put', 'patch', 'post'])) {
            // && !empty($_POST['categoria_id'])

            // pr($_POST);

            $tipocategoria = $this->Produtos->find()
                ->where(['categoria_id' => $_POST['categoria_id']]);

            // debug(!empty($_POST['categoria_id']));

            $this->set(
                'produtos',
                $this->paginate($tipocategoria, ['limit' => 5])
            );
        } else {


            $produtos = $this->paginate($this->Produtos, [
                'limit' => 5
            ]);

            $this->set(compact('produtos'));
        }
        $categorias = $this->Produtos->Categorias->find('list');

        $this->set(compact('categorias'));


    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => ['Compras']
        ]);

        $this->set('produto', $produto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()

    {
        $imagens = $this->Compras->Produtos->find()
            ->where(['id IN' =>
            $this->Compras->find()
                ->where(['produto_id' => $_GET['produto_id']])
                ->select('produto_id', 'imagem')])
            ->toArray();

        $this->set(compact('imagens'));


        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $this->set(compact('produto'));
    }


    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $this->set(compact('produto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function filtroproduto() {

    }

}
