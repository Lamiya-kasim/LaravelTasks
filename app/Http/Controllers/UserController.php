<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store()
    {
        Product::create([
            'name' => 'Laptop',
            'price' => 999.99,
            'description' => 'A high-end laptop.',
        ]);
    }
}

