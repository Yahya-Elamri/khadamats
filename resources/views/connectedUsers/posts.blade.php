@extends('connectedUsers.master')
@section('head_content')
<link rel="shortcut icon" href="/assets/tag.png" type="image/x-icon">
@endsection
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
                            @elseif(now()->format('m') == $user->created_at->format('m'))
                                <p class="poppins-regular text-xl text-slate-500">Posted il y a {{ now()->format('d') - $user->created_at->format('d') }} jour</p >
                            @else
                                <p class="poppins-regular text-xl text-slate-500">Posted il y a {{ now()->format('m') - $user->created_at->format('m') }} mois</p >
                            @endif
                </div>
                <div class="flex items-center gap-3">
                    <h1 class="poppins-regular text-xl">Adresse</h1>
                    <h1 class="poppins-regular text-xl text-slate-500">{{ $user->adresse }}</h1>
                </div>
                <div class="flex items-center gap-3">
                    <h1 class="poppins-regular text-xl">Proffession</h1>
                    <h1 class="poppins-regular text-xl text-slate-500">{{ $user->proffession }}</h1>
                </div>
            </div>
            <a href="/profile/{{$user->userCreation->username}}" class="poppins-regular text-center bg-[#44baae] px-4 py-2 rounded-xl text-white hover:bg-[#286d66] w-full">plus d'informations</a>
        </div>
        <div class="flex flex-col items-start justify-start w-[70%]">
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
            @if($user->userCreation->id != session()->get('id'))
            @php
                $offred = false;
                foreach($Offers as $tempoffer){
                    if($tempoffer->userCreation->id == session()->get('id')){
                        $offred = true;
                        break;
                    }
                }
            @endphp
            @if($offred)
            <h1 class="poppins-regular text-3xl capitalize px-4 py-7 border-t border-[#d5e0d5] w-full">les offres actuelles</h1>
            <div class="w-full">
                @foreach($Offers as $offer)
                <div class="flex flex-col items-start gap-3 border-t border-[#d5e0d5] hover:bg-green-50 px-4 py-7 w-[90%] first:border-none">
                    <a href="/profile/{{$offer->userCreation->username}}?post_id={{ $user->id }}">
                        <div class="flex items-center gap-3">
                            <div class="w-[60px] h-[60px] relative bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $offer->userCreation->profile_image }})">
                            @if ($offer->userCreation->availabilite == 0)
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-slate-400"></span>
                            @else
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-green-600"></span>
                            @endif
                            </div>
                            <div class="flex flex-col items-start">
                                <div class="flex items-center gap-2">
                                    <h1 class="poppins-regular text-lg leading-2">{{$offer->userCreation->prenom}} {{$offer->userCreation->nom}}</h1>
                                    <h1 class="poppins-regular text-md leading-3 text-slate-500 flex items-center gap-1 capitalize">
                                        <span>@include('icons.gps',['width'=>'20px','color'=>'#748BA7'])</span>
                                        {{ $offer->userCreation->adresse }}
                                    </h1>
                                </div>
                                <div class="flex items-center gap-3">
                                    <h1 class="poppins-regular text-lg leading-2">{{$offer->userCreation->proffession}}</h1>
                                    @if($offer->created_at->format('d:m:y') == now()->format('d:m:y'))
                                        @if(now()->format('H') - $offer->created_at->format('H') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('H') - $offer->created_at->format('H') }} heure</p >
                                        @elseif(now()->format('i') - $offer->created_at->format('i') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('i') - $offer->created_at->format('i') }} minute</p >
                                        @else
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('s') - $offer->created_at->format('s')}} Second</p >
                                        @endif
                                        @elseif(now()->format('m') == $offer->created_at->format('m'))
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('d') - $offer->created_at->format('d') }} jour</p >
                                        @else
                                        <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('m') - $offer->created_at->format('m') }} mois</p >
                                    @endif
                                </div>
                            </div>
                        </div>
                        <p class="poppins-regular text-lg w-full">{{ $offer->description }}</p>
                        <div class="flex items-center gap-4 w-full">
                            <p class="poppins-regular text-lg w-fit">Prix {{ $offer->prix }} Dh</p>
                            <p class="poppins-regular text-lg w-fit">Dans {{ $offer->duree }} Minute</p>
                        </div>
                    </a>
                </div>
                @endforeach   
            </div>
            @else
            <div class="flex flex-col gap-5 border-t border-[#d5e0d5] hover:bg-green-50 px-4 py-7 w-full">
                <h1 class="poppins-regular text-3xl capitalize">Ajoutez votre offre maintenant</h1>
                <form action="/addnewoffer/{{ $user->id }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div class="w-full flex flex-col gap-2">
                        <label class="poppins-regular text-lg" for="prix">Le prix auquel vous souhaitez réaliser ce travail</label>
                        <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl w-3/4" type="number" id="prix" name="prix" placeholder="Prix">
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="poppins-regular text-lg" for="duree">La durée</label>
                        <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl w-3/4" type="number" id="duree" name="duree" placeholder="durée">
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <label class="poppins-regular text-lg" for="description">Détails de votre travail</label>
                        <textarea class="border border-[#d5e0d5] px-6 py-2 rounded-xl w-3/4" rows="8" cols="50" id="description" name="description" placeholder="Description"></textarea>
                    </div>
                    <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-xl text-white hover:bg-[#286d66] w-2/6">Envoyez votre offre</button>
                </form>
            </div>
            <h1 class="poppins-regular text-3xl capitalize px-4 py-7 border-t border-[#d5e0d5] w-full">les offres actuelles</h1>
            <div class="w-full">
                @foreach($Offers as $offer)
                <div class="flex flex-col items-start gap-3 border-t border-[#d5e0d5] hover:bg-green-50 px-4 py-7 w-[90%] first:border-none">
                    <a href="/profile/{{$offer->userCreation->username}}?post_id={{ $user->id }}">
                        <div class="flex items-center gap-3">
                            <div class="w-[60px] h-[60px] relative bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $offer->userCreation->profile_image }})">
                            @if ($offer->userCreation->availabilite == 0)
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-slate-400"></span>
                            @else
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-green-600"></span>
                            @endif
                            </div>
                            <div class="flex flex-col items-start">
                                <div class="flex items-center gap-2">
                                    <h1 class="poppins-regular text-lg leading-2">{{$offer->userCreation->prenom}} {{$offer->userCreation->nom}}</h1>
                                    <h1 class="poppins-regular text-md leading-3 text-slate-500 flex items-center gap-1 capitalize">
                                        <span>@include('icons.gps',['width'=>'20px','color'=>'#748BA7'])</span>
                                        {{ $offer->userCreation->adresse }}
                                    </h1>
                                </div>
                                <div class="flex items-center gap-3">
                                    <h1 class="poppins-regular text-lg leading-2">{{$offer->userCreation->proffession}}</h1>
                                    @if($offer->created_at->format('d:m:y') == now()->format('d:m:y'))
                                        @if(now()->format('H') - $offer->created_at->format('H') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('H') - $offer->created_at->format('H') }} heure</p >
                                        @elseif(now()->format('i') - $offer->created_at->format('i') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('i') - $offer->created_at->format('i') }} minute</p >
                                        @else
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('s') - $offer->created_at->format('s')}} Second</p >
                                        @endif
                                        @elseif(now()->format('m') == $offer->created_at->format('m'))
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('d') - $offer->created_at->format('d') }} jour</p >
                                        @else
                                        <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('m') - $offer->created_at->format('m') }} mois</p >
                                    @endif
                                </div>
                            </div>
                        </div>
                        <p class="poppins-regular text-lg w-full">{{ $offer->description }}</p>
                        <div class="flex items-center gap-4 w-full">
                            <p class="poppins-regular text-lg w-fit">Prix {{ $offer->prix }} Dh</p>
                            <p class="poppins-regular text-lg w-fit">Dans {{ $offer->duree }} Minute</p>
                        </div>
                    </a>
                </div>
                @endforeach   
            </div>
            @endif
            @else
            <h1 class="poppins-regular text-3xl capitalize px-4 py-7 border-t border-[#d5e0d5] w-full">les offres actuelles</h1>
            <div class="w-full">
                @foreach($Offers as $offer)
                <div class="flex flex-col items-start gap-3 border-t border-[#d5e0d5] hover:bg-green-50 px-4 py-7 w-[90%] first:border-none">
                    <a href="/profile/{{$offer->userCreation->username}}?post_id={{ $user->id }}">
                        <div class="flex items-center gap-3">
                            <div class="w-[60px] h-[60px] relative bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $offer->userCreation->profile_image }})">
                            @if ($offer->userCreation->availabilite == 0)
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-slate-400"></span>
                            @else
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-green-600"></span>
                            @endif
                            </div>
                            <div class="flex flex-col items-start">
                                <div class="flex items-center gap-2">
                                    <h1 class="poppins-regular text-lg leading-2">{{$offer->userCreation->prenom}} {{$offer->userCreation->nom}}</h1>
                                    <h1 class="poppins-regular text-md leading-3 text-slate-500 flex items-center gap-1 capitalize">
                                        <span>@include('icons.gps',['width'=>'20px','color'=>'#748BA7'])</span>
                                        {{ $offer->userCreation->adresse }}
                                    </h1>
                                </div>
                                <div class="flex items-center gap-3">
                                    <h1 class="poppins-regular text-lg leading-2">{{$offer->userCreation->proffession}}</h1>
                                    @if($offer->created_at->format('d:m:y') == now()->format('d:m:y'))
                                        @if(now()->format('H') - $offer->created_at->format('H') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('H') - $offer->created_at->format('H') }} heure</p >
                                        @elseif(now()->format('i') - $offer->created_at->format('i') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('i') - $offer->created_at->format('i') }} minute</p >
                                        @else
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('s') - $offer->created_at->format('s')}} Second</p >
                                        @endif
                                        @elseif(now()->format('m') == $offer->created_at->format('m'))
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('d') - $offer->created_at->format('d') }} jour</p >
                                        @else
                                        <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('m') - $offer->created_at->format('m') }} mois</p >
                                    @endif
                                </div>
                            </div>
                        </div>
                        <p class="poppins-regular text-lg w-full">{{ $offer->description }}</p>
                        <div class="flex items-center gap-4 w-full">
                            <p class="poppins-regular text-lg w-fit">Prix {{ $offer->prix }} Dh</p>
                            <p class="poppins-regular text-lg w-fit">Dans {{ $offer->duree }} Minute</p>
                        </div>
                    </a>
                </div>
                @endforeach   
            </div>
            @endif
        </div>
    @endforeach
</div>
@endsection