<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category();
        $category->name = '3D Models';
        $category->save();

        $category = new Category();
        $category->name = 'Multispectral';
        $category->save();

        $category = new Category();
        $category->name = 'Measurements';
        $category->save();

        $category = new Category();
        $category->name = 'Elevation Models';
        $category->save();

        $category = new Category();
        $category->name = 'Orthomosaics';
        $category->save();

        $category = new Category();
        $category->name = 'Plant Health';
        $category->save();
    }
}
