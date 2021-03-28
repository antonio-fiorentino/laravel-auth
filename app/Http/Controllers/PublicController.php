<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class PublicController extends Controller
{
    public function index(){
        $cards = Card::all();
        return view('cards.public.index', compact('cards'));
    }

    public function show(Card $card){

        
        return view('cards.public.show', compact('cards'));
    }
}
