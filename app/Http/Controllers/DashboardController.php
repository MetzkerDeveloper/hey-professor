<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\View\{Factory, View};
use Illuminate\Foundation\Application;

class DashboardController extends Controller
{
    public function __invoke(): Factory|Application|View
    {
        $questions = Question::all();

        return view('dashboard', compact('questions'));
    }
}
