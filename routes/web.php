<?php

use Illuminate\Http\Request;
use App\Task;

Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks.index', [
        'tasks' => $tasks,
    ]);
});

Route::post('/task', function(REQUEST $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    //dd($validator);

    if($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    /*$task = new Task;
    $task->name = $request->name;
    $task->save();*/

    Task::create([
        'name' => $request->name,
    ]);

    return redirect('/');

});

Route::delete('/task/{task}', function(Task $task) {
    $task->delete();
    return redirect('/');
});
