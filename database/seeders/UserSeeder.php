<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name'  => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234')
        ]);
    }
}

