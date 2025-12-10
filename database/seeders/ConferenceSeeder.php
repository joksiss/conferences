<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conference;
use Carbon\Carbon;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        Conference::create([
            'title'           => 'Laravel Developers Summit',
            'description'     => 'Conference about modern Laravel development.',
            'conference_date' => Carbon::now()->addMonth()->toDateString(),
            'address'         => 'Main Street 1, Vilnius',
            'participants'    => 150,
            'city'            => 'Vilnius',
        ]);

        Conference::create([
            'title'           => 'PHP Baltic Conference',
            'description'     => 'Annual PHP conference in the Baltics.',
            'conference_date' => Carbon::now()->addMonths(2)->toDateString(),
            'address'         => 'Sea Side Hall, Klaipėda',
            'participants'    => 200,
            'city'            => 'Klaipėda',
        ]);
    }
}
