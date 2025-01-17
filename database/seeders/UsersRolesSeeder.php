<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use User;
use Illuminate\Support\Facades\Hash;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $roles = ['cliente', 'admin', 'superadmin'];
        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Usuario Cliente
        $cliente = User::create([
            'brand_id' => 1, 
            'license' => 'LIC-CL-001',
            'first_name' => 'Juan',
            'middle_name' => 'Carlos',
            'first_surname' => 'Pérez',
            'second_surname' => 'Gómez',
            'date_of_birth' => '1990-05-15',
            'phone_number' => '5551234567',
            'telephone_extension' => '123',
            'cell_number' => '5557654321',
            'profile_photo' => null,
            'signature_file' => null,
            'web_site' => 'https://clienteejemplo.com',
            'active' => 1,
            'email' => 'juan.perez@cliente.com',
            'email_alternative' => 'jperez_alt@cliente.com',
            'email_verified_at' => now(),
            'user_name' => 'juanp',
            'password' => Hash::make('password123'),
            'created_by' => null,
            'updated_by' => null,
        ]);
        $cliente->assignRole('cliente');

        $admin = User::create([
            'brand_id' => 1,
            'license' => 'LIC-AD-002',
            'first_name' => 'María',
            'middle_name' => 'Luisa',
            'first_surname' => 'García',
            'second_surname' => 'Fernández',
            'date_of_birth' => '1985-08-22',
            'phone_number' => '5559876543',
            'telephone_extension' => '456',
            'cell_number' => '5556543210',
            'profile_photo' => null,
            'signature_file' => null,
            'web_site' => 'https://adminejemplo.com',
            'active' => 1,
            'email' => 'maria.garcia@admin.com',
            'email_alternative' => 'mgarcia_alt@admin.com',
            'email_verified_at' => now(),
            'user_name' => 'mariag',
            'password' => Hash::make('password123'),
            'created_by' => null,
            'updated_by' => null,
        ]);
        $admin->assignRole('admin');

        $superadmin = User::create([
            'brand_id' => 1,
            'license' => 'LIC-SA-003',
            'first_name' => 'Carlos',
            'middle_name' => 'Andrés',
            'first_surname' => 'López',
            'second_surname' => 'Martínez',
            'date_of_birth' => '1980-12-05',
            'phone_number' => '5551122334',
            'telephone_extension' => '789',
            'cell_number' => '5554433221',
            'profile_photo' => null,
            'signature_file' => null,
            'web_site' => 'https://superadminejemplo.com',
            'active' => 1,
            'email' => 'carlos.lopez@superadmin.com',
            'email_alternative' => 'clopez_alt@superadmin.com',
            'email_verified_at' => now(),
            'user_name' => 'carlosl',
            'password' => Hash::make('password123'),
            'created_by' => null,
            'updated_by' => null,
        ]);
        $superadmin->assignRole('superadmin');
    }
}
