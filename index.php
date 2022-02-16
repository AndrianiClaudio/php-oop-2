<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Premium.php';
require_once __DIR__ . '/classes/Product.php';
// crea nuovo user
// dati user
$user_root_data = [
  'name' => 'Claudio',
  'lastname' => 'Andriani',
  'username' => 'clod',
  'creditCard' => new CreditCard('Claudio Andriani', str_replace(' ', '', '123 4435 0192 1521'), 'Intesa San Paolo'),
];

$root = new User($user_root_data['name'], $user_root_data['lastname'], $user_root_data['username']);
$root->setCreditCards($user_root_data['creditCard']);

// echo 'Iban: ' . $root->getCreditCards()->getIban();



// inserimento prodotti
$gocciole = new Product('Gocciole', 3.18, 'Pavesi');
$gocciole->setQuantity(20);
// echo 'price gocciole: ' . $gocciole->getPrice();
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ .  '/head.php' ?>

<body>
  <main class="main">
    <div class="container">

      <?php
      $premiumUser = new Premium($root->getName(), $root->getLastname(), 'Supreme');

      echo $premiumUser->getFullname() . $premiumUser->getPlane();

      ?>



    </div>
  </main>
</body>

</html>