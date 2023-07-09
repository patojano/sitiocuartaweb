<?php

namespace App\Http\Controllers\sitio;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    function send(Request $request)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SendEmail($request->name, $request->email, $request->subject, $request->message));
        return redirect()->to(url('/') . '#contact')->with('success','Tu mensaje ha sido enviado. ¡Gracias!');
    }
}
