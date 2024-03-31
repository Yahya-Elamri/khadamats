@extends('connectedUsers.master')
@section('contents')
<div>
    @foreach($Posts as $Post)
    {{$Post->title}} <br>
    @endforeach
</div>
@endsection