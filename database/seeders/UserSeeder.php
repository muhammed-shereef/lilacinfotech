<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::insert([
            [
                'id' => 1,
                'name' => 'Jhon Due',
                'fk_department' => 1,
                'fk_designation' => 1,
                'phone_number' => '7034161561',
            ],
            [
                'id' => 2,
                'name' => 'Tommy Mark',
                'fk_department' => 2,
                'fk_designation' => 2,
                'phone_number' => '9048616254',
            ],
            [
                'id' => 3,
                'name' => 'Jhon Due',
                'fk_department' => 1,
                'fk_designation' => 2,
                'phone_number' => '8589406076',
            ],
            [
                'id' => 4,
                'name' => 'Tommy Mark',
                'fk_department' => 2,
                'fk_designation' => 1,
                'phone_number' => '8943692123',
            ],
        ]);
    }
}
