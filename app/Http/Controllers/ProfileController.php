<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\Profession;
use App\Models\Category;

use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function index(){
        $user = Auth::user();
        $profession = Profession::Where('id', $user->profession_id)->first();
        $categories = $user->categories()->get();
        return view('profile.edit', compact('user', 'profession', 'categories'));
    }


    public function profileEdit(Request $request){
        $user = Auth::user();

        dd($request->all());
        /* $user->update([
            'name' => $request->name,
            'last_name' => $request->name,
            'bio' => $request->bio,
            'phone_number' => $request->phone_number,
            'email' => $request->email,

        ]); */

        return view('profile.edit', compact('user'));
    }
}
