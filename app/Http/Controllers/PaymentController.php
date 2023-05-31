<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Mail\ReservationConfirmation;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        $reservationId = $request->input('reservation_id');
        $reservation = Reservation::findOrFail($reservationId);
        $paymentIntent = $this->createPaymentIntent($reservation);

        return view('payments.create', compact('reservation', 'paymentIntent'));
    }

    public function complete(Request $request)
    {
        $reservationId = $request->input('reservation_id');
        $reservation = Reservation::findOrFail($reservationId);

        // Perform payment completion logic here
        // You can handle the Stripe webhook event or any other payment verification process

        // Assuming the payment is successful
        $reservation->is_paid = true;
        $reservation->save();

        Mail::to($request->email)->send(new ReservationConfirmation($reservation));

        return redirect()->route('reservations.infos', ['id' => $reservation->id])->with('success', trans('validation.reservation_success'));
    }

    private function createPaymentIntent(Reservation $reservation)
    {
        Stripe::setApiKey('sk_test_51MlAg4D2dzVBVsLgV6HnejFU9d931M4kKYKTjLIj0WlplpPCVpi4epJbEru4uwqMfAFFpkPUYWMWor01c1XDte1N009ZrrNreL');

        return PaymentIntent::create([
            'amount' => $reservation->prix_total * 100, // Stripe accepts payment amounts in cents
            'currency' => 'usd', // Update with your desired currency
            'metadata' => [
                'reservation_id' => $reservation->id,
            ],
        ]);
    }
}
