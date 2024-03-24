@extends('connectedUsers.master')
@section('contents')
@foreach($User as $data)
    <div class="container flex items-start gap-5 mx-auto my-20 border rounded-xl border-[#d5e0d5] p-4">
        <div class="w-[30%] flex flex-col items-start gap-5 border-r border-[#d5e0d5]">
            <div class="w-[100px] h-[100px] relative md:w-[150px] md:h-[150px] bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $data->profile_image }})">
                @if ($data->availabilite == 0)
                            <span class="w-6 h-6 absolute left-2 top-2 rounded-full border-4 border-white bg-slate-400"></span>
                        @else
                            <span class="w-6 h-6 absolute left-2 top-2 rounded-full border-4 border-white bg-green-600"></span>
                        @endif
            </div>
            <div class="px-5 py-4 ">
                <ul class="flex gap-2 flex-col items-start">
                    <h1 class="poppins-regular text-xl md:text-2xl capitalize">{{ $data->nom }} {{ $data->prenom }}</h1>
                    @if ($data->telephone == NULL)
                        <li class="hidden">
                        </li>
                    @else
                        <li class="poppins-regular text-xl md:text-2xl capitalize flex items-center gap-2">
                            <span>@include('icons.phone',['width'=>'30px'])</span>
                            {{ $data->telephone }}
                        </li> 
                    @endif
                    <li class="poppins-regular text-xl md:text-2xl capitalize flex items-center gap-2">
                        <span>@include('icons.email',['width'=>'30px'])</span>
                        {{ $data->adresse }}
                    </li>
                    <li class="poppins-regular text-xl md:text-2xl capitalize">{{ $data->email }}</li>
                    <li>
                        @if ($data->availabilite == 0)
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full border border-black"></span>
                                <span class="poppins-regular text-xl md:text-2xl capitalize">indisponible</span>
                            </div>
                        @else
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full border border-black bg-green-600"></span>
                                <span class="poppins-regular text-xl md:text-2xl capitalize">disponible</span>
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-[70%] flex flex-col items-start gap-8">
            <div class="w-full">
                <p>
                    @if ($data->proffession == NULL)
                    <div class="flex items-center gap-3">
                        </div>
                        @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Proffesion :</h1>
                        <span class="poppins-regular text-xl">{{ $data->proffession }}</span>
                    @endif
                </p>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->experience == NULL)
                        <div class="flex items-center gap-3">
                        </div>
                    @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Experience :</h1>
                        <span class="poppins-regular text-xl">{{ $data->experience }}</span>
                    @endif
                </p>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->description == NULL)
                        <div class="flex items-center gap-3">
                        
                        </div>
                        @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Description :</h1>
                        <span class="poppins-regular text-xl">{{ $data->description }}</span>
                    @endif
                </p>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->diplome == NULL)
                        <div class="flex items-center gap-3">
                        </div>
                    @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Diplome :</h1>
                        <span class="poppins-regular text-xl">{{ $data->diplome }}</span>
                    @endif
                </p>
            </div>
            <div class="w-full">
                    @if ($data->categorie == NULL)
                        <div class="flex items-center gap-3">
                        </div>
                        @else
                        <div class="flex flex-col items-start gap-2">
                            <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Categories :</h1>
                            <span class="poppins-regular text-xl"><?php
                                $words = collect(explode(',', $data->categorie))->map(function ($item) {
                                     return trim($item);
                                });?>
                                <div class="flex items-center gap-3">
                                    @foreach($words as $word)
                                        <h1 class="rounded-xl poppins-regular text-xl bg-emerald-50 border border-[#d5e0d5] px-4 shadow-md py-1">{{$word}}</h1>
                                    @endforeach
                                </div>
                            </span>
                        </div>
                    @endif
            </div>
        </div>
    </div>
@endforeach
@endsection