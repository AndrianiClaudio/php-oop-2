<?php
trait ClothingAttribute
{
  protected $genre;
  protected $size;
  protected $tissue;

  /**
   * Get the value of size
   */
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   *
   * @return  self
   */
  public function setSize(array $size)
  {
    $this->size = $size;

    return $this;
  }

  /**
   * Get the value of tissue
   */
  public function getTissue()
  {
    return $this->tissue;
  }

  /**
   * Set the value of tissue
   *
   * @return  self
   */
  public function setTissue(string $tissue)
  {
    $this->tissue = $tissue;

    return $this;
  }

  /**
   * Get the value of genre
   */
  public function getGenre()
  {
    return $this->genre;
  }

  /**
   * Set the value of genre
   *
   * @return  self
   */
  public function setGenre($genre)
  {
    $this->genre = $genre;

    return $this;
  }
}
