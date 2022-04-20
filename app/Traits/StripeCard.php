<?php

namespace App\Traits;
use Illuminate\Http\Request;
use App\UserCardDetail;
use Session;
use Stripe;
use DB;

trait StripeCard
{
	public function addCard($data){

		try {
		  
	        $expiry = explode('/', $data['expiry']);
	        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
	      
	        $token = \Stripe\Token::create([
			 'card' => [
			   'number' 	=> $data['number'],
			   'exp_month' => $expiry[0],
			   'exp_year' => $expiry[1],
			   'cvc'	 => $data['cvc'],
			   
			 ]
			]);
		
			  $customer = \Stripe\Customer::create(array(
			    'email'  =>  $data['email'],
			    'source' => $token
			  ));

		    $user_card_detail                 = new UserCardDetail;
		    $user_card_detail->user_id        = $data['user_id'];
		    $user_card_detail->name           = $data['name'];
		    $user_card_detail->stripe_card_id = $token->card['id'];
		    $user_card_detail->card_token     = $token->id;
		    $user_card_detail->brand          = $token->card['brand'];
		    $user_card_detail->country        = $token->card['country'];
		    $user_card_detail->last           = $token->card['last4'];
		    $user_card_detail->raw            = $token->card;
		  
		    $user_card_detail->save();
			return true;

		}catch (\Exception $e) 
		{
	        return 	$e->getMessage();
	    }
	}

  
}