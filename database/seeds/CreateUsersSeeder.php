<?php

use Illuminate\Database\Seeder;
use App\User;

use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Ini super admin',
               'email'=>'superadmin@gmail.com',
                'role'=>'superadmin',
               'password'=> Hash::make('12345678'),
            ],
            [
               'name'=>'Ini admin',
               'email'=>'admin@gmail.com',
                'role'=>'admin',
               'password'=> Hash::make('12345678'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
