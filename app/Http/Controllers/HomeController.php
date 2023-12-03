<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
    {
        return view('Restaurant');
    }

    public function dashboard()
    {
        return view('admin.table');
    }
    public function table()
    {
        return view('admin.table');
    }

    public function logged()
    {
        $data = User::where('usertype', 'user')->get();
        $utype = Auth::user()->usertype;
        if($utype == "admin")
        {
            return view("admin.table",['data' => $data]);
        }
        else
        {

            return view("Restaurant");
        }
    }
    public function delete($id){
        $empdata = User::find($id);
        $empdata->delete();
        return redirect()->back();

    }
    public function edit(string $id){
        $data = User::find($id);
        return view('admin.updateuser')->with('data' , $data);
    }
    public function update(Request $request, string $id)
    {
        $data = User::find($id);


        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;

        $data->save();
        return redirect('/table');
    }
}
