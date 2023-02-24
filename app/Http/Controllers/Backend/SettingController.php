<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function view()
    {

        return view("Back.Admin.setting.index");
    }

    public function index()
    {
        $setting = Setting::first();
        return response()->json($setting);
    }
    public function update(Request $request , $id)
    {
       $setting = Setting::findOrFail($id);
        $this->validate($request, [
            'email' => 'required',
            'adresse' => 'required',
             'phone' => 'required',
              'facebook' => 'required',
               'twiter' => 'required',
               'insta' => 'required',
        ]);

        $input = $request->all();
        $setting->update($input);

        return response()->json(['success'=> 'update setting successfully']);
    }
}
