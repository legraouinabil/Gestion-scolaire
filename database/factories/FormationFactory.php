<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =$this->faker->realText($maxNbchars = 30 , $indexSize =2);
        return [
            'name' => $name,
            'description' => $this->faker->text,
          
        ];
    }
}
