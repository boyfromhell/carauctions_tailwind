<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = [
            [
                'id'                    => 1, 
                'name'                  => 'Admin User', 
                'email'                 => 'admin@gmail.com', 
                'password'              => bcrypt('12345678a-'),
                'created_at'            => new DateTime, 
                'updated_at'            => new DateTime
            ],
            [
                'id'                    => 2, 
                'name'                  => 'Normal User', 
                'email'                 => 'user@gmail.com', 
                'password'              => bcrypt('12345678a-'),
                'created_at'            => new DateTime, 
                'updated_at'            => new DateTime
            ],
        ];
        DB::table('users')->insert($users);
    }

}
