<div class="w-100 d-flex justify-content-center flex-wrap" style="margin-top:6em;">
<div class ="w-100 d-flex text-center justify-content-end">
<?php echo $this->Html->image('alert.jpg', ['style' => 'height:35px;']); ?>

<?= $this->Html->link(__('Aguardando Pagamento'), ['controller' => 'Compras', 'action' => 'aguardandopagamento']);?>

<?php echo $this->Html->image('check.jpg', ['style' => 'height: 50px;']); ?>

   <?= $this->Html->link(__('Pedidos Finalizados'), ['controller' => 'Compras', 'action' => 'historico']);
    ?> </div>

    <h3 class="w-100 mb-5 text-center"> Meu carrinho </h3>

    <?php if (empty($itens) && (empty($this->request->getSession()->read("Auth.User")))) { ?>
        <h5><?php echo $mensagemcompra;
           echo $mensagemlogin;?>
            <br>
           <?php echo $this->Html->image('sad-eyes.gif', ['class' => 'card-img-top', 'style' => 'height:200px; width:200px;']); ?>

            </h5>  
           
    <?php } elseif(empty($itens)) {?>
       <?php echo "O carrinho está vazio"; 
        echo $this->Html->image('sad-eyes.gif', ['class' => 'card-img-top', 'style' => 'height:200px; width:200px;']);
        }else{?>

        <?php foreach ($itens as $item) : ?>
            <div class = "card text-bg-light" style="width: 18rem; --bs-card-border-radius:0;">
                <div class="d-flex card-body  flex-wrap" style="width: 18rem;">


                    <?php echo $this->Html->image($item->imagem, ['class' => 'card-img-top', 'style' => 'height: 300px;']); ?>
                    <h5 class="card-title w-100 text-center"> <?= ($item['nome_produto']); ?></h5>
                    <p class="card-text text-center w-100 "> <?= h($item->descricao) ?></p>
                    </div>
                    
                   

                </div>
               
    <?php endforeach;?>
     </div>

   
     <div class="w-100 d-flex justify-content-center flex-wrap">


    <?php foreach ($compraid as $idcompra) : ?>
        <div class = "card text-bg-light mb-3" style="width: 18rem;--bs-card-border-radius:0;">
        <div class="justify-content-center d-flex card-body  flex-wrap">
        <?= $this->Html->link(__('Excluir compra'), [ 'action' => 'delete', $idcompra->id]); ?>
        </div>
        <?= $this->Html->link(__('Finalizar compra'), [ 'action' => 'finalizarcompra', $idcompra->id]); ?>
        </div>
    <?php endforeach;}
   ?> 
</div>