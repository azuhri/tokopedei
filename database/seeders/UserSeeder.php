<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Customer",
                "user_type_role" => 0,
                "email" => "customer@gmail.com",
                "password" => \bcrypt("adminadmin"),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Seller",
                "user_type_role" => 1,
                "email" => "seller@gmail.com",
                "password" => \bcrypt("adminadmin"),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];
        foreach ($users as $user) {
            $createUser = User::updateOrCreate(
                ["email" => $user['email']],
                $user,
            );
        }
    }
}
