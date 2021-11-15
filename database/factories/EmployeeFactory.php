<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    { 
        return [
            'first_name' => $this->faker->name,
            'middle_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'family_name' => $this->faker->name,
            'national_id' => Str::random(14),
            'birth_address' => $this->faker->address,
            'birth_city' => $this->faker->city, 
            'birth_date' => $this->faker->dateTime, 
            'join_date' => $this->faker->dateTime, 
            'gender' => $this->faker->randomElement(['ذكر', 'انثي']), 
            'health_status' => $this->faker->randomElement(['سليم', 'ضمن نسبة 5%']),  
            'social_status' => $this->faker->randomElement(['اعزب', 'متزوج', 'مطلق', 'ارمل', 'متزوج ويعول', 'مطلق ويعول', 'ارمل ويعول']), 
            'military_treatment' => $this->faker->randomElement(['معاف نهائي', 'معاف مؤقت', 'مؤجل تجنيده', 'انهي الخدمة']), 
            'military_summons' => $this->faker->sentence, 
        ];
    }
}     