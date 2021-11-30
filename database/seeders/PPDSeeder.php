<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PPDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'ali bakar',
            'email' => 'ali@gmail.com',
            'role' => 'ppd',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
