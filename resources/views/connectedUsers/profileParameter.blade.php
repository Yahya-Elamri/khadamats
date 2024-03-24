@extends('connectedUsers.master')
@section('contents')
@foreach($UserData as $data)
<div class="container flex mx-auto justify-between items-start border border-[#d5e0d5] p-4 rounded-xl my-10">
    <div class="w-[30%] flex flex-col gap-6 p-4">
        <h1 class="text-3xl poppins-regular">Paramèter</h1>
        <ul class="flex items-start flex-col">
            <a href="/{{ $data->username }}/parameter/informationpersonnelle" class="hover:bg-slate-300 h-16 px-4 poppins-regular cursor-pointer transition w-full rounded-xl flex items-center">
                <li class="text-xl poppins-regular flex items-center gap-2">
                    <span>@include('icons.identity' , ['width'=>'40px'])</span> 
                    Informations Personnelles 
                </li>
            </a>
            <a href="/{{ $data->username }}/parameter/informationsprofessionnels" class="hover:bg-slate-300 h-16 px-4 cursor-pointer transition w-full rounded-xl text-xl flex items-center">
            <li class="text-xl poppins-regular flex items-center gap-2">
                    <span>@include('icons.plan' , ['width'=>'30px'])</span> 
                    Informations Professionnels
                </li>
            </a>
            <a href="/{{ $data->username }}/parameter/securite" class="hover:bg-slate-300 h-16 px-4 cursor-pointer transition w-full rounded-xl text-xl flex items-center">
                <li class="text-xl poppins-regular flex items-center gap-2">
                    <span>@include('icons.lock' , ['width'=>'30px'])</span>
                    Sécurité
                </li>
            </a>
            <a href="/{{ $data->username }}/parameter/plus"  class="hover:bg-slate-300 h-16 px-4 cursor-pointer transition w-full rounded-xl text-xl flex items-center">
                <li class="text-xl poppins-regular flex items-center gap-2">
                    <span>@include('icons.more' , ['width'=>'40px'])</span> 
                    Plus
                </li>
            </a>
        </ul>
    </div>
    <div class="w-[70%] border-l border-[#d5e0d5] px-10 py-4">
        @yield('content')
    </div>
</div>
@endforeach
@endsection
