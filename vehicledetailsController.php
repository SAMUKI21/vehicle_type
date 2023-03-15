<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type;
use DB;

class vehicledetailsController extends Controller
{
    public function index()
    {
       $data=type::all();
        return view ('pages.vehicleid')->with('vdetails',$data);
    }

    public function savedata(Request $request){

        //dd($request);
          $vhtype=new type;
       
         
          $vhtype->vehicle_type=$request->vehicle_type;
          $vhtype->save();
         
    
          return redirect()->back();
    }

    public function appendVehicleType($id)
    {
        $data=type::find($id);
        return view("pages.vehicleidupdate",["data"=>$data]);
    }
    
public function updatetype(Request $req)
{
 
 
    
  
    $data = type::find($req->id);
    $data->vehicle_condition=$req->vehicle_type;
    $data->save();
    return redirect("/Vehicle/public/vehicleid");




}

// public function updatedata(Request $request)
// {
 
 
//     $id = $request->id;
//    // dd($id);
//     $vehicle_type = $request->vehicle_type;
   
//     $sindgledatarow = type::find($id);
 
//     $sindgledatarow->vehicle_type=$vdetails;
    

// dd ($sindgledatarow);
//     $sindgledatarow->update();

//     // $data=vdetails::where('deleted_at', '=', NOTNULL)->get();
//  return view('pages.vehicleid')->with('vdetails',$data);


// }

  /**
     * Delete the Employee Status entry get by id
     * @return view EmpType view
     */
    public function Deletetype($id){
      $data=type::find($id);
   $data->delete();
   return redirect()->back();
  }

  }
    
    
        
  




    
    
  

