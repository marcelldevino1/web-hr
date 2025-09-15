<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
        ]);

        $this->command->info('🎉 Database seeding completed!');
        $this->command->line('');
        $this->command->line('Login credentials:');
        $this->command->line('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->command->line('👑 Admin (Full Access)');
        $this->command->line('   Email: admin@company.com');
        $this->command->line('   Password: admin123');
        $this->command->line('');
        $this->command->line('👮 Supervisor (Leave Type, Holiday, Shift)');
        $this->command->line('   Email: spv@company.com'); 
        $this->command->line('   Password: spv123');
        $this->command->line('');
        $this->command->line('💼 Manager (Salary Grade)');
        $this->command->line('   Email: manager@company.com');
        $this->command->line('   Password: manager123');
        $this->command->line('');
        $this->command->line('👤 Karyawan (Shift, Types)');
        $this->command->line('   Email: karyawan@company.com');
        $this->command->line('   Password: karyawan123');
        $this->command->line('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    }
}
