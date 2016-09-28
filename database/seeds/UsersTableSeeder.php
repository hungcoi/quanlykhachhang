<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();

        if (\App\Models\User::where('id', 1)->count() === 0) {
            User::create([
                'name' => 'Admin',
                'password' => '123456',
                'role' => 'admin',
                'email' => 'hungb4by@gmail.com',
                'phone' => '0904.764.208',
                'address' => 'Hanoi, Vietnam'
            ]);
        }
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name,
                'password' => '12345678',
                'role' => $faker->randomElement(['editor', 'member']),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address
            ]);
        }
    }
}
