<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Title;
use App\Models\Product;
use Database\Seeders\FAQSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\HeroSeeder;
use Database\Seeders\LogoSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\FirstBanner;
use Database\Seeders\TitleSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SecondBannerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         AdminSeeder::class;
        $this->call([
            // AdminSeeder::class,
            // CategorySeeder::class,
            // ProductSeeder::class,
            // TitleSeeder::class,
            // HeroSeeder::class,
            // FirstBanner::class,
            // SecondBannerSeeder::class,
            // LogoSeeder::class,
            // FAQSeeder::class
            
        ]);
    }
}
