<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

             //super-admin
             [
                'name' => 'superAdmin',
                'username' => 'superAdmin',
                'email' => 'superAdmin@gmail.com',
                'password' => Hash::make(12345678),
                'role' => 0,
                'status' => 'active',
            ],
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(12345678),
                'role' => 1,
                'status' => 'active',
            ],
            //admin
            [
                'name' => 'Plant Manager',
                'username' => 'plantmanager',
                'email' => 'plantmanager@gmail.com',
                'password' => Hash::make(12345678),
                'role' => 2,
                'status' => 'active',
            ],

            //admin
            [
                'name' => 'Supervisor',
                'username' => 'supervisor',
                'email' => 'supervisor@gmail.com',
                'password' => Hash::make(12345678),
                'role' => 3,
                'status' => 'active',
            ],

            //admin
            [
                'name' => 'QC',
                'username' => 'qc',
                'email' => 'qc@gmail.com',
                'password' => Hash::make(12345678),
                'role' => 4,
                'status' => 'active',
            ]


        ]);
    }
}
