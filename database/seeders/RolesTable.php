<?php

namespace Database\Seeders;

use App\Models\Role;
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
        
    }
}
