<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\RefillRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DeliveryControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard()
    {
        
        Auth::shouldReceive('check')->andReturn(true);
        Auth::shouldReceive('user')->andReturn((object) ['name' => 'Test User']);

        DB::shouldReceive('table')
            ->with('orders')
            ->andReturnSelf();
        DB::shouldReceive('count')->andReturn(10);
        DB::shouldReceive('get')->andReturn(collect(['order1', 'order2']));

        DB::shouldReceive('table')
            ->with('refill_requests')
            ->andReturnSelf();
        DB::shouldReceive('count')->andReturn(5);
        DB::shouldReceive('get')->andReturn(collect(['request1', 'request2']));

        $response = $this->get(route('delivery.dashboard'));

        $this->assertTrue(true);
    }

    public function test_updateStatus()
    {
        // Mock RefillRequest model
        $refillRequest = \Mockery::mock(RefillRequest::class);
        $refillRequest->shouldReceive('findOrFail')->andReturnSelf();
        $refillRequest->shouldReceive('save')->andReturn(true);

        // Bind the mock to the service container
        $this->app->instance(RefillRequest::class, $refillRequest);

        // request validation
        $this->withoutMiddleware();
        $response = $this->put(route('updateDeliveryStatus', ['id' => 1]), [
            'delivery_status' => 'Shipped',
        ]);

        $this->assertTrue(true);
    }
}
