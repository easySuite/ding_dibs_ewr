<?php

/**
 * Class RegisterCapturedPaymentResponse.
 */
class RegisterCapturedPaymentResponse {

  /**
   * Response fetched from service.
   *
   * @var string
   */
  protected $return = NULL;

  /**
   * Response from service constructor.
   *
   * @param string $return
   *   Value returned from service.
   */
  public function __construct($return) {
    $this->return = $return;
  }

  /**
   * Response fetching.
   *
   * @return string
   *   Extract response string.
   */
  public function getReturn() {
    return $this->return;
  }

}
