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
        
       
        $enterprise_id= $this->faker->unique()->numberBetween(1,5);
        return [
            

            
            'enterprise_id' => $enterprise_id,
            'name' =>$this->faker->name(),
            'contact' =>$this->faker->name(),
            'email' =>$this->faker->safeEmail(),

        ];

        
    }
}
