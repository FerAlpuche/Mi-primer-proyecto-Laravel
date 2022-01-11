<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
        ];

        return view('portafolio', compact('portafolio'));
    }
}
