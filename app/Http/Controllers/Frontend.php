<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Booking;


class Frontend extends Controller
{
    public function home(){
        return view("udashboard");
    }
    public function pre_booking(){
        return view("previousbooking");
    }
    public function showpre_booking(Request $request) {
        $email = $request->input('email');
        $phone = $request->input('phone');
    
        // Query the Booking model to retrieve matching records
        $obj = Booking::where('email', $email)
                      ->where('phone_no', $phone)
                      ->get();
    
        return view("showpreviousbooking")->with(["bok" => $obj]);
    }
      
    public function premium_service(){
        $obj=Service::all();
        return view("Premium")->with(["srv"=>$obj]);
    }
    public function NonPremium_service(){
        $obj=Service::all();
        return view("Non-Premium")->with(["srv"=>$obj]);
    }
    public function booking(Request $r){
        $n=$r->name;
        $pnum=$r->pnumber;
        $ema=$r->email;
        $dh=$r->dhospital;
        $add=$r->address;
        $ev=$r->ev;
        $at=$r->ac;
        $dis=$r->distance;
        $sid=$r->sid;
        $totalAmount="0";

        $obj=new Booking();
        $obj->customer_Name=$n;
        $obj->phone_no=$pnum;
        $obj->email=$ema;
        $obj->destination_hospital=$dh;
        $obj->address=$add;
        $obj->service_name=$ev;
        $obj->ambulance_type=$at;
        $obj->total_distance=$dis;
        $obj->totalAmount=$totalAmount;
        $obj->payment_mode="Cash";
        $obj->save();

        return redirect(url('/payment/' . $pnum . '/' . $sid));

        
    }
    public function carbooking(Request $r){
        $obj=Service::find($r->sid);
        return view("formSubmission")->with(["s"=>$obj]);
    }
    public function payment(Request $request){
        // Retrieve the booking record based on the phone number
        $booking = Booking::where('phone_no', $request->phone_no)->first();
        // Retrieve the service charge record based on the same phone number
        $service = Service::where('service_id', $request->sid)->first();


        // Remove "km" from distance and service charge columns and convert to numeric values
        $distance = $booking->total_distance;
        

        // Retrieve the service charge value as a float (assuming it's already in decimal format)
        $serviceChargeValue = $service->service_charge;
        $ac=($serviceChargeValue*40/100);
        if(in_array($service->service_id, [14, 17 ,6])){
        if($booking->ambulance_type=="A/c"){
        // Calculate the total amount
        $totalAmount = $distance * ($serviceChargeValue+$ac);
        }else{
            $totalAmount = $distance * $serviceChargeValue;
        }}else{
            $totalAmount = $distance * $serviceChargeValue;
        }




        \DB::enableQueryLog();
        $booking->totalAmount = $totalAmount; // Replace 'column_to_update' and 'new_value' with your specific column and value

        // Save the changes to the database
        $booking->save();
        \Log::info(\DB::getQueryLog());


        // Pass the total amount and records to the view
        return view("payment")->with(["c" => $booking]);
    }
    public function terms_and_conditions(){
        return view("term&condition");
    }
    public function about_us(){
        return view("aboutuss");
    }
    public function privacy_policy(){
        return view("privacypolicy");
    }
    public function contact_us(){
        return view("contactus");
    }

}
