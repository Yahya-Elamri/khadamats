@extends('connectedUsers.master')
@section('contents')
<div class="w-full">
    <div class="container mt-10 mx-auto px-20 flex items-center gap-5">
        <form action="/home/travaux" method="GET" class="w-full flex items-center gap-3">
            <div class="sm:flex items-center hidden w-[70%] md:w-[50%]  justify-between border-[#d5e0d5] border-[1px] rounded-full px-4 py-2">
                <div class="w-[25px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="full" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img"><path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M10.688 18.377a7.688 7.688 0 100-15.377 7.688 7.688 0 000 15.377zm5.428-2.261L21 21"></path></svg>
                </div>
                <input class="focus:border-none focus:outline-none w-[90%] bg-transparent" name="search" type="text" placeholder="Que Recherchez-vous">
            </div>
            <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Recherchez</button>
        </form>
    </div>
    <div class="container mx-auto my-10 flex items-start justify-start px-20">
        <div class="w-[30%]">
            <form action="/home/travaux" method="GET" class="flex flex-col gap-5 px-6">
                <div class="flex flex-col gap-3">
                    <h1 class="poppins-regular text-2xl">Categories</h1>
                    <div class="flex flex-col gap-1">
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services de Santé et de Soins" value="Services de Santé et de Soins">  
                            <label for="Services de Santé et de Soins" class="poppins-regular text-md">Services de Santé et de Soins</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services Informatique et Technologique" value="Services Informatique et Technologique">   
                            <label for="Services Informatique et Technologique" class="poppins-regular text-md">Services Informatique et Technologique</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services éducatif et de formation" value="Services éducatif et de formation">   
                            <label for="" class="poppins-regular text-md">Services éducatif et de formation</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services de transport et de livraison" value="Services de transport et de livraison">   
                            <label for="" class="poppins-regular text-md">Services de transport et de livraison</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services de maintenace et de reparation" value="Services de maintenace et de reparation">   
                            <label for="" class="poppins-regular text-md">Services de maintenace et de reparation</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services domestiques / menage" value="Services domestiques / menage">   
                            <label for="" class="poppins-regular text-md">Services domestiques / menage</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services de construction" value="Services de construction">   
                            <label for="" class="poppins-regular text-md">Services de construction</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services financieres et comptables" value="Services financieres et comptables">   
                            <label for="" class="poppins-regular text-md">Services financieres et comptables</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services juridiques et legau" value="Services juridiques et legau">   
                            <label for="" class="poppins-regular text-md">Services juridiques et legau</label>
                        </div>
                        <div>
                            <input type="checkbox" name="categorie[]" id="Services artisanaux" value="Services artisanaux">   
                            <label for="" class="poppins-regular text-md">Services artisanaux</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <h1 class="poppins-regular text-2xl">Proffession</h1>
                    <input type="text" placeholder="Proffession" name="proffession" class="border border-[#d5e0d5] px-6 py-2 rounded-xl">
                </div>
                <div class="flex flex-col gap-3">
                    <h1 class="poppins-regular text-2xl">Adresse</h1>
                    <input type="text" placeholder="Adresse" name="adresse" class="border border-[#d5e0d5] px-6 py-2 rounded-xl">
                </div>
                <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Appliquer la Recherche</button>
            </form>
        </div>
        <div class="flex flex-col items-start justify-start w-[70%]">
            @foreach ($allUsers as $user)
            <a class="w-full" href="/post/{{ $user->id }}">
                <div class="flex flex-col items-start w-full justify-start gap-6 border-t border-[#d5e0d5] hover:bg-green-50 cursor-pointer px-4 py-7">
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2">
                            @if($user->created_at->format('d:m:y') == now()->format('d:m:y'))
                                @if(now()->format('H') - $user->created_at->format('H') > 0)
                                    <p class="poppins-regular text-sm text-slate-500">Posted il y a {{ now()->format('H') - $user->created_at->format('H') }} heure</p >
                                @elseif(now()->format('i') - $user->created_at->format('i') > 0)
                                    <p class="poppins-regular text-sm text-slate-500">Posted il y a {{ now()->format('i') - $user->created_at->format('i') }} minute</p >
                                @else
                                    <p class="poppins-regular text-sm text-slate-500">Posted il y a {{ now()->format('s') - $user->created_at->format('s')}} Second</p >
                                @endif
                            @elseif(now()->format('m') == $user->created_at->format('m'))
                                <p class="poppins-regular text-sm text-slate-500">Posted il y a {{ now()->format('d') - $user->created_at->format('d') }} jour</p >
                            @else
                                <p class="poppins-regular text-sm text-slate-500">Posted il y a {{ now()->format('m') - $user->created_at->format('m') }} mois</p >
                            @endif
                            <h1 class="poppins-regular text-3xl capitalize">{{ $user->title }}</h1>
                        </div>
                        <div class="flex items-center justify-start gap-10">
                            <h1 class="poppins-semibold text-md border border-[#d5e0d5] bg-emerald-50 px-6 py-1 rounded-xl capitalize">{{ $user->proffession }}</h1>
                            <h1 class="poppins-regular text-md text-slate-500 flex items-center gap-1 capitalize">
                                <span>@include('icons.gps',['width'=>'20px','color'=>'#748BA7'])</span>
                                {{ $user->adresse }}
                            </h1>
                        </div>
                    </div>
                    <p class="poppins-regular text-lg w-full overflow-hidden">{{ $user->description }}</p>
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
            @endforeach
        </div>
    </div>
</div>
@endsection