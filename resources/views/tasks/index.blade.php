@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <h1>Tasklist</h1>

        @if (count($tasks) > 0)
        
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Status</th>
                        <th>Task</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        @if (Auth::user()->id == $task->user_id)
                            <tr>
                                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                                <td>{{ $task->status }}</td>
                                <td>{{ $task->content }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endif
                {!! link_to_route('tasks.create', '新規Taskの追加', null, ['class' => 'btn btn-primary']) !!}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
    
@endsection