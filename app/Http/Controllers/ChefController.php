<?php

namespace App\Http\Controllers;
use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function index()
    {
        $chefs = chef::all();
        return view('admin.chef_tbl')->with(['chefs' => $chefs]);
    }
    public function addchef(request $request){
        $this->validate($request, [
            "dish_name" => "required",
            "chef" => "required",
            "file" => "required|mimes:png,jpg,jpeg,pdf",
            "price" => "required",


       ]);
       $imagename = microtime()."ACI,". $request->file->getClientOriginalExtension();
       $request->file->move(public_path("images"), $imagename);

            $table= new chef();
            $table->dish_name = $request->dish_name;
            $table->chef = $request->chef;
            $table->image = $imagename;
            $table->price = $request->price;
            $table->save();
            return redirect()->route('chef')->with('message',"Congrats! Data Inserted Successfully....");

    }






    public function deleteChef($id){
        $empdata = chef::find($id);
        // $publicPath = public_path("images/{$empdata->image}");
        // if (file_exists($publicPath)) {
        //     unlink($publicPath);
        // }
        $empdata->delete();
        return redirect()->back();
    }



    public function  editChef(string $id){
        $data = chef::find($id);
        return view('admin.updatechef')->with('data' , $data);
    }







    public function updateChef(Request $request, string $id)
    {
        $data = chef::find($id);

        // if ($request->hasFile('file')) {
        //     $publicPath = public_path("images/{$data->image}");
        //     if (file_exists($publicPath)) {
        //         unlink($publicPath);
        //     }
        //     $imagename = microtime()."ACI,". $request->file->getClientOriginalExtension();
        // }    $request->file->move(public_path("images"), $imagename);

        $data->dish_name = $request->dish_name;
        $data->chef = $request->chef;
        $data->price = $request->price;
        // $data->image = $imagename;
        $data->save();
        return redirect()->route('chef');
    }

}
