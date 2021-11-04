<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    
  /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       /* $table->string('nombreProducto');
        $table->integer('cantidad');
        $table->integer('precio');
        $table->string('descripcion');*/
        return [

            'nombreProducto'=>$this->faker->sentence(),
            'cantidad'=>$this->faker->numberBetween(0,10000),
            'precio'=>$this->faker->numberBetween(100,2000),
            'descripcion'=>$this->faker->text(200)
            //
        ];
    }
}
