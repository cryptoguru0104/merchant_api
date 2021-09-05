<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Lib\MXMerchantAPI;

class MxMerChantApiController extends Controller
{
    private $_api = null;

    public function __construct()
    {
        $this->_api = new MXMerchantAPI(env('MX_MERCHANT_USERNAME'), env('MX_MERCHANT_PASSWORD'));
    }

    public function makeVISACreditPayment(Request $request)
    {
        $response = $this->_api->makeVISACreditPayment([
            "paymentType" => "Sale",
            "cardAccount" => [
                "number" => "4242 4242 4242 4242",
                "expiryMonth" => "12",
                "expiryYear" => "22",
                "avsZip" => "10001",
                "cvv" => "123",
                "expiryDate" => "02/22",
                "avsStreet" => "1234",
            ],
            "entryClass" => "WEB",
            "authOnly" => false,
            "isAuth" => false,
            "isSettleFunds" => false,
            "source" => "API",
            "taxExempt" => false,
            "merchantId" => "1000002992",
            "amount" => 30.00,
            "tenderType" => "Card",
            "meta" => "Ticket Purchase - 05/08/2021 - 2 Adult, 2 Children - e4b71df9-6dda-4efc-95ea-88eb7896e3fe",
        ]);

        if ($response->ok()) {
            return response()->json($response->json());
        } else {
            return response($response->body(), $response->status());
        }
    }

    public function test(Request $request) {
        
        return response()->json(['123', '23']);
    }
}
