<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$admin = User::create([
                'kd_user' => Str::random(7),
                'username' => "admin123",
                'password' => Hash::make('123456'),
        ]);
        $admin->assignRole('admin');
        
        $user = User::create([
            'kd_user' => Str::random(7),
            'username' => "pengelola",
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('pengelola');  
        */
        $user = User::create([
            'nama' => "Super Admin",
            'username' => "admin",
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('Admin');    
    }
}
