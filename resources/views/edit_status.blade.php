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
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($statuses as $statuse)
                <tr>
                    <td>{{ $statuse->id }}</td>
                    <td>{{ $statuse->name }}</td>


                    <td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="{{ route('editdeletestatus',$statuse->id) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                        <form method="POST" id="delete-form-{{ $statuse->id }}"
                              action="{{ route('delete_status',$statuse->id) }}" style="display: none;">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}

                        </form>

                        <button onclick="if(confirm('Are you Sure, You went to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $statuse ->id }}').submit();
                                }else{
                                event.preventDefault();
                                }" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection