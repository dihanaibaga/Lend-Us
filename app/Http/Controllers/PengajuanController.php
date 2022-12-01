<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use App\Http\Requests\PengajuanRequest;

class PengajuanController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Pengajuan::orderBy('id', 'DESC')->get();

       return view('pages.pengajuan.index',[
        'pengajuan'=>$data
       ]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.pengajuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengajuanRequest $request)
    {
        $data = $request->all();
        $model = new Pengajuan();
        $model->create($data);

        return redirect()->route('pengajuan.index')->with('success', 'data pengajuan berhasil di ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan $pengajuan)
    {
        return view('pages.pengajuan.show', [
            'data'=>$pengajuan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('pages.pengajuan.edit', ['pengajuan' => $pengajuan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(PengajuanRequest $request, $id)
    {
        $data = $request->all();
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update($data);

        return redirect()->route('pengajuan.index')->with('success', 'data pengajuan berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Pengajuan::findOrfail($id);
        $data->delete();

        return back()->with('success', 'data pengajuan berhasil di hapus');
    }
}
