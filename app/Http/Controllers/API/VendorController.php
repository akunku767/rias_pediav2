<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Validator;
use App\Http\Resources\Vendor as VendorResource;

class VendorController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
    
        return $this->sendResponse(VendorResource::collection($vendors), ' retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'phone' => 'required',
            'user_id' => 'required',
            'geometry' => 'required',

        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $vendor = Vendor::create($input);
   
        return $this->sendResponse(new VendorResource($vendor), 'Vendor created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);
  
        if (is_null($vendor)) {
            return $this->sendError('Vendor not found.');
        }
   
        return $this->sendResponse(new DayResource($vendor), 'Vendor retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'phone' => 'required',
            'user_id' => 'required',
            'geometry' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $vendor->name = $input['name'];
        $vendor->phone = $input['phone'];
        $vendor->user_id = $input['user_id'];
        $vendor->geometry = $input['geometry'];
        $vendor->save();
   
        return $this->sendResponse(new VendorResource($vendor), 'Vendor updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
   
        return $this->sendResponse([], 'Vendor deleted successfully.');
    }
}
