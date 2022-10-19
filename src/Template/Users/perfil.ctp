<?php if ($this->request->getSession()->read("Auth.User")) {?>
<div class="w-100 d-flex justify-content-center flex-wrap px-5" style="margin-top:8em;">
    <div class="card text-bg-light" style="width: 18rem;">
        <div class="d-flex card-body  flex-wrap">




            <h5 class="card-title w-100 text-center"> MEU PERFIL </h5>

            <?php foreach ($querynome as $user) :
                echo $this->Html->image($user->foto, ['class' => 'card-img-top', 'style' => 'height: 250px;']);

            ?>
                <p class="card-text text-center w-100 "><?= "Nome: ", $user['nome'] ?> </p> 
                <br>
                <p class="card-text text-center w-100 "> <?= "Email: ", $user['email'] ?> </p>
                <?= $this->Html->link(__('Editar Perfil'), ['action' => 'edit',  $user->id]) ?>

            <?php endforeach; 
            ?>

        </div>
    </div>
</div>


<?php }else{ 
    
    ?>


<div class="w-100 d-flex justify-content-center flex-wrap px-5" style="margin-top:6em;">

    
   <?= "Realize o login para visualizar o seu perfil"; }?>

