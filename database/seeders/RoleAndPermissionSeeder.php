<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama biar clean
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        \DB::table('model_has_permissions')->delete();
\DB::table('model_has_roles')->delete();
\DB::table('role_has_permissions')->delete();

Permission::query()->delete();
Role::query()->delete();


        // ===== Permissions per Resource =====
        $entities = [
            'users',
            'employees',
            'departments',
            'grades',
            'holidays',
            'leavetypes',
            'locations',
            'perusahaans',
            'salarygrades',
            'shifts',
        ];

        foreach ($entities as $entity) {
            Permission::firstOrCreate(['name' => "view_any_{$entity}"]);
            Permission::firstOrCreate(['name' => "view_{$entity}"]);
            Permission::firstOrCreate(['name' => "create_{$entity}"]);
            Permission::firstOrCreate(['name' => "update_{$entity}"]);
            Permission::firstOrCreate(['name' => "delete_{$entity}"]);
        }

        // ===== Roles =====
        $admin    = Role::firstOrCreate(['name' => 'admin']);
        $spv      = Role::firstOrCreate(['name' => 'spv']);
        $manager  = Role::firstOrCreate(['name' => 'manager']);
        $karyawan = Role::firstOrCreate(['name' => 'karyawan']);

        // ===== Assign Permissions =====
        // Admin → semua permission
        $admin->givePermissionTo(Permission::all());

        // SPV → LeaveType, Holiday, Shift
        $spv->givePermissionTo([
            'view_any_leavetypes', 'view_leavetypes', 'create_leavetypes', 'update_leavetypes', 'delete_leavetypes',
            'view_any_holidays', 'view_holidays', 'create_holidays', 'update_holidays', 'delete_holidays',
            'view_any_shifts', 'view_shifts', 'create_shifts', 'update_shifts', 'delete_shifts',
        ]);

        // Manager → SalaryGrade
        $manager->givePermissionTo([
            'view_any_salarygrades', 'view_salarygrades', 'create_salarygrades', 'update_salarygrades', 'delete_salarygrades',
        ]);

        // Karyawan → Shift & Departments (contoh "types" aku anggap Departements, bisa kamu ganti kalau beda)
        $karyawan->givePermissionTo([
            'view_any_shifts', 'view_shifts',
            'view_any_departments', 'view_departments',
        ]);

        $this->command->info('✅ Roles & Permissions berhasil dibuat!');
    }
}
