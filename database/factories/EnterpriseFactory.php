<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EnterpriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_level_id = $this->faker->numberBetween(1,2);
        $enterprise_id = ($user_level_id == 2) ? $this->faker->unique()->numberBetween(1,5) : null;
        
       
        $enterprise_id= $this->faker->unique()->numberBetween(1,5);
        return [
            'user_level_id' =>$this->faker->numberBetween(1,2),
            'name' =>$this->faker->name(),
            
            'email' =>$this->faker->safeEmail(),

        ];

        if('user_level_id'== 2){
            return [
                'enterprise_id' =>$this->faker->unique()->numberBetween(1,5),
            ];
        }
    }
}
