@extends('layouts.app')

@section('content')

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
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
                    {!! link_to_route('tasks.create', '新規Taskの追加', null, ['class' => 'btn btn-primary'])  !!}
@endsection