@extends('layouts.app')

@section('content')

     <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ステータス</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $tasks)
                     <tr>
                         <td>{!! link_to_route('tasks.show', $tasks->id, ['id' => $tasks->id]) !!} </td>
                         <td>{{ $tasks->status }}</td>
                         <td>{{ $tasks->content }}</td>
                     </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
     {!! link_to_route('tasks.create', '新規タスクの追加', null, ['class' => 'btn btn-primary']) !!}

@endsection