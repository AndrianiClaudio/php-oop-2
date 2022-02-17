<?php
require_once __DIR__ . '/User.php';
class premium extends User
{

  protected $level;
  protected $sale;
  protected $points;
  protected $dateStart;
  protected $dateEnd;

  public function __construct($id, $name, $lastname, string $level)
  {
    parent::__construct($id, $name, $lastname);
    $this->level = $level;
  }

  /**
   * Get the value of level
   */
  public function getLevel()
  {
    return $this->level;
  }

  /**
   * Set the value of level
   *
   * @return  self
   */
  public function setLevel($level)
  {
    $this->level = $level;

    return $this;
  }

  /**
   * Get the value of sale
   */
  public function getSale()
  {
    return $this->sale;
  }

  /**
   * Set the value of sale
   *
   * @return  self
   */
  public function setSale($sale)
  {
    $this->sale = $sale;

    return $this;
  }

  /**
   * Get the value of points
   */
  public function getPoints()
  {
    return $this->points;
  }

  /**
   * Set the value of points
   *
   * @return  self
   */
  public function setPoints($points)
  {
    $this->points = $points;

    return $this;
  }

  /**
   * Get the value of dateStart
   */
  public function getDateStart()
  {
    return $this->dateStart;
  }

  /**
   * Set the value of dateStart
   *
   * @return  self
   */
  public function setDateStart($dateStart)
  {
    $this->dateStart = $dateStart;

    return $this;
  }

  /**
   * Get the value of dateEnd
   */
  public function getDateEnd()
  {
    return $this->dateEnd;
  }

  /**
   * Set the value of dateEnd
   *
   * @return  self
   */
  public function setDateEnd($dateEnd)
  {
    $this->dateEnd = $dateEnd;

    return $this;
  }
}
