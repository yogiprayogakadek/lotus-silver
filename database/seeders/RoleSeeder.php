<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                'name' => 'admin',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'executive',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
