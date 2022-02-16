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
  public $products; // products extends shop?
  function __construct(string $name, string $location)
  {
    $this->name = $name;
    $this->location = $location;
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
  public function getLocation()
  {
    return $this->product;
  }
  public function setLocation(string $location)
  {
    $this->lcoation = $location;
  }
  public function getProducts()
  {
    return $this->product;
  }
  public function setProduct(string $product)
  {
    $this->product = $product;
  }
}


class Product
{
}

// $myshop = new Shop('My Shop', [/* array di prodotti */]);
