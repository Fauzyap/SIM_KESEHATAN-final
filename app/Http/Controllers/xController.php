<?php

namespace App\Http\Controllers;

use App\Models\X;
use App\Exports\XExport;
use App\Imports\XImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class xController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasX=X::all();        
        return view('admin/content/dataX' , compact('kelasX'));
    }

    public function Xexport(){
        return Excel::download(new XExport, 'datasiswaX.xlsx');
    }

    public function Ximport(Request $request){
        
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
     
        // menangkap file excel
        $file = $request->file('file');
     
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
     
        // upload ke folder file_siswa di dalam folder public
        $file->move('DatakelasX',$nama_file);
     
        // import data
        Excel::import(new XImport, public_path('/DatakelasX/'.$nama_file));
     
        // notifikasi dengan session
        Session::flash('sukses','Data Siswa Berhasil Diimport!');
     
        // alihkan halaman kembali
        return redirect('/siswaX');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
