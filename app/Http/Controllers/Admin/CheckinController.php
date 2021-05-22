<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Company;

class CheckinController extends Controller
{
    //
    public function index(){
        $companies = Auth::user()->companies()->get();
        return view('company.checkin_companies', compact('companies'));
    }
    
    public function checkinView($id){
        $company = Company::find($id);
        $user = Auth::user();
        $user_has_company = $user->companies()->whereHas('users', function ($query) use($company) {
            $query->where('users.id', $company->id);
        })->exists();

        if($user_has_company){
            return view('company.checkin_handle', compact('company'));
        }else{
            return abort(403, 'Unauthorized action.');
        }
    }
}
