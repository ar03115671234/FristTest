<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Seed admin user
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // Ensure to hash passwords
                'role' => 'admin',
            ]
        );

        // Seed staff user
        User::firstOrCreate(
            ['email' => 'staff@example.com'],
            [
                'name' => 'Staff User',
                'password' => Hash::make('password'),
                'role' => 'staff',
            ]
        );

        // Seed 20 customers
        $customers = [
            ['name' => 'Customer One', 'email' => 'customer1@example.com'],
            ['name' => 'Customer Two', 'email' => 'customer2@example.com'],
            ['name' => 'Customer Three', 'email' => 'customer3@example.com'],
            ['name' => 'Customer Four', 'email' => 'customer4@example.com'],
            ['name' => 'Customer Five', 'email' => 'customer5@example.com'],
            ['name' => 'Customer Six', 'email' => 'customer6@example.com'],
            ['name' => 'Customer Seven', 'email' => 'customer7@example.com'],
            ['name' => 'Customer Eight', 'email' => 'customer8@example.com'],
            ['name' => 'Customer Nine', 'email' => 'customer9@example.com'],
            ['name' => 'Customer Ten', 'email' => 'customer10@example.com'],
            ['name' => 'Customer Eleven', 'email' => 'customer11@example.com'],
            ['name' => 'Customer Twelve', 'email' => 'customer12@example.com'],
            ['name' => 'Customer Thirteen', 'email' => 'customer13@example.com'],
            ['name' => 'Customer Fourteen', 'email' => 'customer14@example.com'],
            ['name' => 'Customer Fifteen', 'email' => 'customer15@example.com'],
            ['name' => 'Customer Sixteen', 'email' => 'customer16@example.com'],
            ['name' => 'Customer Seventeen', 'email' => 'customer17@example.com'],
            ['name' => 'Customer Eighteen', 'email' => 'customer18@example.com'],
            ['name' => 'Customer Nineteen', 'email' => 'customer19@example.com'],
            ['name' => 'Customer Twenty', 'email' => 'customer20@example.com'],
        ];

        foreach ($customers as $customer) {
            User::firstOrCreate(
                ['email' => $customer['email']], // Unique condition to check
                [
                    'name' => $customer['name'],
                    'password' => Hash::make('password'), // Default password for all customers
                    'role' => 'customer',
                ]
            );
        }
    }
}
