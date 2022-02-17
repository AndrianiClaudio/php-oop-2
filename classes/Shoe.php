<?php
require_once __DIR__ . '/Shoe.php';
require_once __DIR__ . '/../traits/ClothingAttribute.php';
class Shoe extends Product
{
  protected $sole;
  protected $typeShoe;
  protected $laces;

  public function __construct(int $id, string $code, string $name, float $price, string $brand, string $type)
  {
    parent::__construct($id,  $code,  $name,  $price,  $brand,  $type);
  }

  use ClothingAttribute;
  /**
   * Get the value of sole
   */
  public function getSole()
  {
    return $this->sole;
  }

  /**
   * Set the value of sole
   *
   * @return  self
   */
  public function setSole($sole)
  {
    $this->sole = $sole;

    return $this;
  }

  /**
   * Get the value of typeShoe
   */
  public function getTypeShoe()
  {
    return $this->typeShoe;
  }

  /**
   * Set the value of typeShoe
   *
   * @return  self
   */
  public function setTypeShoe($typeShoe)
  {
    $this->typeShoe = $typeShoe;

    return $this;
  }

  /**
   * Get the value of laces
   */
  public function getLaces()
  {
    return $this->laces;
  }

  /**
   * Set the value of laces
   *
   * @return  self
   */
  public function setLaces($laces)
  {
    $this->laces = $laces;

    return $this;
  }
}
