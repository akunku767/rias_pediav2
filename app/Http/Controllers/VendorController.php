<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all(); 
            return view('vendor.index', ['vendors' => $vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
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
            'name' => 'required', 
            'phone' => 'required',
            'user_id' => 'required',
            'geometry' => 'required',
          ]);
        
        // $input = $request->all();
        
          $vendor = Vendor::create([
            'name' => ucwords($request->name),
            'phone' => $request->phone, 
            'user_id' => $request->user_id,
            'geometry' => $request->geometry,
          ]);
         
          return back()->with('success',' Vendor baru berhasil dibuat.');
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
        $vendor = Vendor::findOrFail($id);
        return view('vendor.edit', [
            'vendor' => $vendor,
            'phone' => $vendor,
            'user_id' => $vendor,
            'geometry' => $vendor,

        ]);
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
        $request->validate([
            'name' => 'required', 
            'phone' => 'required',
            'user_id' => 'required',
            'geometry' => 'required',
          ]);
               
         $vendor = Vendor::find($id)->update([
            'name' => ucwords($request->name),
            'user_id' => $request->user_id, 
            'geometry' => $request->geometry,
         ]); 
                
         return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();

        return back()->with('success',' Penghapusan berhasil.');
    }
}
