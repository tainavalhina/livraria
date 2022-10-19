<div class=" w-100 d-flex justify-content-center" style="margin-top:8em;">
    <div class="mt-5 mb-5">
        <?= $this->Form->create($produto) ?>

        <h2><?= __('Adicionar Produto') ?></h2>
        <?php
        echo $this->Form->control('nome_produto');
        echo $this->Form->control('descricao');
        echo $this->Form->control('preco');
        echo $this->Form->control('categoria_id');?>
        <h5> Insira imagem da capa: </h5>
       <?php
        echo $this->Form->file('imagem');
        echo $this->Form->button(__('Submit'));
        echo $this->Form->end() ?>

    </div>
</div>