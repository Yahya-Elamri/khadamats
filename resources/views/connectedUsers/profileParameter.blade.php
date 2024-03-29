@extends('connectedUsers.master')
@section('contents')
@foreach($UserData as $data)
<div class="w-full mx-auto h-screen flex items-start flex-col justify-center">
    <div class="container flex mx-auto justify-between items-start border border-[#d5e0d5] h-[90%] p-20 rounded-xl my-10">
        <div class="w-[30%] flex flex-col gap-6 p-4 mx-10">
            <h1 class="text-3xl poppins-regular">Paramèter</h1>
            <ul class="flex items-start flex-col gap-3">
                <a href="/{{ $data->username }}/parameter/informationpersonnelle" class="{{ request()->is($data->username .'/parameter/informationpersonnelle') ? 'bg-slate-300' : 'bg-transparent' }} hover:bg-slate-300 h-16 active:bg-slate-300 px-4 poppins-regular cursor-pointer transition w-full rounded-xl flex items-center">
                    <li class="text-xl poppins-regular flex items-center gap-2">
                        <span>@include('icons.identity' , ['width'=>'40px'])</span> 
                        Informations Personnelles
                    </li>
                </a>
                <a href="/{{ $data->username }}/parameter/informationsprofessionnels" class="{{ request()->is($data->username .'/parameter/informationsprofessionnels') ? 'bg-slate-300' : 'bg-transparent' }} hover:bg-slate-300 active:bg-slate-300 h-16 px-4 cursor-pointer transition w-full rounded-xl text-xl flex items-center">
                <li class="text-xl poppins-regular flex items-center gap-2">
                        <span>@include('icons.plan' , ['width'=>'30px'])</span> 
                        Informations Professionnels
                    </li>
                </a>
                <a href="/{{ $data->username }}/parameter/securite" class="{{ request()->is($data->username .'/parameter/securite') ? 'bg-slate-300' : 'bg-transparent' }} hover:bg-slate-300 h-16 px-4 active:bg-slate-300 cursor-pointer transition w-full rounded-xl text-xl flex items-center">
                    <li class="text-xl poppins-regular flex items-center gap-2">
                        <span>@include('icons.lock' , ['width'=>'30px'])</span>
                        Sécurité
                    </li>
                </a>
                <a href="/{{ $data->username }}/parameter/plus"  class="{{ request()->is($data->username .'/parameter/plus') ? 'bg-slate-300' : 'bg-transparent' }} hover:bg-slate-300 h-16 px-4 active:bg-slate-300 cursor-pointer transition w-full rounded-xl text-xl flex items-center">
                    <li class="text-xl poppins-regular flex items-center gap-2">
                        <span>@include('icons.more' , ['width'=>'40px'])</span> 
                        Plus
                    </li>
                </a>
            </ul>
        </div>
        <div class="w-[70%] border-l border-[#d5e0d5] px-20 py-4">
            @yield('content')
        </div>
    </div>
</div>
@endforeach
@endsection
