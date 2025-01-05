<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class PerfumeRecommenderTest extends TestCase
{
    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed test data
        DB::table('mens')->insert([
            'id' => 201,
            'name' => 'Fresh Citrus',
            'price' => 50,
            'description' => 'A fresh citrus perfume.',
            'image_url' => 'citrus.jpg',
            'tags' => 'citrus, casual, light, male',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('women')->insert([
            'id' => 202,
            'name' => 'Floral Bliss',
            'price' => 70,
            'description' => 'A delightful floral perfume.',
            'image_url' => 'floral.jpg',
            'tags' => 'floral, wedding, medium, female',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('unisex')->insert([
            'id' => 203,
            'name' => 'Woody Elegance',
            'price' => 60,
            'description' => 'A woody perfume for all.',
            'image_url' => 'woody.jpg',
            'tags' => 'woody, formal, strong, unisex',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function testPerfumeRecommendation()
    {
        $response = $this->get(route('recommender', [
            'scent_type' => 'floral',
            'occasion' => 'wedding',
            'longevity' => 'medium',
            'gender' => 'female',
            'scent_combination' => null,
        ]));

        $response->assertStatus(200);

        $response->assertViewHas('recommendedProducts', function ($recommendedProducts) {
            return $recommendedProducts->contains('name', 'Floral Bliss');
        });
    }

    public function testNoMatchingPerfumes()
    {
        $response = $this->get(route('recommender', [
            'scent_type' => 'aquatic',
            'occasion' => 'vacation',
            'longevity' => 'light',
            'gender' => 'male',
            'scent_combination' => null,
        ]));

        $response->assertStatus(200);

        $response->assertViewHas('recommendedProducts', function ($recommendedProducts) {
            return $recommendedProducts->isEmpty();
        });
    }
    //public function testMandatoryFieldsValidation()
    //{
    //$response = $this->postJson(route('recommender'), [
    //    // Omitting mandatory fields
    //]);
//
    //$response->assertStatus(422);
    //$response->assertJsonValidationErrors([
    //    'scent_type',
    //    'occasion',
    //    'longevity',
    //    'gender',
    //]);
    //}

public function testValidSubmission()
{
    $response = $this->get(route('recommender', [
        'scent_type' => 'floral',
        'occasion' => 'wedding',
        'longevity' => 'medium',
        'gender' => 'female',
    ]));

    $response->assertStatus(200);
    $response->assertViewHas('recommendedProducts', function ($recommendedProducts) {
        return $recommendedProducts->contains('name', 'Floral Bliss');
    });
}

}
