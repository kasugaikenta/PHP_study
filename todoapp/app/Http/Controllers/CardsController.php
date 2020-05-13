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
    public function new(int $listing_id){
        return view('card/new',['listing'=>$listing_id]);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() ,['card_name' => 'required|max:255', ]);
        
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
}
