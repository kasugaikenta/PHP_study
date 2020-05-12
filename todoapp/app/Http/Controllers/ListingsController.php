<?php

namespace App\Http\Controllers;

use App\Listing;
use Auth;
use Validator;

use Illuminate\Http\Request;

class ListingsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $listings = Listing::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();
        
        $cards = Card::
            
        return view('listing/index', ['listings' => $listings, 'Card' => ]);
    }
    
    public function new()
    {
        return view('listing/new');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() ,['list_name' => 'required|max:255', ]);
        
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        $listings = new Listing;
        $listings->title = $request->list_name;
        $listings->user_id = Auth::user()->id;
        $listings->save();
        
        return redirect('/');
        
    }
    
    public function edit($listing_id)
    {
        $list_data = Listing::find($listing_id);
        return view('listing/edit', ['listing' => $list_data]);
    }
    
    public function update(Request $request)
    {
        $validator = Validator::make($request->all() ,['list_name' => 'required|max:255', ]);
        
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        $listings = Listing::find($request->id);
        $listings->title = $request->list_name;
        $listings->user_id = Auth::user()->id;
        $listings->save();
        
        return redirect('/');
    }
    
    public function destory($listing_id)
    {
        $listings = Listing::find($listing_id);
        $listings->delete();
        
        return redirect('/');
    }
}
