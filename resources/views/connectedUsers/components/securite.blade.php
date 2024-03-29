@extends('connectedUsers.profileParameter')
@section('content')
@foreach($UserData as $data)
        <form action="/updateuser" method="post" class="w-full lg:w-[70%] flex flex-col gap-5 justify-between items-start">
            <h1 class="poppins-regular text-2xl mb-5 underline">Sécurité</h1>
            @csrf
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="email">Email</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="email" id="email" name="email" placeholder="{{ $data->email ?? 'Ajouter votre email'}}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="username">Username</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="username" name="username" placeholder="{{ $data->username ?? 'Ajouter votre Username' }}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="password">Mot de Passe</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="password" id="password" name="password" placeholder="Changer votre Mot de Passe">
            </div>
            <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Mettre à jour votre profile</button>
        </form>
@endforeach
@endsection