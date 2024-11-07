<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::truncate();

        $technologies = config('technologies');
        
        foreach ($technologies as $newTech){
            $technology = new Technology();
            $technology->title = $newTech['title'];
            
            $technology->save();
        }
    }
}
