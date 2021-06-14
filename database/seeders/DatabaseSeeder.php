<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\MobileAccessToken;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(10)
        ->has(
            MobileAccessToken::factory()
                ->count(3)
                ->has(
                    Phone::factory()
                        ->hasApp(7)
                        ->hasLocation(20)
                        ->hasContact(50)
                        ->hasContactLog(12)
                        ->hasSms(12)
                        ->hasSocialApp(100)

                )
        )->create();
    }
}
