<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Mail;

class userMessage extends Controller
{
 
 public function sent_massagmethod(Request $a){

		$data = array(
		 'user_name'  =>$a->user_name,
		 'email'      =>$a->email,
		 'phone'      =>$a->phone,
		 'message'    =>$a->message,
		);

		DB::table('user_message')->insert($data);
		$notification = array(
		 'messege'    =>'Item Added Successfully',
		 'alert-type' =>'success'
		);
		return Redirect()->back()->with($notification);
 }


 public function Messagemethod(){
		$massagedata = DB::table('user_message')->get();
		return view('backend.customer_message.customer_message', compact('massagedata'));
 }

 public function delMessmethod($id){
		DB::table('user_message')->where('id',$id)->delete();

		$notification = array(
		 'messege'   =>'Customer Massage Delete',
		 'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification); 
 }


public function editMessmethod($id){
 $edit = DB::table('user_message')->where('id',$id)->first();
	return view('backend.customer_message.edit_customer_message', compact('edit'));
}



public function message_updatemethod(Request $id,$req){

$prodata=DB::table('user_message')->where('id',$id)->first();


	$data= array(
	 'email'            =>$id->email,
	 'replay_meassage'  =>$id->replay_meassage,
	 'admin_id'         => Auth()->user()->id,
	);

	DB::table('user_message')->where('id',$req)->update($data);
	
 mail('mail',$email, $message, $replay_meassage, $headers);
	 $notification=array(
	 'messege'   =>'Replay Message Sent',
	 'alert-type'=>'success'
	);

	return Redirect()->back()->with($notification); 
 }




}
