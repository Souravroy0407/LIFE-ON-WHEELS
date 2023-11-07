<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class Admin extends Controller
{
    public function dashboard(){

        //$obj=new User();
        //$obj->name="Kinshuk";
        //$obj->email="kinshukguha2002@gmail.com";
        //$obj->password=bcrypt("kinshuk guha");
        //$obj->save();
        $sql = "SELECT * FROM booking_details ORDER BY booking_id DESC";
        $results = DB::select($sql);
        return view("Admin/Dashboard")->with(["cbok" => $results]);
}
    public function add_service(){
        return view("Admin/add-service");
    }
    public function ins_service(Request $r){
        $sn=$r->sname;
        $sc=$r->scharge;
        $sd=$r->sdetail;
        $ac=$r->category;
        

        $f1=$r->file("simage");
        if(isset($f1)){
            $fn=$f1->getClientOriginalName();
            $f1->move("Service_image",$fn);
        }

        $obj= new Service();
        $obj->service_name=$sn;
        $obj->ambulance_category=$ac;
        $obj->service_charge=$sc;
        $obj->service_details=$sd;
        $obj->service_image=$fn;

        $obj->save();
        return view("insertSucessfull");

    }
    public function listservices(){
        $obj=Service::all();
        return view("Admin/listservices")->with(["srv"=>$obj]);
    }

    public function login(){
        // $obj=new User();
        // $obj->name="Kinshuk";
        // $obj->email="kinshukguha2002@gmail.com";
        // $obj->password=bcrypt("kinshuk guha");
        // $obj->save();
        return view("Admin/login");
        
    }
    public function login_check(Request $r){

        $e=$r->email;
        $p=$r->pass;
        
        if(Auth::attempt(["email"=>$e,"password"=>$p])){
            return redirect(url('/dashboard'));
        }
        else{
            return redirect(url('/login'))->with(["err"=>"Invalid Login Credentials!"]);
        }
        
    }
    public function edit(Request $request){
        $obj=Service::where('service_id',$request->id)->first();
        return view("admin/edit_service")->with(["s" =>$obj]);
      }

    public function logout(){
        Auth::logout();
        return redirect(url('/login'));
    }
    public function booking_list(){
        $obj=Booking::all();
        return view("admin/booking_list")->with(["bok"=>$obj]);
    }
    
    public function update_service(Request $r,$id ){
        $sn = $r->sname;
        $sc = $r->scharge;
        $sd = $r->sdetail;
        $ac = $r->category;
        
        $f1 = $r->file("simage");
        if(isset($f1)){
            $fn = $f1->getClientOriginalName();
            $f1->move("Service_image", $fn);
        }
    
        // Find the existing record to update based on $id
        // Find the existing record to update based on $id
        $service = Service::where('service_id', $id)->first();

    
        if(!$service) {
            // Handle the case where the service with the given $id doesn't exist
            return view("serviceNotFound");
        }
    
        // Update the service details
        if(isset($fn)){
        $service->service_name = $sn;
        $service->ambulance_category = $ac;
        $service->service_charge = $sc;
        $service->service_details = $sd;
        $service->service_image = $fn;
    
        $service->save();
    
        return view("insertSucessfull");
        }
        else{
        $service->service_name = $sn;
        $service->ambulance_category = $ac;
        $service->service_charge = $sc;
        $service->service_details = $sd;
        // $service->service_image = $fn;
    
        $service->save();
    
        return view("insertSucessfull");

        }
    }

    public function delete_service(Request $request, $id){
        try {
            // Find the service record to delete based on $id
            $service = Service::where('service_id', $id)->first();
    
            if (!$service) {
                // Handle the case where the service with the given $id doesn't exist
                return view("serviceNotFound");
            }
            unlink("Service_image/".$service->service_image);
            // Delete the service record
            $service->delete();
    
            return view("deleteSuccessful");
        } catch (\Exception $e) {
            // Handle any exceptions here
            return redirect()->back()->with('error', 'An error occurred while deleting the service: ' . $e->getMessage());
        }
    }
    
    public function booking_list_pdf(){
        $obj = Booking::all();
        
        $pdf = Pdf::loadView('bookings', ['bookings' => $obj]);
        return $pdf->download('bookings.pdf');
    }
}
