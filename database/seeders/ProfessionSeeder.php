<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Profession;


class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profession = new Profession();
        $profession->name = 'Arquitecto';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Programador';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Ingeniero';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Agronomo';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Agricultor';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Productora';
        $profession->save();

        $profession = new Profession();
        $profession->name = 'Otros';
        $profession->save();

    }
}
