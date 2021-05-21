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

    public function checkinView(Company $company){

    }
}
