<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = Parcel::all();
        return view('parcel.index', ['parcels' => $parcels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $parcels = Parcel::all();
       return view('parcel.create', ['parcels' => $parcels]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parcel = new Parcel;
        $parcel->weight = $request->weight;
        $parcel->phone = $request->phone;
        $parcel->title = $request->title;
        $parcel->title = $request->post_id;
        $parcel->save();
        return redirect()->route('parcel.index');

        return redirect()->route('parcel.index')->with('success_message', 'Sekmingai įrašytas.');
       return redirect()->route('parcel.index')->with('success_message', 'Sėkmingai pakeistas.');
       return redirect()->route('parcel.index')->with('success_message', 'Sekmingai ištrintas.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcel $parcel)
    {
        return view('parcel.show',['parcel'=>$parcel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcel $parcel)
    {
        return view('parcel.edit', ['parcel' => $parcel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcel $parcel)
    {
        $parcel->weight = $request->weight;
        $parcel->phone = $request->phone;
        $parcel->title = $request->title;
        $parcel->title = $request->post_id;
        $parcel->save();
       return redirect()->route('parcel.index');

       return redirect()->route('parcel.index')->with('success_message', 'Sekmingai įrašytas.');
       return redirect()->route('parcel.index')->with('success_message', 'Sėkmingai pakeistas.');
       return redirect()->route('parcel.index')->with('success_message', 'Sekmingai ištrintas.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcel $parcel)
    {
        $parcel->delete();
        return redirect()->route('parcel.index');

        return redirect()->route('parcel.index')->with('success_message', 'Sekmingai įrašytas.');
       return redirect()->route('parcel.index')->with('success_message', 'Sėkmingai pakeistas.');
       return redirect()->route('parcel.index')->with('success_message', 'Sekmingai ištrintas.');


    }
}
