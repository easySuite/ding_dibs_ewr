<?php

/**
 * Class RegisterCapturedPayment.
 */
class RegisterCapturedPayment {

  /**
   * Payment organization id.
   *
   * @var string
   */
  protected $organizationId = NULL;

  /**
   * Payment terminal id.
   *
   * @var string
   */
  protected $terminalId = NULL;

  /**
   * Payment organization password.
   *
   * @var string
   */
  protected $terminalPassword = NULL;

  /**
   * Payment gateway payment id.
   *
   * @var string
   */
  protected $gatewayPaymentId = NULL;

  /**
   * Payment order id.
   *
   * @var string
   */
  protected $orderId = NULL;

  /**
   * Payment amount.
   *
   * @var int
   */
  protected $amount = NULL;

  /**
   * Payment order text.
   *
   * @var string
   */
  protected $orderText = NULL;

  /**
   * Payment customer info.
   *
   * @var CustomerInfo
   */
  protected $customerInfo = NULL;

  /**
   * Captured payment registration constructor.
   *
   * @param string $organizationId
   *   Payment organization id.
   * @param string $terminalId
   *   Payment terminal id.
   * @param string $terminalPassword
   *   Payment organization password.
   * @param string $gatewayPaymentId
   *   Payment organization payment id.
   * @param string $orderId
   *   Payment order id.
   * @param int $amount
   *   Payment amount.
   * @param string $orderText
   *   Payment order text.
   * @param CustomerInfo $customerInfo
   *   Payment customer info.
   */
  public function __construct($organizationId, $terminalId, $terminalPassword, $gatewayPaymentId, $orderId, $amount, $orderText, CustomerInfo $customerInfo) {
    $this->organizationId = $organizationId;
    $this->terminalId = $terminalId;
    $this->terminalPassword = $terminalPassword;
    $this->gatewayPaymentId = $gatewayPaymentId;
    $this->orderId = $orderId;
    $this->amount = $amount;
    $this->orderText = $orderText;
    $this->customerInfo = $customerInfo;
  }

}
