<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Read;

class ReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin=Read::all();        
        return view('admin/index' , compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'gambar'=>'image|file|max:2048|mimes:jpg,png,jpeg',
            'desk'=>'required',
            
        ]);

        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }


        //produsen::create($request->all());
        Read::create([
            'judul'=>$request['judul'],
            'gambar'=>$imgName,
            'desk'=>$request['desk']
        ]);

        return redirect('/admin')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Read $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Read $admin)
    {
       return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Read $admin)
    {

        
        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }

        Read::where('id',$admin->id)
        ->update(['judul'=>$request->judul,
                    'gambar'=>$imgName,
                    'desk'=>$request->desk
                   ]);
        return redirect('/admin')->with('status','Data Berhasil Diubah');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Read $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')
                        ->with('success', 'berhasil hapus!');
    }


}
