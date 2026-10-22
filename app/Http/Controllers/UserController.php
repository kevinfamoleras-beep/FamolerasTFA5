<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        // Temporary static data source for TFA5: no database required.
        $users = [
            ['username' => 'admin01', 'full_name' => 'Alex Reyes', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Bea Santos', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Carlo Cruz', 'role' => 'Cashier'],
            ['username' => 'stock01', 'full_name' => 'Dana Lim', 'role' => 'Inventory Staff'],
            ['username' => 'manager01', 'full_name' => 'Eli Mendoza', 'role' => 'Manager'],
        ];

        return view('users', compact('users'));
    }
}
