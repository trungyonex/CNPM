<?php

namespace Database\Seeders;

use DateTime;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Date;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_manager  = Role::where('name', 'manager')->first();
        $role_renter = Role::where('name', 'renter')->first();
        $role_owner = Role::where('name', 'owner')->first();
        $role_staff = Role::where('name', 'staff')->first();

        $admin = new User();
        $admin->name = 'admin';
        $admin->fullname = 'TrungTran';
        $admin->job = 'admin';
        $admin->email = 'administrator@gmail.com';
        $admin->password = Hash::make('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $manager = new User();
        $manager->name = 'manager';
        $manager->email = 'trungyonex@gmail.com';
        $manager->password = Hash::make('123456');
        $manager->fullname = 'Trần Thành Trung';
        $manager->identity = '025981844';
        $manager->gender = true;
        $manager->phone = '0933422031';
        $manager->birthday = new Carbon('17 April 2000');
        $manager->job = 'Manager';
        $manager->save();
        $manager->roles()->attach($role_manager);

        $staff = new User();
        $staff->name = 'staff';
        $staff->email = 'trungtin@gmail.com';
        $staff->password = Hash::make('123456');
        $staff->fullname = 'Đặng Trung Tín';
        $staff->identity = '0123456789';
        $staff->gender = true;
        $staff->phone = '012845462';
        $staff->birthday = new Carbon('30 April 2000');
        $staff->job = 'Staff';
        $staff->save();
        $staff->roles()->attach($role_staff);

        $renter = new User();
        $renter->name = 'renter';
        $renter->email = 'anhtuan@gmail.com';
        $renter->password = Hash::make('123456');
        $renter->fullname = 'Ngô Đức Anh Tuấn';
        $renter->identity = '0987654321';
        $renter->gender = true;
        $renter->phone = '034634622';
        $renter->birthday = new Carbon('24 January 2000');
        $renter->job = 'AI engineer';
        $renter->save();
        $renter->roles()->attach($role_renter);

        $owner = new User();
        $owner->name = 'owner';
        $owner->email = 'thuan@gmail.com';
        $owner->password = Hash::make('123456');
        $owner->fullname = 'Đặng Trung Thuận';
        $owner->identity = '0987654321';
        $owner->gender = true;
        $owner->phone = '034634622';
        $owner->birthday = new Carbon('21 January 2000');
        $owner->job = 'Software engineer';
        $owner->save();
        $owner->roles()->attach($role_owner);


    }
}
