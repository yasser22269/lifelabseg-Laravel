<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Admin Name',
            'email'  => 'admin@admin.com',
            'password'  => bcrypt('12345678'),
       ]);
    }
}
