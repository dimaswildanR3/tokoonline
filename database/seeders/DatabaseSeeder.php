<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            LanguageSeeder::class,
            CurrencySeeder::class,

            BrandSeeder::class,
            CategorySeeder::class,
            AttributeSeeder::class,
            ProductSeeder::class,

            BannerSeeder::class,
            MenuSeeder::class,
            ThemeSeeder::class,
            SiteSettingsSeeder::class,

            PaymentGatewaySeeder::class,
            PaymentGatewayConfigSeeder::class,
            PaymentSeeder::class,

            OrderSeeder::class,
            RefundSeeder::class,
        ]);
    }
}
