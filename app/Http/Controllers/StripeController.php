<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        return view('stripe');
    }

    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => 100,
            "currency" => "INR",
            "source" => $request->stripeToken,
            "description" => "Payment Successful"
        ]);

        $status = 1;

        if ($request->stripeToken) {
            $id = Auth::user()->id;
            User::where('id', $id)->update(array('paymentid' => $status));
            return redirect('home');
        }
    }
    public function cancel()
    {
        return redirect('/home');
    }
}
