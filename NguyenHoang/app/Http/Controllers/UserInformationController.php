<?php

namespace App\Http\Controllers;

use App\Models\user_information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInformationController extends Controller
{
    public function UserInformartion(user_information $user_information)
    {
        $user_id = Auth::user()->id;
        $value = user_information::where('user_id', $user_id)->first();

        return view('user.index', compact('value'));
    }

    public function ShowFormInformation(user_information $user_information)
    {
        $user_id = Auth::user()->id;
        $value = user_information::where('user_id', $user_id)->first();
        return view('user.update_information', compact('value'));
    }

    public function UpdateInformation(user_information $user_information, Request $request)
    {
        $user_id = Auth::user()->id;
        $fileName = "";

        $request->validate([
            'avatar' => 'image',
        ]);

        $fileCheck = $request->hasFile('avatar');

        if ($fileCheck != null) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
        }

        $Informations = [
        'first_name' => $request->input('first_name') ?? '',
        'last_name'=> $request->input('last_name') ?? '',
        'phone_number'=> $request->input('phone_number') ?? '',
        'address'=> $request->input('address') ?? '',
        'birthday'=> $request->input('birthday') ?? null,
        'avatar' => $fileName,
        'user_id' => $user_id,
        ];

    $user_information = user_information::updateOrInsert(['user_id'=>$user_id],$Informations);
        
        if ($user_information && $fileCheck) {
            $file->storeAs('', $fileName, 'Avatar');
        }
        return redirect('user-information');
    }
}
