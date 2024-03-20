@extends('connectedUsers.master')
@section('contents')
@foreach($User as $data)
    <div class="container flex items-start gap-5 mx-auto my-20 ">
        <div class="w-[30%] flex flex-col items-center gap-5">
            <div class="w-[100px] h-[100px] md:w-[250px] md:h-[250px] bg-cover bg-center rounded-full border border-[#d5e0d5]" style="background-image: url(/assets/{{ $data->profile_image }})">
            </div>
            <div class="px-5 py-4 ">
                <ul class="flex gap-2 flex-col items-start">
                    <li class="poppins-regular text-xl md:text-2xl capitalize">{{ $data->username }}</li>
                    <li class="poppins-regular text-xl md:text-2xl capitalize">
                        @if ($data->telephone == NULL)
                            <div class="flex items-center gap-3">
                                
                            </div>
                        @else
                            {{ $data->telephone }}
                        @endif
                    </li>
                    <li class="poppins-regular text-xl md:text-2xl capitalize">{{ $data->adresse }}</li>
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
            <div>
                <h1 class="poppins-regular text-xl md:text-2xl uppercase">{{ $data->nom }} {{ $data->prenom }}</h1>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->description == NULL)
                    <div class="flex items-center gap-3">
                        
                        </div>
                        @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Description :</h1>
                        {{ $data->description }}
                    @endif
                </p>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->Categories == NULL)
                    <div class="flex items-center gap-3">
                        </div>
                        @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Categories :</h1>
                        {{ $data->Categories }}
                    @endif
                </p>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->Proffesion == NULL)
                    <div class="flex items-center gap-3">
                        </div>
                        @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Proffesion :</h1>
                        {{ $data->Proffesion }}
                    @endif
                </p>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->Diplome == NULL)
                        <div class="flex items-center gap-3">
                        </div>
                    @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Diplome :</h1>
                        {{ $data->Diplome }}
                    @endif
                </p>
            </div>
            <div class="w-full">
                <p>
                    @if ($data->Experience == NULL)
                        <div class="flex items-center gap-3">
                        </div>
                    @else
                        <h1 class="w-full poppins-regular text-xl md:text-2xl uppercase">Experience :</h1>
                        {{ $data->Experience }}
                    @endif
                </p>
            </div>
        </div>
    </div>
@endforeach
@endsection