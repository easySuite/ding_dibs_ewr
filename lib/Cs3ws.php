<?php

/**
 * Class Cs3ws.
 */
class Cs3ws extends \SoapClient {

  /**
   * Mapping of classes.
   *
   * @var array
   *   The defined classes
   */
  private static $classmap = [
    'registerCapturedPayment' => '\\registerCapturedPayment',
    'CustomerInfo' => '\\CustomerInfo',
    'registerCapturedPaymentResponse' => '\\registerCapturedPaymentResponse',
  ];

  /**
   * SOAP request constructor.
   *
   * @param string $wsdl
   *   The wsdl file to use.
   * @param array $options
   *   A array of config values.
   */
  public function __construct($wsdl = NULL, array $options = []) {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $options = array_merge([
      'features' => 1,
    ], $options);
    if (!$wsdl) {
      $wsdl = 'https://service.viborg.dk/ws/services/cs3-ws?wsdl';
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Register captured payment.
   *
   * @param registerCapturedPayment $parameters
   *   Parameters passed for captured payment registration.
   *
   * @return registerCapturedPaymentResponse
   *   The response passed from the service.
   */
  public function registerCapturedPayment(registerCapturedPayment $parameters) {
    return $this->__soapCall('registerCapturedPayment', [$parameters]);
  }

}
