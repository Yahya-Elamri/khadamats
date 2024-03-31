@extends('connectedUsers.master')
@section('contents')
<div class="container mx-auto my-20 flex items-start justify-start px-20">
    @foreach ($Posts as $user)
        <div class="w-[30%] px-10 flex flex-col gap-5 items-start">
            <div class="flex items-center gap-3">
                <div class="w-[60px] h-[60px] relative md:w-[100px] md:h-[100px] bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $user->userCreation->profile_image }})"></div>
                <h1 class="poppins-regular text-xl">{{ $user->userCreation->prenom }} {{ $user->userCreation->nom }}</h1>
            </div>
            <div class="flex flex-col gap-1 items-start">
                <div class="flex items-center gap-3">
                    <h1 class="poppins-regular text-xl">Date </h1>
                    @if($user->created_at->format('d:m:y') == now()->format('d:m:y'))
                                    @if(now()->format('H') - $user->created_at->format('H') > 0)
                                        <p class="poppins-regular text-xl text-slate-500">Posted il y a {{ now()->format('H') - $user->created_at->format('H') }} heure</p >
                                    @elseif(now()->format('i') - $user->created_at->format('i') > 0)
                                        <p class="poppins-regular text-xl text-slate-500">Posted il y a {{ now()->format('i') - $user->created_at->format('i') }} minute</p >
                                    @else
                                        <p class="poppins-regular text-xl text-slate-500">Posted il y a {{ now()->format('s') - $user->created_at->format('s')}} Second</p >
                                    @endif
                                @else
                                    <p class="poppins-regular text-xl text-slate-500">Posted il y a {{ now()->format('d') - $user->created_at->format('d') }} jour</p >
                                @endif
                </div>
                <div class="flex items-center gap-3">
                    <h1 class="poppins-regular text-xl">Adresse</h1>
                    <h1 class="poppins-regular text-xl text-slate-500 truncate">{{ $user->adresse }}</h1>
                </div>
                <div class="flex items-center gap-3">
                    <h1 class="poppins-regular text-xl">Proffession</h1>
                    <h1 class="poppins-regular text-xl text-slate-500 truncate">{{ $user->proffession }}</h1>
                </div>
            </div>
            <a href="/profile/{{$user->userCreation->username}}" class="poppins-regular text-center bg-[#44baae] px-4 py-2 rounded-xl text-white hover:bg-[#286d66] w-full">plus d'informations</a>
        </div>
        <div class="flex flex-col items-start justify-start w-[70%] gap-5">
            <a href="/post/{{ $user->id }}">
                <div class="flex flex-col items-start w-full justify-start gap-6 border-t border-[#d5e0d5] hover:bg-green-50 cursor-pointer px-4 py-7">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2">
                            
                            <h1 class="poppins-regular text-3xl capitalize">{{ $user->title }}</h1>
                        </div>
                    </div>
                    <p class="poppins-regular text-lg w-full">{{ $user->description }}</p>
                    <span class=""><?php
                                $words = collect(explode(',', $user->categorie))->map(function ($item) {
                                    return trim($item);
                                });?>
                                <div class="flex items-center gap-3">
                                    @foreach($words as $word)
                                        <h1 class="poppins-semibold text-md border border-[#d5e0d5] bg-emerald-50 px-6 py-1 rounded-xl capitalize">{{$word}}</h1>
                                    @endforeach
                                </div>
                    </span>
                </div>
            </a>
            <div class="flex flex-col gap-5 border-t border-[#d5e0d5] hover:bg-green-50 px-4 py-7 w-full">
                <h1 class="poppins-regular text-3xl capitalize">Ajoutez votre offre maintenant</h1>
                <form action="" class="flex flex-col gap-4">
                    <div class="w-full flex flex-col gap-2">
                        <label class="poppins-regular text-lg" for="">Le prix auquel vous souhaitez réaliser ce travail</label>
                        <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl w-3/4" type="text" placeholder="Prix">
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="poppins-regular text-lg" for="">La durée</label>
                        <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl w-3/4" type="text" placeholder="durée">
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="poppins-regular text-lg" for="description">Détails de votre travail</label>
                        <textarea class="border border-[#d5e0d5] px-6 py-2 rounded-xl w-3/4" rows="8" cols="50" id="description" name="description" placeholder="Description"></textarea>
                    </div>
                    <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-xl text-white hover:bg-[#286d66] w-2/6">Envoyez votre offre</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection