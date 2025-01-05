<?php
namespace Database\Factories;

use App\Models\Decant;
use Illuminate\Database\Eloquent\Factories\Factory;

class DecantFactory extends Factory
{
    protected $model = Decant::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'size' => $this->faker->randomElement(['Small', 'Medium', 'Large']),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
