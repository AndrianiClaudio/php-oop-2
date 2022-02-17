<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Premium.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Shoe.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ .  '/head.php' ?>

<body>
  <main class="main">
    <div class="container">

      <?php
      // $premiumUser = new Premium($root->getName(), $root->getLastname(), 'Supreme');

      // echo $premiumUser->getFullname() . $premiumUser->getPlane();
      $root = new User(1, 'Claudio', 'Andriani');
      $root->setCreditCards(new CreditCard('Claudio Andriani', str_replace(' ', '', '123 4435 0192 1521'), 'Intesa San Paolo'));

      $premium = new premium(2, 'test', 'test', 'Gold');

      // echo ($root->getCreditCards()->getIban());
      // echo ($root->getCreditCards()->getOwner());
      // echo ($root->getCreditCards()->getBank());
      $premium->setCreditCards(new CreditCard($premium->getFullname(), 'ibanfakecheckfuturi', 'banca boolean'));
      // test crreazione scarpa e aggiunta attributi
      $airmax = new Shoe(1492923, '79842783282', 'Airmax 90', 129.99, 'Nike', 'Sport');
      $airmax->setSize(['44', '45', '46']);
      $airmax->setGenre('male');

      echo '<h2>' . $root->getFullname() . '</h2>';
      var_dump($root);
      echo '<hr>';
      echo '<h2>' . $premium->getFullname() . '</h2>';
      var_dump($premium);
      echo '<hr>';
      echo '<h2>' . $airmax->getName() . '</h2>';
      echo '<h3>Available size</h3>';
      echo '<ul>';
      foreach ($airmax->getSize() as $size) {
        echo '<li>' . $size . '</li>';
      }
      echo '</ul>';
      var_dump($airmax);
      ?>

    </div>
  </main>
</body>

</html>