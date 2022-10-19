
  <div class=" w-100 d-flex justify-content-center" style="margin-top:8em;">
    <div class="mt-5 mb-5 align-bottom">
        <div class="compras form large-9 medium-8 columns content">
            <?= $this->Form->create($compra) ?>
            <fieldset>
                <legend><?= __('Adicionar Compra') ?></legend>
                <?php
                echo $this->Form->control('user_id');
                echo $this->Form->control('produto_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
