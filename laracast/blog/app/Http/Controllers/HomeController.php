<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }
    public function posts(): View
    {
        return view('posts');
    }
    public function routeToPage($page): View
    {
        return view("$page");
    }

    public function test(string $firstName = null): View
    {
        $sum = $this->calculateTwoDigits(0.0000001 , 0.0002 , '+');
        $sub = $this->calculateTwoDigits(5, 2, '-');


        return view('test', [
            'sum' => $sum,
            'sub' => $sub,
            'total' => $sum + $sub,
        ]);
    }


    public function calculateTwoDigits(float $firstDigit, float $secondDigit, string $operator = '+'): int|null|float
    {
        return match($operator) {
            '+' => $firstDigit + $secondDigit,
            '-' => $firstDigit - $secondDigit,
            ':' => ($secondDigit === 0) ? null : ($firstDigit / $secondDigit),
            '*' => $firstDigit * $secondDigit
        };
    }
}
