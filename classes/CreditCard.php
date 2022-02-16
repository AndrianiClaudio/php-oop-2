<?php
class CreditCard
{
  protected $owner;
  protected $iban;
  protected $bank;

  function __construct(string $owner, string $iban, string $bank)
  {
    $this->owner = $owner;
    $this->iban = $iban;
    $this->bank = $bank;
  }

  /**
   * Get the value of owner
   */
  public function getOwner()
  {
    return $this->owner;
  }

  /**
   * Set the value of owner
   *
   * @return  void
   */
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }

  /**
   * Get the value of iban
   */
  public function getIban()
  {
    return $this->iban;
  }

  /**
   * Set the value of iban
   *
   * @return  void
   */
  public function setIban($iban)
  {
    $this->iban = $iban;
  }

  /**
   * Get the value of bank
   */
  public function getBank()
  {
    return $this->bank;
  }

  /**
   * Set the value of bank
   *
   * @return  void
   */
  public function setBank($bank)
  {
    $this->bank = $bank;
  }
}
