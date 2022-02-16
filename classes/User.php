<?php

require_once './classes/CreditCard.php';
class User
{
  protected $name;
  protected $lastname;
  protected $username;
  protected $CreditCards;
  function __construct(string $name, string $lastname, string $username)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->username = $username;
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

  /**
   * Get the value of username
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Set the value of username
   *
   * @return  void
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }


  // show name and lastname
  public function getFullname()
  {
    return $this->getName() . ' ' . $this->getLastName();
  }


  /**
   * Get the value of CreditCards
   */
  public function getCreditCards()
  {
    return $this->CreditCards;
  }

  /**
   * Set the value of CreditCards
   *
   * @return  void
   */
  public function setCreditCards(CreditCard $CreditCards)
  {
    $this->CreditCards = $CreditCards;
  }
  // registra carta
  public function setCreditCard(CreditCard $c)
  {
    $this->setCreditCards($c);
  }
}
