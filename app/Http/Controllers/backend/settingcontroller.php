<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use auth;
use Image;

class settingcontroller extends Controller
{
   public function __construct()
	{
		$this->middleware('auth');
	}

//--------setting info------------//
	public function settingmethod(){
		$setting=DB::table('setting_information')->first();
		return view('backend.setting_information.setting_info', compact('setting'));
	}

	public function updatesettingmethod(Request $id, $edit){
		$data = array(
			'admin_id'  => Auth()->user()->id,
			'title'     => $id->title,
			'email'     => $id->email,
			'phone'     => $id->phone,
			'facebook'  => $id->facebook,
			'twitter'   => $id->twitter,
			'instagram' => $id->instagram,
			'youtube'   => $id->youtube,
		);


		// if($id->file('setting_image')){
  //   $file = $id->file('setting_image');
  //   @unlink(public_path('upload/GenarelSetting/logo/'.$data->setting_image));
  //   $filename = 'setting_image'.'.'.$file->getClientOriginalExtension();
  //   $file->move(public_path('upload/GenarelSetting/'),$filename);
  //   $data['setting_image'] = $filename;
  //  }

  //  if($id->file('favicon')){
  //   $file = $id->file('favicon');
  //   @unlink(public_path('upload/GenarelSetting/'.$data->favicon));
  //   $filename = 'favicon'.'.'.$file->getClientOriginalExtension();
  //   $file->move(public_path('upload/GenarelSetting/'),$filename);
  //   $data['favicon'] = $filename;
  //  }

  //  dd($data);

  //  DB::table('setting_information')->where('id',$edit)->update($data);


  //  $notification=array(
		// 	'messege'   =>'Setting update Successfully',
		// 	'alert-type'=>'success'
		// );

  //  return Redirect()->back()->with($notification); 


		$newimage    = $id->file('setting_image');
		$favicon     = $id->file('favicon');

		$oldimage    = DB::table('setting_information')->first();

		if ($newimage)
		{
			if ($oldimage->setting_image)
			{
				unlink($oldimage->setting_image);
			}
			$image_one_name= hexdec(uniqid()).'.'.$newimage->getClientOriginalExtension();
			Image::make($newimage)->save('image/settingimage/'.$image_one_name,80);
			$data['setting_image']='image/settingimage/'.$image_one_name;
			DB::table('setting_information')->where('id',$edit)->update($data);
		}
		else
		{
			DB::table('setting_information')->where('id',$edit)->update($data);
		}


		if ($favicon) {

			if ($oldimage->favicon) {
				unlink($oldimage->favicon);
			}

			$image_one= hexdec(uniqid()).'.'.$favicon->getClientOriginalExtension();
			Image::make($favicon)->save('image/settingimage/'.$image_one,80);
			$data['favicon']='image/settingimage/'.$image_one;
			DB::table('setting_information')->where('id',$edit)->update($data);
		}
		else{
			DB::table('setting_information')->where('id',$edit)->update($data);
		}

		$notification=array(
			'messege'   =>'Setting update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 

	}




}
