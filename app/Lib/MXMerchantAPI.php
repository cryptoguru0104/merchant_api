<?php

namespace App\Lib;

use Illuminate\Support\Facades\Http;

class MXMerchantAPI
{

  const API_URL = 'https://sandbox.api.mxmerchant.com/checkout/v3';
  private $_username;
  private $_password;
  private $_http;

  public function __construct($username, $password)
  {
    $this->_username = $username;
    $this->_password = $password;
    $this->_http = Http::withBasicAuth($this->_username, $this->_password)->baseUrl($this::API_URL)->timeout(5);
  }

  public function makeVISACreditPayment($data)
  {
    $response = $this->_http->post('/payment?echo=true&includeCustomerMatches=true', $data);

    return $response;
  }
}
