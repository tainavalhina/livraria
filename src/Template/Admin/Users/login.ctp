<div class="col-3 mt-5 mb-5 align-bottom">
    <?= $this->Form->create() ?>
    <h1>Login</h1>
    <div class="mt-5 mb-5">
        <?php
        echo $this->Form->control('email');
        echo $this->Form->control('senha');
        ?>
    </div>
    <?= $this->Html->link(__('Não possuo cadastro'), ['action' => 'add']) ?>
    <br>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>