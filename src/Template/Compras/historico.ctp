<div class="w-100 d-flex text-center justify-content-center flex-wrap" style="margin-top:6em;">

<h3 class="w-100" style="margin-bottom:1em;">
 
  Historico de Compras </h3>
<div class = "w-100 d-flex justify-content-center flex-wrap">
        <?php foreach ($compra as $compras) : ?>
            <div class = "card text-bg-light" style="width: 18rem; --bs-card-border-radius:0;">
                <div class="d-flex card-body  flex-wrap" style="width: 18rem;">


                    <?php echo $this->Html->image($compras->imagem, ['class' => 'card-img-top', 'style' => 'height: 300px;']); ?>
                    <h5 class="card-title w-100 text-center"> <?= ($compras['nome_produto']); ?></h5>
                    <p class="card-text text-center w-100 "> <?= h($compras->descricao) ?></p>
                    </div>
                    
                   

                </div>
               
    <?php endforeach;?> 
        </div>
        <div class = "w-100 d-flex justify-content-center flex-wrap " style="margin-top:2em;">
    <?= $this->Html->link(__('Voltar'), ['controller' => 'Compras', 'action' => 'index']);?>

     </div>
     <div>

