@extends('connectedUsers.profileParameter')
@section('content')
@foreach($UserData as $data)
        <form action="/updateuser" method="post" class="w-[90%] lg:w-[50%] flex flex-col gap-5 justify-between items-start">
            @csrf
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="nom">Nom</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="nom" name="nom" placeholder="{{ $data->nom }}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="prenom">Prenom</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="prenom" name="prenom" placeholder="{{ $data->prenom }}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="telephone">Numero De Telephone</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="telephone" name="telephone" placeholder="{{ $data->telephone ?? 'Ajouter Numero De Telephone' }}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="adresse">Adresse</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="adresse" name="adresse" placeholder="{{ $data->adresse ?? 'Ajouter Adresse' }}">
            </div>
            <div class="w-full flex flex-col gap-2">
                <label class="poppins-regular text-lg" for="disponibilite">Disponibilité</label>
                <input class="border border-[#d5e0d5] px-6 py-2 rounded-xl" type="text" id="disponibilite" name="disponibilite" placeholder="{{ $data->disponibilite ?? 'Ajouter votre Disponibilite'}}">
            </div>
            <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Mettre à jour votre profile</button>
        </form>
@endforeach
@endsection