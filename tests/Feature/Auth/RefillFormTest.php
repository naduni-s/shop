<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Decant;
use App\Models\RefillRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Auth\User as Authenticatable;


class RefillFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_refill_form()
    {
        Auth::shouldReceive('check')->andReturn(true);
        Auth::shouldReceive('user')->andReturn((object) ['name' => 'Test User']);

        DB::shouldReceive('table')
            ->with('decants')
            ->andReturnSelf();
        DB::shouldReceive('get')->andReturn(collect([
            (object) ['id' => 1, 'name' => 'Decant 1', 'price' => 10.00],
            (object) ['id' => 2, 'name' => 'Decant 2', 'price' => 15.00]
        ]));

        // Call the refill form route
        $response = $this->get(route('decantrefill'));

        // Assert that the response status is 200 OK
        $response->assertStatus(200);

        // Assert that the view has decants data
        $response->assertViewHas('decants');
    }

    public function test_submit_refill_request()
{
    // Create a decant in the database
    $decant = Decant::create([
        'name' => 'Decant 1',
        'price' => 10.00,
        'size' => 'Small'
    ]);

    /** @var \App\Models\User $user */
    $user = \App\Models\User::factory()->create(); 

    // Ensure $user is an instance of the User model
    $this->assertInstanceOf(\App\Models\User::class, $user);

    // Simulate an authenticated user
    $this->actingAs($user);

    session()->flash('status', 'Refill request submitted successfully!');

    $response = $this->post(route('refilling_request.store'), [
        'address' => '123 Street',
        'phone_number' => '1234567890',
        'decant_id' => $decant->id,
        'size' => '10ml',
        'price' => 20.00
    ]);

    // Assert redirection to the expected route
    $response->assertRedirect(route('refilling_request.index'));

    $response->assertSessionHas('status', 'Refill request submitted successfully!');

    $this->assertDatabaseHas('refill_requests', [
        'address' => '123 Street',
        'phone_number' => '1234567890',
        'decant_id' => $decant->id,
        'size' => '10ml',
        'price' => 20.00
    ]);
}

}
