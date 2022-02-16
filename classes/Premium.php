<?php
require_once __DIR__ . '/User.php';
class premium extends User
{

  // plane pensato cosi: magari ci sono piu livelli di utente premium base/premium pro
  protected $plane;
  protected $points;
  protected $saleScore;

  public function __construct($name, $lastname, string $plane)
  {
    parent::__construct($name, $lastname);
    $this->plane = $plane;
  }

  /**
   * Get the value of saleScore
   */
  public function getSaleScore()
  {
    return $this->saleScore;
  }

  /**
   * Set the value of saleScore
   *
   * @return  self
   */
  public function setSaleScore($saleScore)
  {
    $this->saleScore = $saleScore;

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
   * Get the value of plane
   */
  public function getPlane()
  {
    return $this->plane;
  }

  /**
   * Set the value of plane
   *
   * @return  self
   */
  public function setPlane($plane)
  {
    $this->plane = $plane;

    return $this;
  }
}
