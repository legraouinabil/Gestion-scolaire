<?php

namespace App\Http\Controllers\Backend\Formateur;

use App\Http\Controllers\Controller;
use App\Models\Formateur;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class FormateurProfileController extends Controller
{
    public function view($id){
        $data['formateur']= Formateur::findOrFail($id);
        return view('Back.Formateur.profile.index')->with($data);
       }

       public function update(Request $request, $id)
    {

        $user = Formateur::find($id); // Retrieve the currently authenticated user

        // Validate the request data
        $validator =  FacadesValidator::make($request->all(),[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
           


        ]);
        if($validator->fails()) {
            return Redirect()->back()->with(['errors'=>$validator->errors()]);
        }
        // Update the user's profile information
        $input = $request->all();
        $imageName = NULL;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'img/formateur/';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            $input['image'] = $user->image;
        }



        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

    
    
               $user->update($input);
      
      

        return Redirect()->back()->with(['success' => 'Profile update successfully']);
    }


    public function changePassword(Request $request , $id)
    {
        $validatedData = $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            'verifyPassword' => 'required|same:newPassword',
        ]);

        $user = Formateur::find($id);

        if (Hash::check($request->currentPassword, $user->password)) {
            $user->password = Hash::make($request->newPassword);
            $user->save();

          

          return redirect()->back()->with(['success' => 'password changed successfully']);
        } else {
            return redirect()->back()->with(['fail' => 'The current password is incorrect']);
        }
    }
}
