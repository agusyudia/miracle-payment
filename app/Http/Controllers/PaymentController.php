<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateaway;
    public function __construct()
    {
        $this->gateaway = Omnipay::create('Paypal_Rest');
        $this->gateaway->setClientId('PAYPAL_CLIENT_ID');
        $this->gateaway->setSecretId('PAYPAL_CLIENT_SECRET');
        $this->gateaway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            $response = $this->gateaway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ));

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
