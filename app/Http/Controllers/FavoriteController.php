<?php
// sail artisan make:controller FavoriteController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index() {
        // $favorites = Favorite::where('user_id', Auth::user()->id)->get();
        // return view('favorites', compact('favorites'));
    }

    /**
     * Display all favorites.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_all()
    {
        // die and dump (shows information but prettier), useful for debugging
        // dd(Favorite::all());
        return view('favorites', [
            'favorites' => Favorite::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // return view('welcome');
        $favorite = Favorite::firstOrCreate([
            'user_id' => $request->input('user_id'),
            'constellation_id' => $request->input('constellation_id'),
        ]);

        // return view("/constellation/$favorite->constellation_id");
        return view('favorites', [
            'favorites' => Favorite::where('user_id', Auth::user()->id)->get()
        ]);
        // dd($request->all());
    }

    public function remove(Request $request)
    {
        $const_id = $request->input('constellation_id');
        $favorite = Favorite::where('constellation_id', $const_id)->where('user_id', Auth::user()->id);
        $favorite->delete();

        return view('favorites', [
            'favorites' => Favorite::where('user_id', Auth::user()->id)->get()
        ]);
    }
}
