<?php

namespace App\Http\Controllers\API;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Photo;
use Validator;
use App\Http\Resources\Photo as PhotoResource;

class PhotoController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
    
        return $this->sendResponse(PhotoResource::collection($photos), ' retrieved successfully.');
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
            'image' => 'required',
            'vendor_id' => 'required',
        
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $photo = Photo::create($input);
   
        return $this->sendResponse(new PhotoResource($photo), 'Photo created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);
  
        if (is_null($photo)) {
            return $this->sendError('Photo not found.');
        }
   
        return $this->sendResponse(new PhotoResource($photo), 'Photo retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'image' => 'required',
            'vendor_id' => 'required',
        
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $photo->image = $input['image'];
        $photo->vendor_id = $input['vendor_id'];
        $photo->save();
   
        return $this->sendResponse(new PhotoResource($photo), 'Photo updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
   
        return $this->sendResponse([], 'Photo deleted successfully.');
    }
}
