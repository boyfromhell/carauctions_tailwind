<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $categories = [
            [
                'id' => 1, 
                'category_name'         => 'Category 1', 
                'category_description'  => 'Category 1 description', 
                'created_at'            => new DateTime, 
                'updated_at'            => new DateTime
            ],
            [
                'id'                    => 2, 
                'category_name'         => 'Category 2', 
                'category_description'  => 'Category 2 description', 
                'created_at'            => new DateTime, 
                'updated_at'            => new DateTime
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
