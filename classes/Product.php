<?php
class Product
{
  protected $name;
  protected $price;
  protected $brand;
  protected $quantity;

  function __construct(string $name, float $price, string $brand)
  {
    $this->name = $name;
    $this->price = $price;
    $this->brand = $brand;
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
   * @return
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * Get the value of brand
   */
  public function getBrand()
  {
    return $this->brand;
  }

  /**
   * Set the value of brand
   *
   * @return
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Get the value of quantity
   */
  public function getQuantity()
  {
    return $this->quantity;
  }

  /**
   * Set the value of quantity
   *
   * @return  void
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
}
