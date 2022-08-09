<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormateurFactory extends Factory
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
            'first_name'  => $name,
            'last_name'  =>$this->faker->realText($maxNbchars = 10 , $indexSize =3),
            'image'  => $this->faker->imageUrl(640, 480, 'animals', true),
            'phone'  => $this->faker->phoneNumber(),
            'email'  => $this->faker->email(),
            'password'  =>'123456',
            'filier_id'  =>$this->faker->numberBetween(1,10)
        ];
    }
}
