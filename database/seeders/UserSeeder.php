<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
        
            'name'=>'Admin',
            'surname'=>'Surname Admin',
            'phone'=>'111222333',
            'email'=>'ejemplo@gmail.com',
            'password'=> bcrypt('11111111'),
        ]);
        User::factory()->count(2)->create();
    }
}
