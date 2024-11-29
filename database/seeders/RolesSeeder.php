<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['id' => 0, 'name' => 'super-admin'],
            ['id' => 1, 'name' => 'admin'],
            ['id' => 2, 'name' => 'plant-manager'],
            ['id' => 3, 'name' => 'supervisor'],
            ['id' => 4, 'name' => 'qc'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['id' => $role['id']], // Match by id
                ['name' => $role['name']] // Update the name
            );
        }
    }
}
