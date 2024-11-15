<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\View\{Factory, View};

class DashboardController extends Controller
{
    public function __invoke(): Factory|View
    {
        $questions = Question::all();

        return view('dashboard', compact('questions'));
    }
}
