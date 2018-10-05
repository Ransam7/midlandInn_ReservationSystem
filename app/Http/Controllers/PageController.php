<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class PageController extends Controller
{

	public function success(){
		echo 'payment was successful.';
	}

	public function cancel(){
		echo 'payment was cancelled.';
	}

	public function postPayment(Request $request){

		$r = ['response'=>'','error_message'=>''];

		if($request->isMethod('post'))
		{
			$validator = Validator::make($request->all(), [
				'total'=>'required'
		    ]);

			if($validator->fails())
		        $r['error_message'] = $validator->errors();
		    else
		    {
			    $apiContext = new \PayPal\Rest\ApiContext(
			        new \PayPal\Auth\OAuthTokenCredential(
			            env('CLIENT_ID'),     // ClientID
			            env('CLIENT_SECRET')      // ClientSecret
			        )
				);

				// After Step 2
				$payer = new \PayPal\Api\Payer();
				$payer->setPaymentMethod('paypal');

				$amount = new \PayPal\Api\Amount();
				$amount->setTotal($request->post('total'));
				$amount->setCurrency('PHP');

				$transaction = new \PayPal\Api\Transaction();
				$transaction->setAmount($amount);

				$redirectUrls = new \PayPal\Api\RedirectUrls();
				$redirectUrls->setReturnUrl("https://google.com.ph")
				    ->setCancelUrl("https://facebook.com");

				$payment = new \PayPal\Api\Payment();
				$payment->setIntent('sale')
				    ->setPayer($payer)
				    ->setTransactions(array($transaction))
				    ->setRedirectUrls($redirectUrls);

				try {
				    $payment->create($apiContext);
    				

    				$p = \PayPal\Api\Payment::get($payment->getId(), $apiContext);
				    //$r['response'] = json_decode($payment);
					$r['response'] = json_decode($p);
				}
				catch (\PayPal\Exception\PayPalConnectionException $ex) {
				    $r['error_message'] = json_decode($ex->getData());
				}
		    }


		}
		
		return response()->json($r);

	}
    //
    public function test(){

    	$room_types = \App\RoomType::all();
    	return view('pages.index',['room_types'=>$room_types]);	
    }
}
