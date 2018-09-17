@extends('todo.layout');

@section('content')

<div id="myDIV" class="header">
    <h2>My To Do List</h2>

    <form method="POST" action="{{ route('create') }}">
        <input type="text" name="task" id="myInput" placeholder="Title...">
        <input type="submit" value="Add" class="addBtn">

        {{ csrf_field() }}
    </form>

</div>

    <ul>
        @foreach($tasks as $task)
            <li onclick="location.href='{{ route('update', ['id'=>$task->id]) }}'" @if($task->status) class="checked" @endif>{{ $task->content }} <a href="{{ route('delete', ['id'=>$task->id]) }}" class="close">X</a></li>
        @endforeach
    </ul>

@endsection


