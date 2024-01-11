<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@admin.com',
            // 'occupation' => 'Entrepreneur',
            'phone' => '+234-812-812-812',
            'password' => bcrypt('secret'),
        ]
    );
    
    }
}
