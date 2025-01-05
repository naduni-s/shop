<?php
use App\Models\User;

it('renders the login page', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
    $response->assertSee('Login'); 
});


it('denies access to unauthenticated users for admin dashboard', function () {
    // Attempt to access the admin dashboard without logging in
    $response = $this->get('/admin/');

    // Assert redirection to login page (this ensures the test is valid)
    $response->assertRedirect('/login');

    // Explicitly mark as completed with a descriptive message
    expect(true)->toBeTrue()->toBeTrue('Test completed successfully.');
});

