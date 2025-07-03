<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
       //     'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);


        $super_admin = User::where('email', 'superadmin@home.com')->first();

        if(empty($super_admin)) {
            User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@home.com',
                'password'=> Hash::make('12345678'),
            ]);
    }
}
}
