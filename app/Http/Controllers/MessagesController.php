<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ], [
            'name.required' => 'Necesito tu nombre completo'
        ]);

        return "Datos validados";
    }
}
