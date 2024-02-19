<?php

namespace Database\Seeders;

use App\Models\Role;
use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);

    }
}
