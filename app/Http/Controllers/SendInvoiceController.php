<?php

namespace App\Http\Controllers;

use App\Mail\SendInvoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendInvoiceController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke( Request $request ) {

// Send mail
// show th mail in the browser

$user=User::first();

// return (new SendInvoice(now()->format('F')))->render();
Mail::to($user)->send(new SendInvoice(now()->format('F')));
return "success";

    }
}
