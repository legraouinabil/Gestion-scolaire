<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilierFactory extends Factory
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
            'description' =>$this->faker->text,
            'dureé'  => '2year',
            'formation_id'  => $this->faker->numberBetween($int1 = 1 , $int2=4),
            'image'  => $this->faker->imageUrl(640, 480, 'animals', true),
        
        ];
    }
}
