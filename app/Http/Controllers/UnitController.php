<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\UnitRequest;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Unit::orderBy('id', 'DESC')->get();

       return view('pages.unit.index',[
        'unit'=>$data
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pages.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(unitRequest $request)
    {   
        $data = $request->all();
        $model = new Unit;
        $model->create($data);

        return redirect()->route('unit.index')->with('success', 'data unit berhasil di ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('pages.unit.edit', ['unit' => $unit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(UnitRequest $request, $id)
    {

        $data = $request->all();
        $unit = Unit::findOrFail($id);
        $unit->update($data);

        return redirect()->route('unit.index')->with('success', 'data unit berhasil di perbaharui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Unit::findOrfail($id);
        $data->delete();

        return back()->with('success', 'data unit berhasil di hapus');
    }
}
