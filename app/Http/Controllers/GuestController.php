<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use App\Task;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    // EMPLOYEES
    public function empIndex()
    {
        $emps = Employee::all();

        return view('emp-index', compact('emps'));
    }

    public function empShow($id)
    {
        $emp = Employee::findOrFail($id);
        $locs = Location::all();

        return view('emp-show', compact('emp', 'locs'));
    }

    // LOCATIONS
    public function locIndex() {

        $locs = Location::all();

        return view('loc-index', compact('locs'));
    }

    public function locShow($id) {

        $loc = Location::findOrFail($id);

        return view('loc-show', compact('loc'));
    }

    // TASKS
    public function taskIndex() {

        $tasks = Task::all();

        return view('task-index', compact('tasks'));
    }

    public function taskShow($id) {

        $task = Task::findOrFail($id);

        return view('task-show', compact('task'));
    }
}
