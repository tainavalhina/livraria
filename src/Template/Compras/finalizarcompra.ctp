<div class="w-100 d-flex justify-content-center flex-wrap " style="margin-top:6em;">

    <h3 class="w-100 d-flex justify-content-center " style="margin-bottom:2em;"> Finalizar Compra </h3>

      <div class=" d-flex align-self-start text-center flex-wrap">
            <div class = "card text-bg-light" style="width: 18rem; --bs-card-border-radius:0;">
                <div class="d-flex card-body  flex-wrap" style="width: 18rem;">

                    
                    <?php echo $this->Html->image($comprar->imagem, ['class' => 'card-img-top', 'style' => 'height: 300px;']); ?>
                    <h5 class="card-title w-100 text-center"> <?= ($comprar['nome_produto']); ?></h5>
                    <p class="card-text text-center w-100 "> <?= h($comprar->descricao) ?></p>
                    </div>
                    
                   </div> </div>
               
                
                <div class=" d-flex col-6 align-self-center justify-content-center flex-wrap">
              

                <?= $this->Form->create($compra) ?>
               <h5><?= "Preencha os dados para finalizar a compra:"?></h5>
                    <?= $this->Form->control('cep',['style' => 'width: 200px;']); ?>
                <?= $this->Form->control('rua',['style' => 'width: 300px;']); ?>
                 <?= $this->Form->control('numero',['style' => 'width: 100px;']); ?>
                 <?= $this->Form->text('status', [ 'type' => 'hidden', 'value' => 'pagamento']); ?>
                        <?= $this->Form->button(__('Salvar')) ?>
                        <?= $this->Form->end() ?> 


    
     </div> </div>