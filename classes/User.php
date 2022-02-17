<?php
require_once __DIR__ . '/CreditCard.php';

class User
{
  protected $id;
  protected $name;
  protected $lastname;
  protected $date;
  protected $city;
  protected $address;
  protected $creditCards;

  public function __construct(int $id, string $name, string $lastname)
  {
    $this->id = $id;
    $this->name = $name;
    $this->lastname = $lastname;
  }
  // GETTER AND SETTER
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
  public function setName(string $name)
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
  public function setLastname(string $lastname)
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

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of date
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * Set the value of date
   *
   * @return  self
   */
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

  /**
   * Get the value of city
   */
  public function getCity()
  {
    return $this->city;
  }

  /**
   * Set the value of city
   *
   * @return  self
   */
  public function setCity($city)
  {
    $this->city = $city;

    return $this;
  }

  /**
   * Get the value of address
   */
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */
  public function setAddress($address)
  {
    $this->address = $address;

    return $this;
  }
}
