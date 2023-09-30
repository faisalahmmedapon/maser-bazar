<?php

namespace Database\Seeders;

use App\Models\Fish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fishes = array(
            [
                'name' => 'Artamim',
                'slug' => 'Artamim',
                'weight' => '1',
                'rate' => '270',
                'amount' => '270',
                'amount' => '270',
            ],
            [
                'name' => 'Along',
                'slug' => 'Along',
                'weight' => '1',
                'rate' => '275',
                'amount' => '270',
            ], [
                'name' => 'Anju',
                'slug' => 'Anju',
                'weight' => '1',
                'rate' => '240',
                'amount' => '240',
            ], [
                'name' => 'Baila',
                'slug' => 'Baila',
                'weight' => '1',
                'rate' => '290',
                'amount' => '290',
            ], [
                'name' => 'Bagair',
                'slug' => 'Bagair',
                'weight' => '1',
                'rate' => '220',
                'amount' => '220',
            ], [
                'name' => 'Baim',
                'slug' => 'Baim',
                'weight' => '1',
                'rate' => '470',
                'amount' => '470',
            ], [
                'name' => 'Boitka',
                'slug' => 'Boitka',
                'weight' => '1',
                'rate' => '370',
                'amount' => '370',
            ], [
                'name' => 'Bata',
                'slug' => 'Bata',
                'weight' => '1',
                'rate' => '250',
                'amount' => '250',
            ], [
                'name' => 'Batasi',
                'slug' => 'Batasi',
                'weight' => '1',
                'rate' => '120',
                'amount' => '120',
            ], [
                'name' => 'Bechi',
                'slug' => 'Bechi',
                'weight' => '1',
                'rate' => '210',
                'amount' => '210',
            ], [
                'name' => 'Bele',
                'slug' => 'Bele',
                'weight' => '1',
                'rate' => '270',
                'amount' => '270',
            ], [
                'name' => 'Borguni',
                'slug' => 'Borguni',
                'weight' => '1',
                'rate' => '530',
                'amount' => '530',
            ], [
                'name' => 'Chapila',
                'slug' => 'Chapila',
                'weight' => '1',
                'rate' => '670',
                'amount' => '670',
            ],
        );

        foreach ($fishes as $fish){
            Fish::updateOrCreate($fish);
        }
    }
}
