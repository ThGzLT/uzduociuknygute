@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

    <div class="container">

        <table class="table table-bordered table-striped table-hover ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($statuses  as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->name }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection