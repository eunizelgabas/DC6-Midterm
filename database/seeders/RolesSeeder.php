<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name'=>'admin']);
        $cashier = Role::create(['name'=>'cashier']);
        $supervisor = Role::create(['name'=>'supervisor']);

        Permission::create(['name'=>'create-product']);
        Permission::create(['name'=>'delete-product']);
        Permission::create(['name'=>'edit-product']);
        Permission::create(['name'=> 'make-sales']);
        Permission::create(['name'=> 'record-payments']);
        Permission::create(['name'=> 'manage-users']);
        Permission::create(['name'=>'manage']);
        Permission::create(['name'=>'manage-categories']);

        $cashier->givePermissionTo('make-sales', 'record-payments');
        $admin->givePermissionTo('make-sales', 'record-payments', 'manage-users', 'manage', 'create-product', 'delete-product', 'edit-product', 'manage-categories');
        $supervisor->givePermissionTo('make-sales', 'record-payments','create-product', 'delete-product', 'edit-product', 'manage');

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('supervisor');
        User::find(3)->assignRole('cashier');
    }
}
