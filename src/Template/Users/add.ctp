<div class=" d-flex w-100 justify-content-center" style="margin-top:10em;">
    <div class="users form large-9 medium-8 columns content text-center">
    <legend><?= __('Novo Usuário') ?></legend>
    
    <?= $this->Form->create($user) ?>
        <fieldset>

            <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->file('foto');
            echo $this->Form->control('role_id', ['type' => 'hidden', 'value' => '2']);
            echo $this->Form->control('senha');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Salvar')) ?>
        <?= $this->Form->end() ?>
    </div>

</div>