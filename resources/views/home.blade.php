@extends('master')
@section('title') Khadamats @endsection
@section('contents')
    <div class="my-10 container mx-auto">
        <div class="flex h-[70vh] flex-wrap items-center justify-evenly">
            <div class="w-full lg:w-[40%] flex-wrap flex flex-col gap-10 p-4 lg:p-0">
                <h1 class="text-5xl lg:text-7xl poppins-regular font-normal">
                    Vous en avez besoin ,<br> nous l'avons
                </h1>
                <p class="text-3xl poppins-regular font-light">Oubliez les anciennes règles. Vous pouvez avoir les meilleures personnes.Tout de suite.Ici.</p>
                <button class="w-fit poppins-regular px-6 py-2 rounded-full bg-[#44baae] text-white hover:bg-[#286d66]"><a href="/signup">Commencez maintenant</a></button>
            </div>
            <img class="" src="assets/home.jpg" alt="">
        </div>
        <div class="mt-52 lg:mt-28 flex w-full items-center justify-evenly flex-wrap-reverse">
            <img class="w-full lg:w-[30%]" src="assets/social-media.gif" alt="">
            <div class="w-full lg:w-[40%] flex flex-col gap-10 p-4 lg:p-0">
                <h1 class="text-5xl lg:text-6xl poppins-regular font-normal">Améliorez votre façon de travailler</h1>
                <div class="flex items-start gap-5">
                    @include('icons.pen',['width' => '50px','style'=>'m-2','color'=>'#000000'])
                    <div>
                        <h1 class="text-3xl poppins-regular font-light">L'inscription est gratuite.</h1>
                        <p class="text-lg poppins-regular font-extralight">Rejoignez-nous pour découvrir des professionnels, explorer des projets, ou réserver une consultation.</p>
                    </div>
                </div>
                <div class="flex items-start gap-5">
                    @include('icons.circlecheck',['width' => '70px','fill' => '#000000'])
                    <div>
                        <h1 class="text-3xl poppins-regular font-light">Publiez une offre d'emploi et trouvez les meilleurs talents sans aucun coût.</h1>
                        <p class="text-lg poppins-regular font-extralight">La recherche de talents n'a jamais été aussi facile. Postez votre offre d'emploi, ou laissez-nous vous aider dans votre recherche.</p>
                    </div>
                </div>
                <div class="flex items-start gap-5">
                    @include('icons.sheild')
                    <div>
                        <h1 class="text-3xl poppins-regular font-normal">Travaillez avec les meilleurs experts.</h1>
                        <p class="text-lg poppins-regular font-extralight">Khadamats vous permet d'améliorer votre travail à un coût abordable, avec des taux de transaction compétitifs.</p>
                    </div>
                </div>
                <div class="flex gap-5">
                    <button class="w-fit poppins-regular font-normal px-6 py-2 rounded-full bg-[#44baae] text-white hover:bg-[#286d66]"><a href="/signup">inscription gratuite</a></button>        
                    <button class="w-fit poppins-regular font-normal px-6 py-2 rounded-full border-2 border-[#44baae]">explorer le marché</button>
                </div>
            </div>
        </div>
        <div class="w-full flex items-center justify-center">
            <div class="mt-28 w-[80%] flex flex-col items-center justify-start gap-10">
                <div class="w-full p-0 lg:p-10 pb-0 flex flex-col gap-6">
                    <h1 class="text-5xl poppins-regular font-normal">Parcourir les talents par catégorie</h1>
                    <h1 class="text-xl poppins-regular font-normal underline text-[#44baae]">Popular services</h1>
                </div>
                <div class="w-full flex justify-center items-center p-10">
                    @include('components.categories')
                </div>
            </div>
        </div>
        <div class="w-full h-fit flex items-center justify-center p-10">
            <div class="w-full lg:w-[80%] min-h-[500px] flex justify-between bg-[#286d66] rounded-xl">
                <div class="w-full lg:w-[60%] p-5 flex flex-col gap-5">
                    <h1 class="text-2xl poppins-regular font-normal text-white">Pour Les clients</h1>
                    <h1 class="text-6xl poppins-regular font-normal text-white">La meilleure partie ? <br> <span class="text-[#5de2d5]">Tout.</span></h1>
                    <ul>
                        <li class="text-2xl poppins-regular font-normal text-white flex items-center gap-2">
                            @include('icons.circlecheck',['width' => '30px','fill' => '#f0f0f0'])
                            <span>Respectez votre budget</span>
                        </li>
                        <li class="text-2xl poppins-regular font-normal text-white flex items-center gap-2">
                            @include('icons.circlecheck',['width' => '30px','fill' => '#f0f0f0'])
                            <span>Réalisez rapidement un travail de qualité</span>
                        </li>
                        <li class="text-2xl poppins-regular font-normal text-white flex items-center gap-2">
                            @include('icons.circlecheck',['width' => '30px','fill' => '#f0f0f0'])
                            <span>Payez quand vous êtes heureux</span>
                        </li>
                        <li class="text-2xl poppins-regular font-normal text-white flex items-center gap-2">
                            @include('icons.circlecheck',['width' => '30px','fill' => '#f0f0f0'])
                            <span>Comptez sur une assistance 24h/24 et 7j/7</span>
                        </li>
                    </ul>
                    <button class="w-fit poppins-regular font-normal px-6 py-2 rounded-full text-lg bg-white">Plus d'informations</button>
                </div>
                <div class="w-[40%] hidden lg:block min-h-[500px] rounded-r-xl bg-cover bg-center" style="background-image: url(/assets/women2.jpg)">
                </div>
            </div>
        </div>
        <div class="w-full h-fit flex items-center justify-center p-0 lg:p-10">
            <div class="w-[80%] flex flex-col justify-between gap-10">
                <div class="flex flex-col gap-3">
                    <h1 class="poppins-regular font-normal text-5xl">Notre Satisfait Clients</h1>
                    <p class="poppins-regular font-normal underline text-[#44baae] text-xl">quelques-uns parmi beaucoup</p>
                </div>
                <div class="p-0 lg:p-10">
                    @include('components.swiper')
                </div>
            </div>
        </div>
        <div class="w-full h-fit flex items-center justify-center p-0 lg:p-10 mt-5">
            <div class="w-[80%] flex flex-col justify-between gap-10 bg-[#286d66] p-10 rounded-xl">
                <h1 class="poppins-regular font-normal text-5xl lg:text-7xl text-white">Les services Khadamats à portée de main !</h1>
                <button class="w-fit poppins-regular font-normal px-6 py-2 rounded-full text-lg bg-white"><a href="/signup">Créez votre compte</a></button>
            </div>
        </div>
        <div class="hidden lg:flex w-full h-fit items-center justify-center p-10">
            <div class="w-[80%] flex justify-between gap-10 p-10 rounded-xl">
                <div class="grid grid-cols-2 w-full justify-between">
                    @include('components.content')
                </div>
            </div>
        </div>
    </div>
@endsection