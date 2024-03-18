@extends('connectedUsers.master')
@section('contents')
<h1>
    @foreach ($allUsers as $user)
        <div>{{ $user->nom }}</div>
    @endforeach
</h1>
@endsection