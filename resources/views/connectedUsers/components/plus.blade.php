@extends('connectedUsers.profileParameter')
@section('content')
@foreach($UserData as $data)
        <form action="/updateuser" method="post" class="w-full lg:w-[70%] flex flex-col gap-5 justify-between items-start" enctype="multipart/form-data">
            <h1 class="poppins-regular text-2xl mb-5 underline">Plus</h1>
            @csrf
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="description">Description</label>
                <textarea class="border border-[#d5e0d5] px-6 py-2 rounded-xl" rows="8" cols="50" id="description" name="description" placeholder="Changer votre Description"></textarea>
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg">Image de Profile</label>
                <label class="poppins-regular w-fit bg-[#44baae] px-4 py-2 rounded-xl text-white cursor-pointer hover:bg-[#286d66]" for="image">Ajouter votre Image de Profile</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl hidden" type="file" id="image" name="image" placeholder="{{ $data->email ?? 'Ajouter votre email'}}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="categorie">Categories</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="categorie" name="categorie" placeholder="{{ $data->categorie ?? 'Ajouter votre categories' }}">
            </div>
            <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Mettre à jour votre profile</button>
        </form>
@endforeach
@endsection