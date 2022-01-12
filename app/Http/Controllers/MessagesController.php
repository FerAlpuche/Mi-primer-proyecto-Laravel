<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ], [
            'name.required' => 'Necesito tu nombre completo'
        ]);

        // Enviar emails
        Mail::to('fernanda.z@ittec.mx')->queue(new MessageReceived($message));


        return 'mensaje enviado';
    }
}
