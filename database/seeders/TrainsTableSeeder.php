<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++){
            $newtrain = new Train();
            $newtrain->azienda = $faker->name;
            $newtrain->stazione_di_partenza = $faker->sentence(3, true);
            $newtrain->stazione_di_arrivo = $faker->sentence(3, true);
            $newtrain->orario_di_partenza = $faker->dateTimeBetween("-1 days", "+1 week");
            $newtrain->orairo_di_arrivo = $faker->dateTimeBetween("-1 day", "+1 week");
            $newtrain->codice_treno = $faker->bothify('????-####');
            $newtrain->numero_carrozze = $faker->numberBetween(0, 100);
            $newtrain->in_orario = $faker->boolean(80);
            $newtrain->cancellato = $faker->boolean(5);
            $newtrain->save();
        }
    }
}