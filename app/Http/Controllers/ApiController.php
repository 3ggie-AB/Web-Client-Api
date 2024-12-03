<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function items(){
        $items = Http::get(env('API_URL').'/items')->json();
        return view('items',compact('items'));
    }

    public function customers(){
        $customers = Http::get(env('API_URL').'/customers')->json();
        return view('customers',compact('customers'));
    }
}
