<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;
    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /* $table->date('fechaDeOrden');
        $table->date('fechaDeEnvio');
        $table->string('estado');
        $table->string('comentarios');*/
        return [
            'fechaDeOrden'=>$this->faker->dateTimeBetween('-40 years','-16 years'),
            'fechaDeEnvio'=>$this->faker->dateTimeBetween('-39 years','-15 years'),
            'estado'=>$this->faker->sentence(),
            'comentarios'=>$this->faker->text(200)


            //
        ];
    }
}
