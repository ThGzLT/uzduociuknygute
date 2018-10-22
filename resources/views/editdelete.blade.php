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
				<form class="form-horizontal" action="{{ route('update',$task->id) }}" method="POST">
					{{ csrf_field() }}
					<fieldset>

						<div class="form-group">
							<label for="task_name" class="col-md-2 control-label">task_name</label>

							<div class="col-md-10">
								<input type="text" class="form-control" value="{{ $task->task_name }}"
									   name="task_name" placeholder="task_name">
							</div>
						</div>

						<div class="form-group">
							<label for="task_description" class="col-md-2 control-label">Task Description</label>

							<div class="col-md-10">
								<input type="text" class="form-control" value="{{ $task->task_description }}"
									   name="task_description" placeholder="Task Description">
							</div>
						</div>

						{!! Form::open(['url' => 'create'], ['action' => 'update']) !!}
						{{ csrf_field() }}
						{{ Form::select('status_id', \App\Statuse::all()->pluck('name', 'id')->toArray(),
                           null,['class'=>'select2 form-control', 'multiple'=>'multiple']) }}
						{!! Form::close() !!}

						<div class="form-group">
							<label for="add_date" class="col-md-2 control-label">Add date</label>

							<div class="col-md-10">
								<input type="date" class="form-control" value="{{ $task->add_date }}" name="add_date"
									   placeholder="add_date">
							</div>
						</div>
						<div class="form-group">
							<label for="completed_date" class="col-md-2 control-label">Completed date</label>

							<div class="col-md-10">
								<input type="date" class="form-control" value="{{ $task->completed_date }}"
									   name="completed_date"
									   placeholder="completed_date">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-2">
								<a href="http://localhost/apraktikalaravel/asmeninisuzduociuplanuoklis/public/edit/"
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
