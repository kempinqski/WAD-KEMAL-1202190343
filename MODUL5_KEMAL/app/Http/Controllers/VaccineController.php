<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccines;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datavaksin = vaccines::all();
        return view('vaksin.index', compact(
            'datavaksin'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new vaccines;
        return view('vaccine', compact(
            'model'
        ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new vaccines;
        $model->name = $request->name;
        $model->price = $request->price;
        $model->description = $request->description;
        $model->image = $request->image->store('fotoweb');
        $model->save();

        return redirect('vaccine');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = vaccines::find($id);
        return view('vaksin.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = vaccines::find($id);
        $model->name = $request->name;
        $model->price = $request->price;
        $model->description = $request->description;
        $model->image = $request->image->store('fotoweb');
        $model->save();

        return redirect('vaccine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = vaccines::find($id);
        $model->delete();

        return redirect('vaccine');
    }
}
