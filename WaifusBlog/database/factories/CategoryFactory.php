<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(15);

        return [
            //retorna una lista de datos, dah xd
            'name' => $name,
            'slug' => Str::slug($name)

        ];
    }
}
