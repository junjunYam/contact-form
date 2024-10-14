<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,5),
            'last_name' => $this->faker->lastname($gender = null),
            'first_name' => $this->faker->firstname($gender = null),
            'gender' => $this->faker->numberBetween(1,3),
            'email' =>$this->faker->unique->safeEmail,
            'tell' =>$this->faker->phoneNumber,
            'address' =>$this->faker->address,
            'building' =>$this->faker->secondaryAddress,
            'detail' =>$this->faker->realText(20)
        ];
    }
}
