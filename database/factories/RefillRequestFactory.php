<?php
namespace Database\Factories;

use App\Models\RefillRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefillRequestFactory extends Factory
{
    protected $model = RefillRequest::class;

    public function definition()
    {
        return [
            'delivery_status' => $this->faker->randomElement(['Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled']),
        ];
    }
}
