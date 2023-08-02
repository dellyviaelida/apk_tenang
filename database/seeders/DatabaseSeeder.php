<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Quote;
use App\Models\Zikir;
use App\Models\Journal;
use App\Models\Category;
use App\Models\Meditation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Quote::factory(5)->create();
        Category::factory(5)->create();
        Zikir::factory(5)->create();
        Journal::factory(5)->create();
        Meditation::factory(5)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
