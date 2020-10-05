<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use App\Task;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    // EMPLOYEES
    public function empSave(Request $request, $id) {

        $data = $request -> all();

        $emp = Employee::findOrFail($id);

        $emp -> update($data);

        return redirect() -> route('emp-show', $id);

    }

    public function empDestroy($id) {

        $emp = Employee::findOrFail($id);

        $emp -> delete($id);

        return redirect() -> route('emp-index');
    }

    // LOCATIONS
    public function locSave(Request $request, $id) {

        $data = $request -> all();
        $loc = Location::findOrFail($id);

        $loc -> update($data);

        return redirect() -> route('loc-show', $id);
    }

    // TASKS
    public function taskSave(Request $request, $id) {

        $data = $request -> all();
        $task = Task::findOrFail($id);

        $task -> update($data);

        return redirect() -> route('task-show', $id);
    }
}
