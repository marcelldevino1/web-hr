<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 👑 Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@company.com'],
            ['name' => 'Admin', 'password' => Hash::make('admin123')]
        );
        $admin->assignRole('admin');

        // 👮 Supervisor
        $spv = User::firstOrCreate(
            ['email' => 'spv@company.com'],
            ['name' => 'Supervisor', 'password' => Hash::make('spv123')]
        );
        $spv->assignRole('spv');

        // 💼 Manager
        $manager = User::firstOrCreate(
            ['email' => 'manager@company.com'],
            ['name' => 'Manager', 'password' => Hash::make('manager123')]
        );
        $manager->assignRole('manager');

        // 👤 Karyawan
        $karyawan = User::firstOrCreate(
            ['email' => 'karyawan@company.com'],
            ['name' => 'Karyawan', 'password' => Hash::make('karyawan123')]
        );
        $karyawan->assignRole('karyawan');
    }
}
