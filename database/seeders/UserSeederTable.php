<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;
use App\Models\Category;
use App\Models\Company;


class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->user_status = 'activado';
        $user->name = 'Admin';
        $user->last_name = 'Drone';
        $user->email = 'admin@drone2map.com';
        $user->password =  Hash::make('password');
        $user->save();
        $user->roles()->attach(Role::where('name', 'admin')->first());
        $user->companies()->attach(Company::where('id', '1')->first());


        $user = new User();
        $user->name = 'Marcio';
        $user->last_name = 'Enns';
        $user->email = 'marcio@gmail.test';
        $user->password =  Hash::make('123456789');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());
    }
}
