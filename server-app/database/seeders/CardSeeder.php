<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createMultipleCards = [
            ["text" => 'Run scroll in the main thread'],
            ["text" => "Lightweight \n (under 3kb)"],
            ["text" => 'Made for 2022+'],
            ["text" => 'Bring your own animation library'],
            ["text" => 'CONTROL THE SCROLL EASING DURATION'],
            ["text" => 'Use any element as scroller'],
            ["text" => 'Enjoy horizontal + vertical support'],
            ["text" => 'Feel free to use “position: sticky” again'],
            ["text" => 'touch support']
        ];
        Card::insert($createMultipleCards);
    }
}
