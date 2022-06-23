<?php

namespace App\Http\Controllers\API;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Hour;
use Validator;
use App\Http\Resources\Hour as HourResource;

class HourController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours = Hour::all();
    
        return $this->sendResponse(HourResource::collection($hours), 'Hours retrieved successfully.');
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
            'day_id' => 'required',
            'vendor_id' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $hour = Hour::create($input);
   
        return $this->sendResponse(new HourResource($hour), 'Hour created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hour = Hour::find($id);
  
        if (is_null($hour)) {
            return $this->sendError('Hour not found.');
        }
   
        return $this->sendResponse(new HourResource($hour), 'Hour retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hour $hour)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'day_id' => 'required',
            'vendor_id' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $hour->day_id = $input['day_id'];
        $hour->vendor_id = $input['vendor_id'];
        $hour->save();
   
        return $this->sendResponse(new HourResource($hour), 'Hour updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hour $hour)
    {
        $hour->delete();
   
        return $this->sendResponse([], 'Hour deleted successfully.');
    }
}
