<?php
// sail artisan make:controller ConstellationController --resource

namespace App\Http\Controllers;

use App\Models\Constellation;
use Illuminate\Http\Request;

class ConstellationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('constellation_detail', [
            'constellation' => Constellation::findOrFail($id)
        ]);
    }

    /**
     * Display all constellations.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_all()
    {
        // die and dump (shows information but prettier), useful for debugging
        // dd(User::all());
        return view('constellations', [
            'constellations' => Constellation::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_random()
    {
        $constellation_id = rand(1, 88);

        return view('constellation-game', [
            'constellation' => Constellation::findOrFail($constellation_id)
        ]);
    }

    public function show_correct(Request $request)
    {
        $constellation_id = $request->input('constellation_id');
        $const_name_guess = strtolower($request->input('constellation_name'));

        // $guess = Constellation::where('id', $constellation_id)->where('image_name', $const_name_guess);

        return view('constellation-game-answer', [
            'constellation' => Constellation::findOrFail($constellation_id),
            'guess' => $const_name_guess
        ]);
    }

}
