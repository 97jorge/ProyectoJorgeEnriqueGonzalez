<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\empleado;
class empleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        empleado::factory(100)->create();
        //
    }
}
