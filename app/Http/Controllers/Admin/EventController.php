<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Company;
use App\Models\Event;


class EventController extends Controller
{
    //
    public function createEvent(Company $company){
        $now = now()->format('m/d/Y');
        $event = Event::Where('company_id', $company->id)->first();
        //dd($event);
        if($event->activated_date === $now && $event->type === 'diario' ){
            //dd($event->name);
            return $event->name;
        }else{
            $event = Event::create([
                'name' => 'Evento diario'.$now,
                'description' => 'Evento diario de empresas',
                'user_cuantity' => 0,
                'event_status' => 'activated',
                'activated_date' => $now,
                'company_id' => $company->id,
    
            ]);
            return $event;
        }
        
    }
}
