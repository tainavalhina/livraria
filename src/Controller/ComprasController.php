<?php

namespace App\Controller;

use App\Controller\AppController;


class ComprasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $session = $this->request->getSession()->read("Auth.User");

        if ($this->request->getSession()->read("Auth.User")) {
            
            $itens = $this->Compras->Produtos->find()
                ->where(['id IN' =>
                $this->Compras->find()->where(['user_id' => $session['id'], 'status' =>'' ])
                    ->select('produto_id', 'nome_produto', 'descricao', 'imagem', 'preco')])
                ->toArray();
            
            $compraid = $this->Compras->find()
            ->where (['user_id' => $session['id'], 'status' => ''])
            ->select('id', 'status')
            ->toArray();


            $this->set(compact('itens','compraid'));
        } else {
            $mensagemlogin = "Por favor, realize o login";
            $this->set('mensagemlogin', $mensagemlogin);
        
        if (empty($itens)) {
            $mensagemcompra = "O carrinho está vazio!";
            $this->set('mensagemcompra', $mensagemcompra);
        }}



        $compras = $this->paginate($this->Compras, [
            'limit' => 5

        ]);

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



    public function add($idproduto = null)
    {


        if ($idproduto != '') {
            $valorid = $this->Compras->Produtos->find()
                ->where(['id' => $idproduto])->first();
        

            // debug($valorid);
            // die;
            $this->set(compact('valorid'));
        }
        $session = $this->request->getSession()->read("Auth.User");

        $compra = $this->Compras->newEntity();

        if ($this->request->is('post')) {
            $compra = $this->Compras->patchEntity($compra, $this->request->getData());
            if ($this->Compras->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra could not be saved. Please, try again.'));
        }

        $produtos = $this->Compras->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('compra', 'session', 'produtos'));
    }


    public function searchproduto()
    {

        $imagem = $this->Compras->Produtos->find()
            ->where(['id' => $_GET['id']])
            ->select('imagem')
            ->first();


        //if ($imagem->imagem != '') {

        $this->set(compact('imagem'));
        //  return $this->redirect($this->referer());
        //}
    }

    public function delete($id = null)
    {

        $compra = $this->Compras->get($id);
        if ($this->Compras->delete($compra)) {
            $this->Flash->success(__('Usuário deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Usuário não foi deletado. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

   
       
            

  public function finalizarcompra($id=null){
                    $comprar = $this->Compras->Produtos->find()
                    ->where(['id IN' =>
                    $this->Compras->find()->
                    where([['id' => $id]])
                    ->select('produto_id','nome_produto', 'descricao', 'imagem', 'preco')])
                    ->first();
            
                    $compra = $this->Compras->get($id, [
                        'contain' => []
                    ]);
                    if ($this->request->is(['patch', 'post', 'put'])) {
                        $compra = $this->Compras->patchEntity($compra, $this->request->getData());
                        if ($this->Compras->save($compra)) {
                        
                            $this->Flash->success(__('The produto has been saved.'));
            
                            return $this->redirect(['action' => 'index']);
                        }
                        $this->Flash->error(__('The produto could not be saved. Please, try again.'));
                    }
            
                    $this->set(compact('compra','comprar'));
            }

            public function historico(){
                $session = $this->request->getSession()->read("Auth.User");

                $compra = $this->Compras->Produtos->find()
                    ->where(['id IN' =>
                    $this->Compras->find()->
                    where(['user_id' => $session['id'],'status' => 'finalizado'])
                    ->select('produto_id','nome_produto', 'descricao', 'imagem', 'preco')])
                    ->toArray();
           
            $this->set(compact('compra'));
        } 
        public function pagamento($id=null){
                
            $session = $this->request->getSession()->read("Auth.User");
            $compra = $this->Compras->Produtos->find()
            ->where(['id IN' =>
            $this->Compras->find()->
            where(['id' => $id])
            ->select('produto_id','nome_produto', 'descricao', 'imagem', 'preco')])
            ->first();
   
             
            $this->set(compact('compra'));
        }
        public function aguardandopagamento(){

            $session = $this->request->getSession()->read("Auth.User");
            $compra = $this->Compras->Produtos->find()
            ->where(['id IN' =>
            $this->Compras->find()->
            where(['user_id' => $session['id'],'status' => 'pagamento'])
            ->select('produto_id','nome_produto', 'descricao', 'imagem', 'preco')])
            ->toArray();             
           


            $compraid = $this->Compras->find()
            ->where (['user_id' => $session['id'], 'status' => 'pagamento'])
            ->select('id')
            ->toArray();

            $this->set(compact('compra','compraid'));
        }
}