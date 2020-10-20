@extends('app')
@section('title-block')
    ds
@endsection

@section('content')

    <div class="title m-b-md">
        <ul>
            @foreach($tasks as $task)
            <li>
                <a href="/home/{{$task->id}}">
                {{$task->title}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
