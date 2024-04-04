<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Technology;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Coding',
            'Laravel',
            'Html',
            'Css',
            'Javascript',
            'Vue',
            'Php',
            'Bootstrap',
            'Sass'
        ];

        foreach($technologies as $element) {
            $new_technology = new Technology();
            $new_technology->name = $element;
            $new_technology->slug = Str::slug($new_technology->name);

            $new_technology->save();
        };
    }
}
