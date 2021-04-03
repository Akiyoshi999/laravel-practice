<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::factory()
            ->count(5)
            ->state(
                new Sequence(
                    ["name" => "DIY"],
                    ["name" => "Laravel"],
                    ["name" => "WEBサービス"],
                    ["name" => "カメラ"],
                    ["name" => "Javascript"],
                )
            )
            ->create();
    }
}
