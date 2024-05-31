<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AdviceController extends Controller
{
    protected $baseUrl = 'https://api.adviceslip.com/';

    public function index()
    {
        // Fetch a random advice slip
        $response = Http::get($this->baseUrl . 'advice');
        $randomAdvice = $response->json();

        return view('advice.index', ['randomAdvice' => $randomAdvice]);
    }
}
