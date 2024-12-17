<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::insert([
            [
                'id' => 1,
                'name' => 'Sales and Marketing',
            ],
            [
                'id' => 2,
                'name' => 'Application development',
            ],
        ]);
    }
}
