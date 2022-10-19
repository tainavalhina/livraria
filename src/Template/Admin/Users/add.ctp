<div class=" w-100 d-flex justify-content-center" style="margin-top:8em;">
    <div class="mt-5 mb-5 align-bottom">
        <div class="users form large-9 medium-8 columns content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Adicionar Novo Usuário') ?></legend>
                <?php
                echo $this->Form->control('nome');
                echo $this->Form->file('foto');
                echo $this->Form->control('email');
                echo $this->Form->control('role_id');
                echo $this->Form->control('senha');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>