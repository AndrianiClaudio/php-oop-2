<?php

require_once __DIR__ . '/CreditCard.php';
class User
{
  protected $name;
  protected $lastname;
  protected $creditCards;
  function __construct(string $name, string $lastname)
  {
    $this->name = $name;
    $this->lastname = $lastname;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  void
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * Get the value of lastname
   */
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  void
   */
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;
  }


  // show name and lastname
  public function getFullname()
  {
    return $this->getName() . ' ' . $this->getLastName();
  }


  /**
   * Get the value of creditCards
   */
  public function getCreditCards()
  {
    return $this->creditCards;
  }
  /**
   * Set the value of creditCards
   *
   * @return  void
   */
  public function setCreditCards(CreditCard $creditCards)
  {
    $this->creditCards = $creditCards;
  }
}
