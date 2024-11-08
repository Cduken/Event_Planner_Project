<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Create 10 random events
        Event::factory()->count(10)->create();
    }
}
