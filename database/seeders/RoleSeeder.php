<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'description' => 'Author'
        ]);

        Role::create([
            'description' => 'Editor'
        ]);

        Role::create([
            'description' => 'Subscriber'
        ]);

        Role::create([
            'description' => 'Administrator'
        ]);
    }
}
