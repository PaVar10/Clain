<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Interaction;

class InteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interaction::Create([
            'interaccion'=>'hola como estas',
            'conducta'=>'muestra cordialidad'
        ]);

        Interaction::Create([
            'interaccion'=>'todo mal',
            'conducta'=>'muestra enojo'
        ]);

        factory(Interaction::class ,10)->create();
    }
}
