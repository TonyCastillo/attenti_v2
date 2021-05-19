<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Mail;
use App\Mail\UsersNotifications;

class UsersController extends Controller
{
    //
    public function index(){
        /* Este me devuelve todos los usarios oredenados correctamente
        por status de usuario incluyendo los admins =(*/
        $users_completo = User::orderByRaw('LENGTH(user_status) desc')->get();

        /* Este me devuelve todos los usuarios
        que no son admin pero falta ordenar por status como mas arriba*/
        $users = New User;
        $usuarios = $users->getUsers();


        return view('admin.users.users_dashboard', compact('usuarios'));
    }


    public function activateUser($id){
        $user = User::find($id);
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $user->update([
            'user_status' => 'activado',
            'activated_date' => $date,
        ]);

        /* FOR MAIL DATA*/
        $title = 'Bienvenido';
        $message_mail = "Tu usuario ha sido activado ya puedes disfrutar de todas las funcionalidades dentro del sistema de Drone2Map";
        $subject = 'Tu usuario ha sido activado';
        Mail::to($user)->send(new UsersNotifications($user, $title, $message_mail, $subject));
        /* FOR MAIL DATA*/

        return redirect()->back();

    }
}
