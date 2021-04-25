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
    public function update(){

        return view('setting.edit');
    }
}
