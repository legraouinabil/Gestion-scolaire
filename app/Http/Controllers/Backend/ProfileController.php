<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //


    public function view()
    {

        return view("Back.Admin.edit-profile.index");
    }
    public function edit($id)
    {

        $user = Admin::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {

        $user = Admin::find($id); // Retrieve the currently authenticated user

        // Validate the request data
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,


        ]);

        // Update the user's profile information
        $input = $request->all();
        $imageName = NULL;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'img/admin/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }



        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->update($input);
      


        return response()->json(['success' => 'Profile update successfully']);
    }


    public function changePassword(Request $request , $id)
    {
        $validatedData = $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            'verifyPassword' => 'required|same:newPassword',
        ]);

        $user = Admin::find($id);

        if (Hash::check($request->currentPassword, $user->password)) {
            $user->password = Hash::make($request->newPassword);
            $user->save();

          

            return response()->json(['success' => 'password changed successfully']);
        } else {
            return response()->json(['fail' => 'The current password is incorrect']);
        }
    }
}
