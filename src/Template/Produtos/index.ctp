<div class="w-100 d-flex  justify-content-between flex-wrap" style="  margin-top:4em;">
    <div class="col-1 align-self-start d-flex ">
        <?= $this->Form->create(null, ['method' => 'POST']) ?>
        <fieldset>

            <?= $this->Form->control('categoria_id', ['empty' => '', 'options' => $categorias]); ?>
            <?= $this->Form->button(__('Filtrar')) ?>
        </fieldset>
        <?= $this->Form->end() ?>

    </div>
    <div class="col-3 d-flex text-center justify-content-center">
    <!-- <?= $this->Form->create(null, ['method' => 'POST']) ?>			
    <label>Pesquise um livro: </label>
    <?= $this->Form->text('pesquisa'); ?>
            <?= $this->Form->button(__('Pesquisar')) ?>
            <?= $this->Form->end() ?> -->
</div>

    <h3 class=" col-5 text-center align-self-center"><?= __('Navegue pelo seu universo favorito') ?></h3>
    <a class="col-3 d-flex flex-wap justify-content-end align-self-start" href="../cakephpmeulogin2/Compras/index"> <img src="https://img.myloview.com.br/posters/icone-de-carrinho-de-compras-vector-700-119391046.jpg" class="img-fluid" width="7%" height="7%">Meu carrinho</a>

        <br>
        <br>
        <br>
        <br>


    <?php

    foreach ($produtos as $produto) : ?>
        <div class="card text-bg-light" style="width: 20rem;">

            <div class="d-flex card-body  flex-wrap justify-content-center">

                <?php echo $this->Html->image($produto->imagem, ['class' => 'card-img-top', 'style' => 'height: 300px;']); ?>
                <h5 class="card-title w-100 text-center"> <?= $produto->nome_produto ?></h5>
                <p class="card-text text-center w-100 "> <?= h($produto->descricao) ?></p>
                <p class="card-text text-center w-100 "> <?= "R$", h($produto->preco) ?></p>
                <?= $this->Html->link(__('Comprar'), ['controller' => 'Compras', 'action' => 'add', $produto->id]) ?>




            </div>

        </div>
    <?php endforeach;

    ?>

    <!-- </div> -->

    <div class="w-100  d-flex paginator justify-content-center  mt-3 ">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-between ">

                <li class="page-item"><?= $this->Paginator->first('<< ' . __('Primeira')); ?></li>
                <li class="page-item"><?= $this->Paginator->prev('< ' . __('Anterior')); ?></li>
                <li class="page-item"><?= $this->Paginator->numbers(); ?></li>
                <li class="page-item"><?= $this->Paginator->next(__('Próxima') . ' >'); ?></li>
                <li class="page-item"><?= $this->Paginator->last(__('Última') . ' >>'); ?></li>
            </ul>

            <?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>

            <br> <br> <br>
        </nav>
    </div>
</div>

<!-- </div>
</div> -->