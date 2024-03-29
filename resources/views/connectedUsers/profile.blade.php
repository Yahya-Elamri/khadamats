@extends('connectedUsers.master')
@section('contents')
@foreach($UserData as $data)
<div class="w-full mx-auto h-[85vh] flex items-start flex-col justify-center">
    <div class="container flex items-start gap-5 mx-auto my-20 border border-[#d5e0d5] p-20 rounded-xl">
        <div class="w-[30%] flex flex-col items-start gap-3 ">
            <div class="w-[100px] h-[100px] relative md:w-[150px] md:h-[150px] bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $data->profile_image }})">
                @if ($data->availabilite == 0)
                    <span class="w-6 h-6 absolute left-2 top-2 rounded-full border-4 border-white bg-slate-400"></span>
                @else
                    <span class="w-6 h-6 absolute left-2 top-2 rounded-full border-4 border-white bg-green-600"></span>
                @endif
                <a href="/{{ $data->username }}/parameter/plus" class="absolute bottom-0 right-0 p-2 shadow-md bg-white rounded-full border border-[#d5e0d5]">@include('icons.pen',['width' => '30px','style' =>'','color'=>'#37A34A'])</a>
            </div>
            <div class="px-5 py-4 ">
                <ul class="flex gap-4 flex-col items-start">
                    <h1 class="poppins-regular text-xl md:text-2xl capitalize">{{ $data->nom }} {{ $data->prenom }}</h1>
                    <li class="poppins-regular text-xl md:text-2xl capitalize flex items-center gap-2">
                        <span>@include('icons.email',['width'=>'30px'])</span>
                        {{ $data->email }}
                    </li>
                    <li class="poppins-regular text-xl md:text-2xl capitalize">
                        @if ($data->telephone == NULL)
                            <div class="flex items-center gap-3">
                                <span>ajouter numero de telephone</span>
                                <a href="/{{ $data->username }}/parameter/informationpersonnelle">@include('icons.pen',['width' => '20px','style' =>'','color'=>'#000000'])</a>
                            </div>
                        @else
                            <span class="poppins-regular text-xl md:text-2xl capitalize flex items-center gap-2">
                                <span>@include('icons.phone',['width'=>'30px'])</span>
                                {{ $data->telephone }}
                            </span> 
                        @endif
                    </li>
                    <li class="poppins-regular text-xl md:text-2xl capitalize flex items-center gap-2">
                        <span>@include('icons.gps',['width'=>'30px','color'=>'#000000'])</span>
                        {{ $data->adresse }}
                    </li>
                    <li>
                        @if ($data->availabilite == 0)
                            <div class="flex items-center gap-3">
                                <span class="">@include('icons.clock',['width'=>'30px'])</span>
                                <span class="poppins-regular text-xl md:text-2xl capitalize">indisponible</span>
                            </div>
                        @else
                            <div class="flex items-center gap-3">
                                <span class="">@include('icons.clock',['width'=>'30px'])</span>
                                <span class="poppins-regular text-xl md:text-2xl capitalize">disponible</span>
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-[70%] flex flex-col items-start gap-8 border-l border-[#d5e0d5] px-10">
            <div class="w-full">
                <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Proffesion :</h1>
                <p>
                    @if ($data->proffession == NULL)
                        <div class="flex items-center gap-3">
                            <span>ajouter votre Proffesion</span>
                            <a href="/{{ $data->username }}/parameter/informationsprofessionnels">@include('icons.pen',['width' => '20px','style' =>'','color'=>'#000000'])</a>
                        </div>
                    @else
                        <span class="poppins-regular text-xl">{{ $data->proffession }}</span>
                    @endif
                </p>
            </div>
            <div class="w-full">
                <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Experience :</h1>
                <p>
                    @if ($data->experience == NULL)
                        <div class="flex items-center gap-3">
                            <span>ajouter votre Experience</span>
                            <a href="/{{ $data->username }}/parameter/informationsprofessionnels"">@include('icons.pen',['width' => '20px','style' =>'','color'=>'#000000'])</a>
                        </div>
                    @else
                        <span class="poppins-regular text-xl">{{ $data->experience }}</span>
                    @endif
                </p>
            </div>
            <div class="w-full">
                <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Description :</h1>
                <p >
                    @if ($data->description == NULL)
                        <div class="flex items-center gap-3">
                            <span>ajouter votre description</span>
                            <a href="/{{ $data->username }}/parameter/plus">@include('icons.pen',['width' => '20px','style' =>'','color'=>'#000000'])</a>
                        </div>
                    @else
                        <span class="poppins-regular text-xl">{{ $data->description }}</span>
                    @endif
                </p>
            </div>
            <div class="w-full">
                <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Diplome :</h1>
                <p>
                    @if ($data->diplome == NULL)
                        <div class="flex items-center gap-3">
                            <span>ajouter votre Diplome</span>
                            <a href="/{{ $data->username }}/parameter/informationsprofessionnels"">@include('icons.pen',['width' => '20px','style' =>'','color'=>'#000000'])</a>
                        </div>
                    @else
                        <span class="poppins-regular text-xl">{{ $data->diplome }}</span>
                    @endif
                </p>
            </div>
                <div class="w-full flex flex-col gap-1">
                    <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Categories : </h1>
                    <p>
                        @if ($data->categorie == NULL)
                            <div class="flex items-center gap-3">
                                <span>ajouter votre Categories</span>
                                <a href="/{{ $data->username }}/parameter/plus">@include('icons.pen',['width' => '20px','style' =>'','color'=>'#000000'])</a>
                            </div>
                        @else
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
                        @endif
                    </p>
                </div>
        </div>
    </div>
</div>
@endforeach
@endsection