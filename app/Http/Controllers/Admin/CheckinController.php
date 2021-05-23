<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\EventController;

use App\Models\User;
use App\Models\Company;
use App\Models\Event;
use App\Models\EventDetail;

class CheckinController extends Controller
{
    //
    public function index(){
        $companies = Auth::user()->companies()->get();
        return view('company.checkin_companies', compact('companies'));
    }
    
    public function checkinView($id){
        $company = Company::find($id);
        //return $company;
        $user = Auth::user();
        $user_has_company = $user->companies()->whereHas('users')->exists();

        if($user_has_company){
            
            /* Esta parte deberia de estirar del otro controllador EventController */
            /* $event = New EventController;
            $event->createEvent($company);
            no me retorna el evento verificar despues
            dd($event); */
            /* Esta parte deberia de estirar del otro controllador EventController */

            
            /*######################################################*/
            $now = now()->format('m/d/Y');
            $event = Event::Where('company_id', $company->id)->first();
            //dd($event);
            if($event && $event->activated_date === $now && $event->type === 'diario' ){
                return view('company.checkin_handle', compact('company', 'event'));
            }else{
                $event = Event::create([
                    'name' => 'Evento diario'.$now,
                    'description' => 'Evento diario de empresas',
                    'user_cuantity' => 0,
                    'event_status' => 'activated',
                    'activated_date' => $now,
                    'company_id' => $company->id,
        
                ]);
            }
            /*######################################################*/


            return view('company.checkin_handle', compact('company', 'event'));
        }else{
            return abort(403, 'Unauthorized action.');
        }
    }

    public function createCheckin(Request $request){
        //dd($request->all());
        $user = User::Where('ci_number', $request->ci_number)->first();
        $event = Event::find($request->event_name);
        $event_detail = EventDetail::create([
            'event_id' => $event->id,
            'user_id' => $user->id
        ]);
        $success = 'purete';
        return redirect()->back()->with('success', 'your message,here');   
    }
}
