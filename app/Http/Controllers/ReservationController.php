<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $useremail = Auth::User()->email;

        if(Auth::User()) {
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "reserve_time" => "required",
            "number" => "required",
            "nog" => "required",

       ]);

    $data = new reservation();

       $data->name = $request->name;
       $data->email = $request->email;
       $data->Res_time = $request->reserve_time;
       $data->phone = $request->number;
       $data->nog = $request->nog;
       $data->message = $request->message;
       $data->reserved_by = $useremail;
       $data->save();
       return redirect()->back();
    }
    else
    {

        return redirect()->url('/login');
    }

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = Reservation::where("reservation_status","reserved")->get();
         return view('admin.reservation_table',["data" => $data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {     $empdata = reservation::find($id);
        // $publicPath = public_path("images/{$empdata->image}");
        // if (file_exists($publicPath)) {
        //     unlink($publicPath);
        // }
        $empdata->delete();
        return redirect()->back();
    }
    public function done($id){
        $res = reservation::find($id);
        if($res)
        {
        $res->reservation_status = "Done";
        $res->save();
        return redirect()->route('reservation_tbl');
        }
    }
    public function completed(){
        $data = Reservation::where("reservation_status","Done")->get();
        return view('admin.reservation_completed',["data" => $data]);
    }
    public function trashshow(){
        $data = Reservation::onlyTrashed()->get();

          return view('admin.reservation_trash',["data" => $data]);
    }
    public function forcedelete($id){
     $data = Reservation::withTrashed()->find($id);
     $data->forceDelete();
     return redirect()->back();
        }
    public function  restore($id){
        $data = Reservation::withTrashed()->find($id);
        $data->restore();
     return redirect()->back();


    }
}
