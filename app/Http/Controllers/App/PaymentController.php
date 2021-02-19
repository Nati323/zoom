<?php

namespace App\Http\Controllers\App;

use App\Models\App\Actor;
use App\Models\App\ActorTransaction;
use stdClass;

class PaymentController extends AppBaseController
{
    public function landing()
    {
        $recipient_user = Actor::first();
        $recipient_user->tipFor = 'Delivery';
        $payer_user = new stdClass();
        $payer_user->name = 'Nati Vaknin';
        $payer_user->phone = '0547554374';

        $payment_data = ActorTransaction::first();
        $page_data = ['recipient_user' => $recipient_user, 'payer_user' => $payer_user, 'payment_data' => $payment_data];

        return $this->showPage('landing', $page_data);
    }
}
