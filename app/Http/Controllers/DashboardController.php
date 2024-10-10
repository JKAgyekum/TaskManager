<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $taskCount = Task::count();
        $completedCount = Task::where('status','completed')->count();
        $pendingCount = Task::where('status','pending')->count();
        $priorityM = Task::where('priority','medium')->count();
        $priorityL = Task::where('priority','low')->count();
        $priorityH = Task::where('priority','high')->count();


        return view('dashboard', compact('taskCount','completedCount','pendingCount','priorityM','priorityL','priorityH'));
    }
}
