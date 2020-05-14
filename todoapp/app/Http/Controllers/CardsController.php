<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Card;
use Auth;
use Validator;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function new($listing_id){
        
        $listing_data = Listing::find($listing_id);
        return view('card/new',['listing' => $listing_data]);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() ,['card_name' => 'required|max:255', 'card_memo' => 'required']);
        
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        $cards = new Card;
        $cards->title = $request->card_name;
        $cards->memo = $request->card_memo;
        $cards->listing_id = $request->id;
        $cards->save();
        
        return redirect('/');
        
    }
    
    public function show($listing_id, $card_id){
        $listing_data = Listing::find($listing_id);
        $card_data = Card::find($card_id);
        
        return view('card/show',['listing' => $listing_data],['card' => $card_data]);
    }
    
    public function edit($card_id){
        $card_data = Card::find($card_id);
        return view('card/edit', ['card' => $card_data]);
    }
    
    public function destory($card_id)
    {
        $card = Card::find($card_id);
        $card->delete();
        
        return redirect('/');
    }
}
