<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class QuestionController extends Controller
{
    public function store(): RedirectResponse
    {
        return to_route('dashboard');
    }
}
