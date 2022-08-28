<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModulFactory extends Factory
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
            'name'  => $name,
            'description'  =>$this->faker->paragraph(),
            'nbHours'  => $this->faker->randomNumber(),
            'filier_id'  =>$this->faker->numberBetween(1,9),
            'cofession'  =>$this->faker->numberBetween(1,3),
           
           
        ];
    }
}
