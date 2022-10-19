<div class="container">
  <nav class="navbar navbar-expand-lg bg-light fixed-top">

    <div class="container-fluid">
      <?php echo $this->Html->image('livro logo.png', ['style' => 'height: 30px;']); ?>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav mr-auto">

          <li class="nav-link" style="margin-top:15px;">
          <?php echo $this->Html->link('Página Inicial', array('controller' => 'Users', 'action' => 'index')); ?></li>

          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produtos
            </a>
            <ul class="dropdown-menu">
              <li> <?php echo $this->Html->link('Adicionar produtos', array('controller' => 'Produtos', 'action' => 'add')); ?></li>
              <li> <?php echo $this->Html->link('Listar produtos', array('controller' => 'Produtos', 'action' => 'index')); ?></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuários
            </a>
            <ul class="dropdown-menu">
              <li> <?php echo $this->Html->link('Adicionar usuário', array('controller' => 'Users', 'action' => 'add')); ?></li>
              <li> <?php echo $this->Html->link('Listar usuário', array('controller' => 'Users', 'action' => 'index')); ?></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Compras
            </a>
            <ul class="dropdown-menu">
              <li> <?php echo $this->Html->link('Adicionar compra', array('controller' => 'Compras', 'action' => 'add')); ?></li>
              <li> <?php echo $this->Html->link('Listar compras', array('controller' => 'Compras', 'action' => 'index')); ?></li>
            </ul>
          </li>

          <li class="nav-link" style="margin-top:10px;">
        <?php echo $this->Html->link('Logout', array('controller' => '../Users', 'action' => 'logout')); ?>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
</div>