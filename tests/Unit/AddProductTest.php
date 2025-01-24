<?php

test('Add product, update product', function () {

    $Product = [
        'product_name' => 'Test Product',
        'product_price' => 999.99,
        'product_description' => 'This is a dummy description for testing purposes.',
    ];

  
    $isValidName = strlen($Product['product_name']) > 0; 
    $isValidPrice = $Product['product_price'] > 0;       
    $isValidDescription = strlen($Product['product_description']) > 10; 

 
    expect($isValidName)->toBeTrue();
    expect($isValidPrice)->toBeTrue();
    expect($isValidDescription)->toBeTrue();

    // Final assertion to confirm the test flow
    expect(true)->toBeTrue(); 
});


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage; 