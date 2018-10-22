@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')

@section('content')
    <div class="container">


        <div class="panel panel-default">
            <div class="panel-heading">
                {{-- <h3 class="panel-title">Add New Student</h3> --}}
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('update_status',$statuses->id) }}" method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group">
                            <label for="task_description" class="col-md-2 control-label">Task Description</label>

                            <div class="col-md-10">
                                <input type="text" class="form-control" value="{{ $statuses->id }}"
                                       name="id" placeholder="id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">name</label>

                            <div class="col-md-10">
                                <input type="text" class="form-control" value="{{ $statuses->name }}"
                                       name="name" placeholder="name">
                            </div>
                        </div>






                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <a href="http://localhost/apraktikalaravel/asmeninisuzduociuplanuoklis/public/edit_status/"
                                   class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection