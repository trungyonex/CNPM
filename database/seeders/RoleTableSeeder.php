<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A Admin User';
        $role_admin->save();

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'A manager role';
        $role_manager->save();

        $role_resident = new Role();
        $role_resident->name = 'renter';
        $role_resident->description = 'A renter role';
        $role_resident->save();

        $role_resident = new Role();
        $role_resident->name = 'owner';
        $role_resident->description = 'A owner role';
        $role_resident->save();

        $role_staff = new Role();
        $role_staff->name = 'staff';
        $role_staff->description = 'A staff role';
        $role_staff->save();
    }
}
