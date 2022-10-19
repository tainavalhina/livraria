<?php
namespace App\Auth;
namespace App\View\Helper;

use Controller\Component\Auth;

use Cake\Auth\BaseAuthenticate;
use Cake\View\Helper;
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <?= $this->Html->css([
    'bootstrap.min.css',
    'form.css', 'cover.css'
  ]) ?>
  <?= $this->Html->script(['bootstrap.bundle.min.js', 'jquery-3.6.0.min.js', 'script.js']) ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>

<body>

  <?php    $valor = $this->Session->read('Auth.User');
  // debug($valor);
  // die;

  if ($this->request->getSession()->read("Auth.User") && $valor['role_id']==2) {

  // debug($this->request->getSession())
  // die;
   echo
    '<header class="mb-auto">
    <div class="cover-container d-flex p-3 mx-auto flex-column">
      <nav class="top-bar expanded sticky-top" data-topbar role="navigation">';
    echo $this->element('navusuario');
    echo
    '</nav>
      </header>';
    echo '
  </div>';
  } elseif($this->request->getSession()->read("Auth.User") && $valor['role_id']==1){
    echo
    '<header class="mb-auto">
    <div class="cover-container d-flex p-3 mx-auto flex-column">
      <nav class="top-bar expanded sticky-top" data-topbar role="navigation">';

      echo $this->element('navadmin');
    echo
    '</nav>
      </header>';
    echo '
  </div>';
  }
  
  
  
  else {
    echo
    '<header class="mb-auto">
      <nav class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top">';
    echo $this->element('navinicial');
    echo
    '</header>';
    echo '
      </div>';
  } ?>

  <?= $this->Flash->render(); ?>
  <div class="w-100">
    <?= $this->fetch('content'); ?>
  </div>


  <footer class="text-black-50 fixed-bottom" ;>

    <?php echo $this->element('footer'); ?>
  </footer>



</body>

</html>