<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class StagaireFactory extends Factory
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
           
            'phone'  => $this->faker->phoneNumber(),
            'email'  => $this->faker->email(),
            'password'  =>Hash::make('000000'),
            'filier_id'  =>$this->faker->numberBetween(1,10),
           
        ];
    }
}
