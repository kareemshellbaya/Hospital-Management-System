<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();
        // DB::table('admins')->delete();
        Admin::create([
            'name'      => 'Admin',
            'password'  =>Hash::make('Admin123'),
            'email'     => 'Admin@web.com',
        ]);
    }
}
