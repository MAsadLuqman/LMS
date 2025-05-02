<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Asad Luqman',
            'email' => 'admin@lms.com',
            'password' => bcrypt('admin123'),
            'father_name' => 'Mohammad Luqman',
            'address' => 'Dhaka, Bangladesh',
            'phone' => '01711111111',
            'cnic'=> '73741671602462',
            'gender' => 'Male',
            'dob' => '1999-01-01',
            'bio'=> 'hjg jhvjv jhv vjv'
        ]);
    }
}
