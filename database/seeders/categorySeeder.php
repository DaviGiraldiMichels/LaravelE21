<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            [
                "name" => "Steel Wiley",
                "show" => "1"
            ],
            [
                "name" => "Yen Cox",
                "show" => "0"
            ],
            [
                "name" => "Phyllis Bonner",
                "show" => "1"
            ],
            [
                "name" => "Merritt Pickett",
                "show" => "1"
            ],
            [
                "name" => "Glenna Mckay",
                "show" => "0"
            ],
            [
                "name" => "Dorian Meadows",
                "show" => "0"
            ],
            [
                "name" => "Wynter Castaneda",
                "show" => "1"
            ],
            [
                "name" => "Summer Duke",
                "show" => "1"
            ],
            [
                "name" => "Isaac Gordon",
                "show" => "0"
            ],
            [
                "name" => "Lacy Harding",
                "show" => "1"
            ],
            [
                "name" => "Ezra Delgado",
                "show" => "1"
            ],
            [
                "name" => "Molly Rocha",
                "show" => "0"
            ],
            [
                "name" => "Nerea Gamble",
                "show" => "1"
            ],
            [
                "name" => "Elton Cook",
                "show" => "1"
            ],
            [
                "name" => "Kim Cain",
                "show" => "0"
            ],
            [
                "name" => "Palmer Burton",
                "show" => "1"
            ],
            [
                "name" => "Martena Webster",
                "show" => "0"
            ],
            [
                "name" => "Elizabeth Hale",
                "show" => "0"
            ],
            [
                "name" => "Ignacia Nicholson",
                "show" => "1"
            ],
            [
                "name" => "Delilah Noble",
                "show" => "0"
            ]
        ]);
    }
}
