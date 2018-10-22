@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

<div class="container">
    Filter:
    <a href="/apraktikalaravel/asmeninisuzduociuplanuoklis/public/tasklist/?status_id=1">Completed</a>
    <a href="/apraktikalaravel/asmeninisuzduociuplanuoklis/public/tasklist/?status_id=2">Not Done</a>
    <a href="/apraktikalaravel/asmeninisuzduociuplanuoklis/public/tasklist/?status_id=3">Delayed</a>
    <a href="/apraktikalaravel/asmeninisuzduociuplanuoklis/public/tasklist">Reset</a>
    <table class="table table-bordered table-striped table-hover ">
        <thead>
        <tr>
            <th>ID</th>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>status_id</th>
            <th>add_date</th>
            <th>completed_date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tasks  as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->task_name }}</td>
            <td>{{ $task->task_description }}</td>
            <td>{{ $task->status_id }}</td>
            <td>{{ $task->add_date }}</td>
            <td>{{ $task->completed_date }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection