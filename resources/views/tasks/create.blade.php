@extends('layouts.app')

@section('content')
@if (Auth::user()->id == $task->user_id)
<h1>Task追加ページ</h1>
<div class="row">
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
            {!! Form::label('status', 'status:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content', 'Task:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
            {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}
    
        {!! Form::close() !!}
    </div>
</div>
@endif
@endsection