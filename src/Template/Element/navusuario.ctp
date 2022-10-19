<div class="container ">
  <nav class=" navbar navbar-expand-lg fixed-top bg-primary p-2" style="--bs-bg-opacity: .4;">

    <div class=" container-fluid">
      <a class="navbar-brand" href="http://localhost/cakephpmeulogin2/Users/livraria">Livraria
        <?php echo $this->Html->image('livro logo.png', ['style' => 'height: 30px;']); ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">

        <li class="nav-link">
                    <?= $this->Html->link(__('Página inicial'), ['controller' => 'Users', 'action' => 'index']); ?>
                 
                    </li>

          <li class="nav-link">
                    <?= $this->Html->link(__('Conheça nossos produtos'), ['controller' => 'Produtos', 'action' => 'index']); ?>
                 
                    </li>


                
          <li class="nav-link">
                    <?= $this->Html->link(__('Meu perfil'), ['controller' => 'Users', 'action' => 'perfil']); ?>
                 
                    </li>


          <li class="nav-link">
                    <?= $this->Html->link(__('Meu carrinho'), ['controller' => 'Compras', 'action' => 'index']); ?>
                 
                    </li>

                    <li class="nav-link">
                    <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']); ?>
                    </li>
        </ul>
      </div>
    </div>
  </nav>
</div>