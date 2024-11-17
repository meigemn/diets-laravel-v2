<?php

namespace Database\Seeders;

use App\Models\Diet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('diets')->insert([
            'title'=>'Dieta',
            'description'=>'Dieta de ejemplo',
            'totalCalories'=>123,
            'date'=> '2024-11-14',
            'id_client'=>1
        ]);
        Diet::factory(3)->create();
    }
}
