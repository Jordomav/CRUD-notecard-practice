<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App;
use App\Card;
use App\Note;

class CardsController extends Controller
{
    public function index(){
        //$cards = DB::table('cards')->get();
        $cards = App\Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card){

        return view('cards.show', compact('card'));
    }
    public function store(Request $request){
        $card = new Card;
        $card->title = $request->title;
        $card->save();
        return redirect('/');
    }
    public function create(Card $card){
        return view('cards.showCard', compact('card'));
    }
    public function update(Card $card){
        return view('cards.editCard', compact('card'));
    }
    public function edit(Request $request, Card $card){
        $card->update($request->all());
        return redirect('/');
    }
    public function delete(Card $card){
//        DB::table('cards')->delete($card->id);
        $card->delete();
        return back();
    }
}
