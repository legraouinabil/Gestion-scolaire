<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =$this->faker->realText($maxNbchars = 30 , $indexSize =2);
        return [
            'title' => $title, 
            'description' =>$this->faker->text,
            'file' =>$this->faker->imageUrl(640, 480, 'animals', true),
            'group_id'  => $this->faker->numberBetween($int1 = 1 , $int2=20),
            'formateur_id'  => $this->faker->numberBetween($int1 = 1 , $int2=10),
          
        
        ];
    }
}
