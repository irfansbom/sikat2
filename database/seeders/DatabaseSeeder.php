<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@bpssumsel.com",
            'password' => '$2y$10$icvESUKYjqBrU3I.laBrJ.QiBVnnbx23vGiShWPOsUj2sZe56Jel6',
        ]);
        Role::create(['name' => 'Super Admin']);
        User::find(1)->assignRole('Super Admin');
    }
}
