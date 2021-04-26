<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct(){

        //هاي تخلي اليوزر الى يكون ادمن قيمته واحد يلا يكدر يوصل للميودس الموجودة جوة
    }

    public function index(){
        $data=Setting::first();
        return view('setting.index')->with('obj',$data);
    }
    public function update(Request $request){

        $this->validate($request,[
         'blog_name'=>'required' ,
         'blog_phone'=>'required' ,
         'blog_email'=>'required' ,
         'address'=>'required' ,
        ]);
        $setting=Setting::first();
        $setting->blog_name=$request->blog_name;
        $setting->blog_phone=$request->blog_phone;
        $setting->blog_emil=$request->blog_email;
        $setting->address=$request->address;
        $setting->save();
        return redirect()->back();

    }
}
