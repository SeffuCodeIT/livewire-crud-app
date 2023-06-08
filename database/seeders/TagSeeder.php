<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tags')->insert([
           [ 'name' => 'php',
            'slug' => 'code',
            'created_at' => now(),
            'updated_at' => now(),
             ],
            [
                'name' => 'laravel',
                'slug' => 'livewire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'seffu',
                'slug' => 'kamau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
