<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allTypes = [
            'Grafica',
            'Social Media',
            'Web',
            'UX',
            'UI',
            'Copywriting'
        ];

        foreach ($allTypes as $singleType) {
            $type = Type::create([
                'name' => $singleType
            ]);
        }
        
    }
}
