<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Scrape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('url', request()->fullUrl());
        $updated = DB::table("scrapes")
        ->orderBy("updated", "desc")
        ->first();

        $users = User::all();

        $vendors = Scrape::all();
        return view('admin.vendor.index', ['vendors' => $vendors, 'updated' => $updated, 'users' => $users]);
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
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'user' => 'required',
            'geometry' => 'required|string',
          ]);

        // $input = $request->all();
        $finduser = User::where('name',$request->user)->first();
        if(!$finduser){
            return back()->with('fail',"Invalid create vendor");
        }
        if($request->phone=='+62'){
            return back()->with('fail',"Invalid input phone");
        }elseif(strpos($request->phone, "+620")!=""){
            $vendor = Vendor::create([
                'name' => ucwords($request->name),
                'phone' => str_replace("+620","+62",$request->phone),
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);
            return back()->with('success',"A new vendor has been added");
        }elseif(strpos($request->phone, "08")=="0"){
            $vendor = Vendor::create([
                'name' => ucwords($request->name),
                'phone' => str_replace("08","+62",$request->phone),
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);
            return back()->with('success',"A new vendor has been added");
        }else{
            $vendor = Vendor::create([
                'name' => ucwords($request->name),
                'phone' => $request->phone,
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);


            return back()->with('success',"A new vendor has been added");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $checkView = Scrape::where('slug', $slug)->first();
        $addView = Scrape::where('slug', $slug)->update([
            'views' => ($checkView->views)+1,
        ]);
        $scrape = Scrape::where('slug', $slug)->first();

        return view('vendor.detailsalon', compact('scrape'));
    }

    public function all()
    {
        $lists = Scrape::orderBy('name', 'ASC')->paginate(10);
        $set = "1";
        return view('vendor.listsalon', compact('lists', 'set'));
    }

    public function search(Request $request)
    {
        if (($request->searchMUA) != ""){
            $lists = DB::table("scrapes")
            ->where("name", "like", '%'.$request->searchMUA.'%')
            ->orWhere("address", "like", '%'.$request->searchMUA.'%')
            ->paginate(10);
            $set = "0";
            $keyword = $request;
            return view('vendor.listsalon', compact('lists', 'keyword', 'set'));
        }else{
            return redirect()->route('vendors.listsalon');
        }

    }

    public function popular()
    {
        $lists = Scrape::orderBy('review', 'DESC')->paginate(10);
        $set = "2";
        return view('vendor.listsalon', compact('lists', 'set'));
    }

    public function latest()
    {
        $lists = Scrape::orderBy('id', 'DESC')->paginate(10);
        $set = "3";
        return view('vendor.listsalon', compact('lists', 'set'));
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
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'user' => 'required',
            'geometry' => 'required',
          ]);

        $finduser = User::where('name',$request->user)->first();
        if(!$finduser){
            return back()->with('fail',"Invalid update vendor");
        }
        if($request->phone=='+62'){
            return back()->with('fail',"Invalid input phone");
        }elseif(strpos($request->phone, "+620")!=""){
            $vendor = Vendor::find($id)->update([
                'name' => ucwords($request->name),
                'phone' => str_replace("+620","+62",$request->phone),
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);
            return back()->with('success',"A new vendor has been added");
        }elseif(strpos($request->phone, "08")=="0"){
            $vendor = Vendor::find($id)->update([
                'name' => ucwords($request->name),
                'phone' => str_replace("08","+62",$request->phone),
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);
            return back()->with('success',"A new vendor has been added");
        }else{
            $vendor = Vendor::find($id)->update([
                'name' => ucwords($request->name),
                'phone' => $request->phone,
                'user_id' => $finduser->id,
                'geometry' => $request->geometry,
            ]);

            return back()->with('success',"A vendor has been updated");
        }
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

        return back()->with('success',"A vendor has been destroyed");
    }
}
