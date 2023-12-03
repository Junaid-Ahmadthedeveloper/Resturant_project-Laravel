<?php

namespace App\Http\Controllers;

use App\Models\cooker;
use Illuminate\Http\Request;

class CookerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = cooker::all();
        return view('admin.cooker_tbl')->with(['data' => $data]);

    }
public function addcook(){
    return view('admin.addcook');
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "dish" => "required",
            "nationality" => "required",
            "file" => "required|mimes:png,jpg,jpeg,pdf",

       ]);
       $imagename = microtime()."ACI,". $request->file->getClientOriginalExtension();
       $request->file->move(public_path("images"), $imagename);
    $data = new cooker();

       $data->name = $request->name;
       $data->dish = $request->dish;
       $data->nationality = $request->nationality;
       $data->image = $imagename;
       $data->save();
       return redirect()->route('cook.main');
    }

    /**
     * Display the specified resource.
     */
    public function show(cooker $cooker)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $data = cooker::find($id);
        return view('admin.updatecooker')->with('data' , $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = cooker::find($id);

        // if ($request->hasFile('file')) {
        //     $publicPath = public_path("images/{$data->image}");
        //     if (file_exists($publicPath)) {
        //         unlink($publicPath);
        //     }
        //     $imagename = microtime()."ACI,". $request->file->getClientOriginalExtension();
        // }    $request->file->move(public_path("images"), $imagename);

        $data->name = $request->name;
        $data->dish = $request->dish;
        $data->nationality = $request->nationality;
        // $data->image = $imagename;
        $data->save();
        return redirect()->route('cook.main');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
      $dlt  = cooker::find($id);
      $dlt->delete();
      return redirect()->back();
    }
}
