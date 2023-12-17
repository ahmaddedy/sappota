<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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
            'id' => 1,
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Verifikator',
            'guard_name' => 'web'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'Kepala Dinas',
            'guard_name' => 'web'
        ]);
        Role::create([
            'id' => 4,
            'name' => 'Kepala Bidang',
            'guard_name' => 'web'
        ]);
    }
}
