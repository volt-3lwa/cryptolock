<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::factory()->create([
            "name" => "Saif Osama",
            "description" => str_replace(["1.", "2.", "3."], "-", "1. The Leader of the Team.
        2. The responsible for arduino programming.
        3. He is responsible in part of the website of the project.
        4. He is 18 years old."),
            "image" => "loog/Kira.jpg",
        ]);

        AboutUs::factory()->create([
            "name" => "Yousif Ibrahim",
            "description" => str_replace(["1.", "2.", "3."], "-", "1. The responsible of mobile programming
        2. He is the one of simulation the Arduino programming with the leader
        3.He is 17 years old."),
            "image" => "loog/Flutter.jpg",
        ]);

        AboutUs::factory()->create([
            "name" => "Alaa Hatem",
            "description" => str_replace(["1.", "2."], "-", "1. He is 16 years old.
        2.He is responsible of the website programming that include Front-end and Back-end Development"),
            "image" => "loog/Alaa_sPicture.jpg",
        ]);

        AboutUs::factory()->create([
            "name" => "Mohamed Waheed ",
            "description" => str_replace(["1.", "2."], "-", "1. He is 18 years old.
        2. He is the responsible of the design of the website and the mobile application and the logo of the project and any relationship about design"),
            "image" => "loog/Wa7Wa7.jpg",
        ]);

    }
}
