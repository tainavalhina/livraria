<?php if (empty($this->request->getSession()->read("Auth.User"))) { ?>
  <div class=" w-100 d-flex justify-content-center" style="margin-top:8em;">


<h4> Por favor, realize o login para efetuar compra</h4>
</div>
</div>
<?php  } else{ ?>

  
<div class=" w-100 d-flex justify-content-center flex-wrap" style="margin-top:8em;">
  <?= $this->Form->create($compra) ?>

  <fieldset>
    <h4 class="text-center">Livro selecionado:</h4>

    <?= $this->Form->text('user_id', ['class' => 'col-4', 'type' => 'hidden', 'value' => $session['id']]); ?>

    <?php echo $this->Html->image($valorid->imagem, ['class' => 'card-img-top', 'style' => 'height: 280px;']);
    echo $this->Form->control('produto_id', ['id' => 'produtoid', 'type' => 'hidden', 'value' => $valorid->id]);
    ?>

    <div id="produtoimagem">

    </div>
  </fieldset>
  <?= $this->Form->button(__('Adicionar ao carrinho')) ?>
  <?= $this->Form->end() ?>



  <div class="col-12">
    <input id="urlproduto" value="<?= $this->Url->build([' controller' => 'Compras', 'action' => 'searchproduto']) ?>" class="d-none">
  </div>
<br>
  <?= $this->Html->link(__('Voltar'), ['controller' => 'Produtos', 'action' => 'index']); ?>
</div>




<?php } ?>