<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        // Temporary static data source for TFA5: no database required.
        $customers = [
            ['full_name' => 'Hatsune Miku', 'email' => 'miku@example.com', 'phone' => '09170000001'],
            ['full_name' => 'Kasane Teto', 'email' => 'teto@example.com', 'phone' => '09170000002'],
            ['full_name' => 'Akita Neru', 'email' => 'neru@example.com', 'phone' => '09170000003'],
            ['full_name' => 'Zundamon', 'email' => 'zunda@example.com', 'phone' => '09170000004'],
            ['full_name' => 'Yowane Haku', 'email' => 'haku@example.com', 'phone' => '09170000005'],
        ];

        return view('customers', compact('customers'));
    }
}
