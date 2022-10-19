
<div class=" w-100 d-flex justify-content-center flex-wrap" style="margin-top:8em;">

  
        <?= $this->Form->create($user) ?>
    
            <legend><?= __('Editar Usuário') ?></legend>
            <?php
            echo $this->Form->control('nome');?>
            <h5> Selecione uma foto:</h5>
          <?php  echo $this->Form->file('foto');
            echo $this->Form->control('email');
            echo $this->Form->control('senha');
            ?>
      
        <?= $this->Form->button(__('Submit')) ?>

        <ul class="side-nav">
     
                <?= $this->Html->link(__('Excluir minha conta'), ['action' => 'delete', $user->id]) ?>

        </ul>
        <?= $this->Form->end() ?>
    </div>
