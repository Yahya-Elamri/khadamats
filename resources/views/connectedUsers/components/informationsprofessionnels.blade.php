@extends('connectedUsers.profileParameter')
@section('content')
@foreach($UserData as $data)
        <form action="/updateuser" method="post" class="w-[90%] lg:w-[50%] flex flex-col gap-5 justify-between items-start">
            @csrf
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="proffession">Proffession</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="proffession" name="proffession" placeholder="{{ $data->proffession ?? 'Ajouter votre Proffession'}}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="experience">Experience</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="experience" name="experience" placeholder="{{ $data->experience ?? 'Ajouter votre Experience' }}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="diplome">Diplome</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="diplome" name="diplome" placeholder="{{ $data->diplome ?? 'Ajouter votre Diplome' }}">
            </div>
            <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Mettre à jour votre profile</button>
        </form>
@endforeach
@endsection