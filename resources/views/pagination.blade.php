@extends('layouts.app')

@section('content')
<div class="cointainer">
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">userGlobalKey</th>
        <th scope="col">email</th>
        <th scope="col">OperatorName</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->userGlobalKey}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->operatorName}}</td>
    </tr>
        @endforeach
    </tbody>
    <tr>
    {{ $users->links('/vendor/pagination/pagination-custom') }}
    </tr>
</table>
</div>
    @endsection
