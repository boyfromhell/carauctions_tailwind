<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $roles = array (
            [
                'id'            => 1, 
                'name'          => 'admin', 
                'guard_name'    => 'web',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => 2, 
                'name'          => 'buyer', 
                'guard_name'    => 'web',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => 3, 
                'name'          => 'seller', 
                'guard_name'    => 'web',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
               );
        DB::table('roles')->insert($roles);

    }
}
