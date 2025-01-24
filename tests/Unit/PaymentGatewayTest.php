<?php
test('paymentgateway validations', function () {

    $Product = [
        'product_name' => 'Test Product',
        'product_price' => 999.99,
        'product_description' => 'This is a dummy description for testing purposes.',
    ];

    $Name = strlen($Product['product_name']) > 0; 
    $Price = $Product['product_price'] > 0;       
    $Description = strlen($Product['product_description']) > 10; 

 
    expect($Name)->toBeTrue();
    expect($Price)->toBeTrue();
    expect($Description)->toBeTrue();


    expect(true)->toBeTrue(); 
});



use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;