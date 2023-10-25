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
        $user = [
            [
                'name' => 'Admin',
                'role_id' => 1,
                'place_birth' => 'Sidemen',
                'date_birth' => '1990-01-01',
                'gender' => 'Female',
                'phone' => '081123123123',
                'address' => 'Sidemen, Karangasem-Bali',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'photo' => 'assets_admin/images/avatar/2.png',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
