<?php

namespace App\Http\Controllers\API;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Review;
use Validator;
use App\Http\Resources\Review as ReviewResource;

class ReviewController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
    
        return $this->sendResponse(ReviewResource::collection($reviews), 'Reviews retrieved successfully.');
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
            'user_id' => 'required',
            'vendor_id' => 'required',
            'description' => 'required',
            'score' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $review = Review::create($input);
   
        return $this->sendResponse(new ReviewResource($review), 'Review created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
  
        if (is_null($review)) {
            return $this->sendError('Review not found.');
        }
   
        return $this->sendResponse(new ReviewResource($review), 'Day retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'vendor_id' => 'required',
            'description' => 'required',
            'score' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $review->user_id = $input['user_id'];
        $review->vendor_id = $input['vendor_id'];
        $review->description = $input['description'];
        $review->score = $input['score'];
        $review->save();
   
        return $this->sendResponse(new ReviewResource($review), 'Review updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
   
        return $this->sendResponse([], 'Review deleted successfully.');
    }
}
