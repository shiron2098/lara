@extends('app')
@section('content')
   <h1>Главная страница</h1>
@endsection

@section('links')
    @parent
    <div class="container">
        <div class="content">
            <h1>{{$task->description}}</h1>
        </div>
    </div>
    @endsection
