<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'Visitor', 'Staff'];
        foreach ($roles as $value) {
            Role::create([
                'role_id'	=> $value
            ]);
        }
        
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => 'admin123',
            'role_id' => '1'
        ]);
        User::create([
            'name' => 'Staff',
            'email' => 'staff@admin.com',
            'password' => 'staff123',
            'role_id' => '3'
        ]);
    }
}
