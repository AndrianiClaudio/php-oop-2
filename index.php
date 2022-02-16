<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ .  '/head.php' ?>

<body>
  <main class="main">
    <div class="container">
      <?php
      //  require_once __DIR__ . '/Shop.php' 
      require_once __DIR__ . '/classes/User.php';
      $user_root_data = [
        'name' => 'Claudio',
        'lastname' => 'Andriani',
        'username' => 'clod'
      ];
      // crea nuovo user
      $root = new User($user_root_data['name'], $user_root_data['lastname'], $user_root_data['username']);
      // echo $root->getName() . ' ' . $root->getLastname() . ' -> ' . $root->getUsername();

      $c = new CreditCard($root->getFullname(), str_replace(' ', '', '123 4435 0192 1521'), 'Intesa San Paolo');
      $root->setCreditCard($c);
      var_dump($root->getCreditCards());
      // si prova la associazione di una creditcard per user
      ?>
    </div>
  </main>
</body>

</html>