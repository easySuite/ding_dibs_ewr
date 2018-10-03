<?php

/**
 * Class CustomerInfo.
 */
class CustomerInfo {

  /**
   * Payment customer address.
   *
   * @var string
   */
  protected $address1 = NULL;

  /**
   * Payment customer secondary address.
   *
   * @var string
   */
  protected $address2 = NULL;

  /**
   * Payment customer city.
   *
   * @var string
   */
  protected $city = NULL;

  /**
   * Payment customer country.
   *
   * @var string
   */
  protected $country = NULL;

  /**
   * Payment customer CPR.
   *
   * @var string
   */
  protected $cpr = NULL;

  /**
   * Payment customer CVR.
   *
   * @var string
   */
  protected $cvr = NULL;

  /**
   * Payment customer email.
   *
   * @var string
   */
  protected $email = NULL;

  /**
   * Payment customer name.
   *
   * @var string
   */
  protected $name = NULL;

  /**
   * Payment customer phone.
   *
   * @var string
   */
  protected $phone = NULL;

  /**
   * Payment customer zip.
   *
   * @var string
   */
  protected $zip = NULL;

  /**
   * CustomerInfo constructor.
   */
  public function __construct() {

  }

  /**
   * Set customer's address.
   *
   * @param string $address1
   *   Address value.
   *
   * @return CustomerInfo
   *   Property with address value.
   */
  public function setAddress1($address1) {
    $this->address1 = $address1;
    return $this;
  }

  /**
   * Set customer's secondary address.
   *
   * @param string $address2
   *   Secondary address value.
   *
   * @return CustomerInfo
   *   Property with secondary value.
   */
  public function setAddress2($address2) {
    $this->address2 = $address2;
    return $this;
  }

  /**
   * Set customer's city.
   *
   * @param string $city
   *   Set customer's city.
   *
   * @return CustomerInfo
   *   Property with city value.
   */
  public function setCity($city) {
    $this->city = $city;
    return $this;
  }

  /**
   * Set customer's country.
   *
   * @param string $country
   *   Set customer's country.
   *
   * @return CustomerInfo
   *   Property with country value.
   */
  public function setCountry($country) {
    $this->country = $country;
    return $this;
  }

  /**
   * Set customer's CPR.
   *
   * @param string $cpr
   *   Set customer's CPR.
   *
   * @return CustomerInfo
   *   Property with CPR value.
   */
  public function setCpr($cpr) {
    $this->cpr = $cpr;
    return $this;
  }

  /**
   * Set customer's CVR.
   *
   * @param string $cvr
   *   Set customer's CVR.
   *
   * @return CustomerInfo
   *   Property with CVR value.
   */
  public function setCvr($cvr) {
    $this->cvr = $cvr;
    return $this;
  }

  /**
   * Set customer's email.
   *
   * @param string $email
   *   Set customer's email.
   *
   * @return CustomerInfo
   *   Property with email value.
   */
  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  /**
   * Set customer's name.
   *
   * @param string $name
   *   Set customer's name.
   *
   * @return CustomerInfo
   *   Property with name value.
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * Set customer's phone number.
   *
   * @param string $phone
   *   Set customer's phone.
   *
   * @return CustomerInfo
   *   Property with phone value.
   */
  public function setPhone($phone) {
    $this->phone = $phone;
    return $this;
  }

  /**
   * Set customer's ZIP code.
   *
   * @param string $zip
   *   Set customer's ZIP code.
   *
   * @return CustomerInfo
   *   Property with ZIP code value.
   */
  public function setZip($zip) {
    $this->zip = $zip;
    return $this;
  }

}
