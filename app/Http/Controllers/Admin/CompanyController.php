<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Company;


class CompanyController extends Controller
{
    //
    public function index($id){
        $user = Auth::user();
        $company = Company::Where('id', $id)->first();
        //return $company;
        $user_has_company = $user->companies()->whereHas('users', function ($query) use($company) {
            $query->where('users.id', $company->id);
        })->exists();

        if($user_has_company){
            return view('company.edit', compact('user', 'company'));
        }else{
            return abort(403, 'Unauthorized action.');
        }
    }
}
