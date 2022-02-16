<?php

/**
 * CONSENGA
 * --------
 * Classi necssarie per creare uno shop online
 * ...ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping
 * strutturare le classi gestendo l' ereditariet'a dove necesario
 * .......ci potrebbero essere utenti premium aventi diritto a degli sconti esclusivi, o diverse tipologie di prodotti
 * 
 * 
 * provare interazione tra oggetti:
 * .....utente shop inserisce carta credito
 * $c = new CreditCard(..);
 * $user-> insertCreditCard($c);
 * 
 * 
 *
 * BONUS
 * ------
 * Gestire eccezzioni verificabili
 * ...carta di credito scaduta ....
 */

class Shop
{
  public $name; // nome shop
  // public $products; // products extends shop?
  function __construct(string $name, array $products)
  {
    $this->name =  $name;
    $this->products = $products;
  }

  // getter & Setter
  public function getName()
  {
    return $this->name;
  }
  public function setName(string $name)
  {
    $this->name = $name;
  }
  public function getProducts()
  {
    $tmp = [];
    var_dump($this->getProducts());
    foreach ($this->getProducts()  as $prod) {
      $tmp[] =  $prod->getName();
    }
    return $tmp;
  }
  public function setProducts(array $products)
  {
    $this->products = $products;
  }
}

class Product extends Shop
{
  public $name;
  public $price;

  // public $producer;
  // public $available;
  // public $minAge;
  // public $text;
  function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  // function getProductName()
  // {
  //   return $this->name;
  // }

  function getProductPrice()
  {
    return $this->price;
  }
}


$gocciole = new Product('Le Gocciole', 3.9);
$latteIntero = new Product('Latte intero', 1.8);
$myshop = new Shop('Claudio-Shop', [$gocciosle, $latteIntero]);
// var_dump($myshop);

$myshop->getProducts();
?>

<?php

?>