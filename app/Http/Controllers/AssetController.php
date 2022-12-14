<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Requests\AssetRequest;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Asset::orderBy('id', 'DESC')->get();

        return view('pages.asset.index',[
         'asset'=>$data
        ]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.asset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetRequest $request)
    {
        $data = $request->all();
        $model = new Asset();
        $model->create($data);

        return redirect()->route('asset.index')->with('success', 'data unit berhasil di ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('pages.asset.edit', ['asset' => $asset]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(AssetRequest $request, $id)
    {
        $data = $request->all();
        $asset = Asset::findOrFail($id);
        $asset->update($data);

        return redirect()->route('asset.index')->with('success', 'data unit berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Asset::findOrfail($id);
        $data->delete();

        return back()->with('success', 'data unit berhasil di hapus');
    }
}
