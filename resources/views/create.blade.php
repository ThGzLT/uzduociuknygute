@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector: '#tinyMCE'});</script>
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Oh snap!</strong>{{ $error }}
                </div>
            @endforeach
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add New Task</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('store') }}" method="POST">
                    {{ csrf_field() }}
                    <fieldset>

                        <div class="form-group">
                            <label for="task_name" class="col-md-2 control-label">Task name</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="task_name" placeholder="task name"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="tinyMCE" class="col-md-2 control-label">Task Description</label>
                            <div class="col-md-8">
                                <input type="textbox" class="form-control" id="tinyMCE" name="task_description"
                                       placeholder="Task Description" value="task_description" required>
                            </div>
                        </div>


                        {!! Form::open(['url' => 'create'], ['action' => 'store']) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label"></label>
                            <div class="col-md-8">
                        {{ Form::select('status_id', \App\Statuse::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
                           null,['class'=>'select2 form-control', 'multiple'=>'multiple']) }}
                            </div>
                        </div>
                        {!! Form::close() !!}


                        <div class="form-group">
                            <label for="add_date" class="col-md-2 control-label">Add Date</label>

                            <div class="col-md-8">
                                <input type="date" class="form-control" name="phone" placeholder="Add Date" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="completed_date" class="col-md-2 control-label">Completed Date</label>

                            <div class="col-md-8">
                                <input type="date" class="form-control" name="completed_date"
                                       placeholder="Completed Date">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
