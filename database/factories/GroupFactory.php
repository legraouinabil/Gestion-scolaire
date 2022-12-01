<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
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
          
            'filier_id'  => $this->faker->numberBetween($int1 = 1 , $int2=20),
        ];
    }
}
