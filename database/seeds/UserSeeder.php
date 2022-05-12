<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = User::create([
            'name' => 'Sarini',
            'email' => 'sarini@gmail.com',
            'email_verified_at' => '2022-05-05',
            'password' => Hash::make('sarini'),
        ]);
    }
}
