<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\View\{Factory, View};

class DashboardController extends Controller
{
    public function __invoke(): Factory|View
    {
        $questions = Question::withSum('votes', 'like')
            ->withSum('votes', 'unlike')
            ->get();

        return view('dashboard', compact('questions'));
    }
}
