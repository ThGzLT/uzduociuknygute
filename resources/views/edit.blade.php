@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

    <div class="container">

        <table class="table table-bordered table-striped table-hover ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>status_id</th>
                <th>add_date</th>
                <th>completed_date</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->task_description }}</td>
                    <td>{{ $task->status_id }}</td>
                    <td>{{ $task->add_date }}</td>
                    <td>{{ $task->completed_date }}</td>
                    <td class="text-center"><a class="btn btn-raised btn-primary btn-sm"
                                               href="{{ route('editdelete',$task->id) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        <form method="POST" id="delete-form-{{ $task->id }}"
                              action="{{ route('delete',$task->id) }}" style="display: none;">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}

                        </form>

                        <button onclick="if(confirm('Are you Sure, You went to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $task->id }}').submit();
                                }else{
                                event.preventDefault();
                                }" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash-o"
                                                                               aria-hidden="true"></i>Delete
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
