<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("articles")->insert([
            "title" => "Artigo sobre pesca",
            "preview" => "preview do artigo",
            "text" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti nisi quas explicabo enim illo esse illum recusandae quidem! Eos tempora voluptatum expedita reiciendis magnam maiores, omnis autem eligendi ea asperiores?",
            "autor" => "Davi",
            "directory" => "1707517411",
            "from_category" => 1,
            "date" => "250106"
        ]);
    }
}
