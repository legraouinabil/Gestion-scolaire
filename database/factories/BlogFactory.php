<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =$this->faker->realText($maxNbchars = 20 , $indexSize =2);
        return [
            'title'  => $title,
            'description'  =>$this->faker->paragraph(),
            'image'  => $this->faker->imageUrl(640, 480, 'animals', true),
          
           
           
        ];
    }
}
