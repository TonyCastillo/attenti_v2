<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Company;



class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $company = new Company();
        $company->company_name = 'Media Luna Calentitas';
        $company->description = 'Restaurantes para las mejores meriendas de tu vida';
        $company->phone_number = '+595981852987';
        $company->email = 'medialuna@test.com';
        $company->save();

        $company = new Company();
        $company->company_name = 'Doña Isabela';
        $company->description = 'Minutas y màs';
        $company->phone_number = '+595985885587';
        $company->email = 'isabela@test.com';
        $company->save();
    }
}
