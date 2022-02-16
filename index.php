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
      $root = new User($user_root_data['name'], $user_root_data['lastname'], $user_root_data['username']);
      echo $root->getName() . ' ' . $root->getLastname() . ' -> ' . $root->getUsername();
      ?>
    </div>
  </main>
</body>

</html>