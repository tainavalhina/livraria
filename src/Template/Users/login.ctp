<div class=" w-100 d-flex justify-content-center" style="margin-top:10em;">

    <?= $this->Form->create() ?>
    <h2>Login</h2>

    <?php
    echo $this->Form->control('email');
    echo $this->Form->control('senha');
    ?>
    <?= $this->Html->link(__('Não possuo cadastro'), ['action' => 'add']) ?>
    <br>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>