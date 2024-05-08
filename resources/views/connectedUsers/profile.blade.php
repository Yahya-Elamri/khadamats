@extends('connectedUsers.master')
@section('contents')
@foreach($UserData as $data)
<div class="w-full mx-auto min-h-[85vh] flex items-start flex-col justify-center">
    <div class="container flex items-start gap-32 flex-wrap lg:flex-nowrap flex-col mx-auto my-20 border border-[#d5e0d5] p-8 md:p-20 rounded-xl">
        <div class="w-full flex items-start gap-5 flex-wrap lg:flex-nowrap">
            <div class="lg:w-[30%] flex flex-col items-start gap-3 ">
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
                        <li class="poppins-regular text-xl lg:text-2xl capitalize flex items-center gap-2">
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
                        <li class="poppins-regular text-xl md:text-2xl capitalize flex items-center gap-2">
                            @if ($data->disponibilite == NULL)
                                <div class="flex items-center gap-3">
                                    <span >Disponibilite</span>
                                    <a href="/{{ $data->username }}/parameter/informationpersonnelle">@include('icons.pen',['width' => '20px','style' =>'','color'=>'#000000'])</a>
                                </div>
                            @else
                                <span class="poppins-regular text-xl md:text-2xl capitalize flex items-center gap-2">
                                    <span class="">@include('icons.clock',['width'=>'30px'])</span>
                                    {{ $data->disponibilite }}
                                </span> 
                            @endif
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="lg:w-[70%] flex flex-col items-start gap-8 border-l border-[#d5e0d5] px-10">
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
        @if ($data->cv == NULL)                            
            <div class="container mx-auto">
                <div class="max-w-lg">
                    <form method="POST" action="/updateuser" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="cv" class="block text-gray-800 text-xl poppins-regular mb-2 capitalize">ajoutez votre CV : </label>
                            <input type="file" name="cv" id="cv" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <button type="submit" class="bg-emerald-100  hover:bg-emerald-200  text-black poppins-regular py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="container mx-auto">
                <div class="max-w-lg">
                    <div class="mb-4">
                        <h1 class="text-xl poppins-regular mb-2 capitalize">cv ou diplome :</h1>
                            <iframe src="/cvs/{{ $data->cv }}" frameborder="0" width="100%" height="400" class="rounded-xl"></iframe>
                    </div>
                </div>
            </div>
        @endif
        <div class="w-full flex items-start gap-5">
            <div class="w-[30%] flex items-start gap-5 flex-col">
                <h1 class="poppins-regular text-3xl capitalize">total d'avis vérifiés</h1>
                <div class="flex items-center flex-col gap-2 w-10/12 p-20 bg-slate-200 rounded-xl">
                    @php
                        $averageRating = ($ReviewCount > 0) ? number_format($ReviewSum/$ReviewCount, 1, '.', ',') : 0;
                    @endphp
                    @if($ReviewCount > 0)
                        <h1 class="poppins-regular text-2xl">{{ number_format($averageRating, 1, '.', ',') }}/5</h1>
                    @else
                        <h1 class="poppins-regular text-2xl capitalize">0 review</h1>
                    @endif
                    <div class="flex items-start gap-1 star-rating">
                            @if($averageRating > 0 && $averageRating <= 1)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 0)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @elseif($averageRating > 1 && $averageRating <= 2)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 1)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @elseif($averageRating > 2 && $averageRating <= 3)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 2)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @elseif($averageRating > 3 && $averageRating <= 4)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 3)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @else
                                @for ($i = 0; $i < 5; $i++)
                                    <p class="">@include('icons.star')</p>
                                @endfor
                            @endif                  
                    </div>
                    <p class="poppins-regular text-2xl capitalize">avis vérifiés</p>
                </div>
                <div class="w-full">
                    @foreach($Counts as $Counts)
                        <div class="w-full flex items-center justify-canter gap-10">
                            @if($Counts->rating == 1)
                                <div class="flex items-center gap-4">
                                    <p>{{ $Counts->rating }}</p>
                                    @include('icons.star')
                                    <p>(1)</p>
                                </div>
                                <span class="w-[50%] h-3 rounded-full bg-slate-200 before:h-3 relative before:absolute before:bottom-0 before:left-0 before:bg-green-600 before:rounded-full before:w-[30%]"></span>
                            @elseif($Counts->rating == 2)
                            <div class="flex items-center gap-4">
                                <p>{{ $Counts->rating }}</p>
                                @include('icons.star')
                                <p>(1)</p>
                            </div>
                            <span class="w-[50%] h-3 rounded-full bg-slate-200 before:h-3 relative before:absolute before:bottom-0 before:left-0 before:bg-green-600 before:rounded-full before:w-[50%]"></span>
                            @elseif($Counts->rating == 3)
                            <div class="flex items-center gap-4">
                                <p>{{ $Counts->rating }}</p>
                                @include('icons.star')
                                <p>(1)</p>
                            </div>
                            <span class="w-[50%] h-3 rounded-full bg-slate-200 before:h-3 relative before:absolute before:bottom-0 before:left-0 before:bg-green-600 before:rounded-full before:w-[60%]"></span>
                            @elseif($Counts->rating == 4)
                            <div class="flex items-center gap-4">
                                <p>{{ $Counts->rating }}</p>
                                @include('icons.star')
                                <p>(1)</p>
                            </div>
                            <span class="w-[50%] h-3 rounded-full bg-slate-200 before:h-3 relative before:absolute before:bottom-0 before:left-0 before:bg-green-600 before:rounded-full before:w-[80%]"></span>
                            @else
                            <div class="flex items-center gap-4">
                                <p>{{ $Counts->rating }}</p>
                                @include('icons.star')
                                <p>(1)</p>
                            </div>
                            <span class="w-[50%] h-3 rounded-full bg-slate-200 before:h-3 relative before:absolute before:bottom-0 before:left-0 before:bg-green-600 before:rounded-full before:w-[90%]"></span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-[70%] overflow-hidden">
                <h1 class="poppins-regular text-3xl capitalize pb-6">les commentaires</h1>
                @foreach($Reviews as $Review)
                    <div class="flex flex-col items-start gap-3 border-t border-[#d5e0d5] hover:bg-green-50 px-4 py-7 w-[90%] first:border-none">
                        <div class="flex items-start justify-canter gap-1">
                            @if($Review->rating == 1)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 0)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @elseif($Review->rating == 2)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 1)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @elseif($Review->rating == 3)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 2)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @elseif($Review->rating == 4)
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i > 3)
                                        <p class="opacity-40">@include('icons.star')</p>
                                    @else
                                        <p>@include('icons.star')</p>
                                    @endif
                                @endfor
                            @else
                                @for ($i = 0; $i < 5; $i++)
                                    <p class="">@include('icons.star')</p>
                                @endfor
                            @endif
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[60px] h-[60px] relative bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $Review->userCreation->profile_image }})">
                            @if ($Review->userCreation->availabilite == 0)
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-slate-400"></span>
                            @else
                                <span class="w-6 h-6 absolute -left-1 -top-1 rounded-full border-4 border-white bg-green-600"></span>
                            @endif
                            </div>
                            <div class="flex flex-col items-start">
                                <div class="flex items-center gap-2">
                                    <h1 class="poppins-regular text-lg leading-2">{{$Review->userCreation->prenom}} {{$Review->userCreation->nom}}</h1>
                                    <h1 class="poppins-regular text-md leading-3 text-slate-500 flex items-center gap-1 capitalize">
                                        <span>@include('icons.gps',['width'=>'20px','color'=>'#748BA7'])</span>
                                        {{ $Review->userCreation->adresse }}
                                    </h1>
                                </div>
                                <div class="flex items-center gap-3">
                                    <h1 class="poppins-regular text-lg leading-2">{{$Review->userCreation->proffession}}</h1>
                                    @if($Review->created_at->format('d:m:y') == now()->format('d:m:y'))
                                        @if(now()->format('H') - $Review->created_at->format('H') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('H') - $Review->created_at->format('H') }} heure</p >
                                        @elseif(now()->format('i') - $Review->created_at->format('i') > 0)
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('i') - $Review->created_at->format('i') }} minute</p >
                                        @else
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('s') - $Review->created_at->format('s')}} Second</p >
                                        @endif
                                        @elseif(now()->format('m') == $Review->created_at->format('m'))
                                            <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('d') - $Review->created_at->format('d') }} jour</p >
                                        @else
                                        <p class="poppins-regular text-lg leading-2 text-slate-500">Posted il y a {{ now()->format('m') - $Review->created_at->format('m') }} mois</p >
                                    @endif
                                </div>
                            </div>
                        </div>
                        <p class="poppins-regular text-lg w-full">{{ $Review->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>    
    </div>
</div>
@endforeach
@endsection