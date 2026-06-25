<?php
namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::insert([
            ['name' => 'Farmer'],
            ['name' => 'ProcurementStaff'],
            ['name' => 'Buyer'],
            ['name' => 'Admin'],
            ['name' => 'Driver'],
        ]);
    }
}
