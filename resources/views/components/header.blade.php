<style>
        .dropdown:hover .dropdown-menu,
        .dropdown-menu:hover {
            display: block;
        }
        .subMenu:hover .dropdown-subMenu,
        .dropdown-subMenu:hover{
            display: block;
        }
        .dropdown-icon{
            transition: transform 0.3s ease-in-out;
        }
        .dropdown:hover .dropdown-icon{
            transform: rotate(180deg);
            transition: transform 0.3s ease-in-out;
        }
        .dropdown-menu {
            display: none;
        }
        .dropdown-subMenu {
            display: none;
        }
    </style>
<div class="w-full h-[70px] sticky top-0 bg-white border-b border-[#d5e0d5] shadow-sm z-50">
    <div class="h-full container flex mx-auto justify-between items-center">
        <div class="flex gap-10 items-center h-full">
            <img class="w-[196px] cursor-pointer" src="/assets/khadamats.png" alt="tt">
            <ul class="flex gap-3 items-center h-full z-50">
                <div class="dropdown h-full flex items-center z-50">
                    <li class="cursor-pointer poppins-regular">Trouver des talents</li>
                    <div class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img"><path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M18 10l-6 5-6-5"></path></svg>
                    </div>
                    <div class="dropdown-menu absolute top-[70px] left-0 w-full shadow-md z-50 bg-white">
                        <div class="container h-full mx-auto flex items-center justify-between p-24">
                            <div class="flex flex-col gap-5 items-start justify-between w-[35%] border-r-[1px] border-[#d5e0d5]">
                                <div class="subMenu">
                                    <a href="#" class="flex flex-col gap-3 hover:bg-[#44baae] p-4 rounded-xl focus:bg-[#44baae]">
                                        <div class="z-50 flex flex-col gap-3">
                                            <h1>Publiez une offre d'emploi et embauchez un pro</h1> 
                                            <p>Marché des talents</p>
                                        </div>
                                    </a>
                                    <div class="container mx-auto h-full dropdown-subMenu block absolute top-0 p-3">
                                        <a href="#" class="rounded-xl w-full flex flex-col items-center ml-20 mt-20">
                                            <div class="p-3 flex gap-16 items-start justify-between">
                                                <div class="flex flex-col gap-5">
                                                    <h1 class="text-[#1b1b1b] text-xl font-normal">Marché des talents</h1>
                                                    <p class="text-[#1b1b1b] w-[300px] text-sm font-light">Découvrez comment travailler avec des talents ou explorez vos besoins spécifiques en matière de recrutement.</p>
                                                    <p class="text-[#44baae]">Embaucher sur le marché des talents</p>
                                                </div>
                                                <ul class="flex flex-col mt-6">
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">Céramique et Poterie</li>
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">Tissage et Broderie</li>
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">Travail du Bois</li>
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">Travail du Métal</li>
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">travail electrique</li>
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">Vannerie</li>
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">Travail du Cuir</li>
                                                    <li class="hover:bg-slate-300 px-6 py-2 w-[300px] rounded-xl">Voir toutes les spécialisations</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="subMenu">
                                    <a href="#" class="flex flex-col gap-3 p-4 hover:bg-[#44baae] rounded-xl">
                                        <div class="z-50 flex flex-col gap-3">
                                            <h1>Parcourir et acheter des projets</h1> 
                                            <p>Catalogue de projets</p>
                                        </div>
                                    </a>
                                    <div class="container h-full dropdown-subMenu absolute mx-auto top-0 p-3">
                                        <a href="#" class="rounded-xl w-full flex flex-col items-center ml-20 mt-20">
                                            <div class="p-3 flex gap-16 items-start justify-between">
                                                <div class="flex flex-col gap-5">
                                                    <h1  class="text-[#1b1b1b] text-xl font-normal">Catalogue de projets</h1> 
                                                    <p  class="text-[#1b1b1b] text-sm font-light w-[300px]">Parcourez et achetez des projets dont la portée et le prix sont clairs.</p>
                                                    <p class="text-[#44baae] text-xl font-normal flex items-center">Voir toutes les catégories</p>
                                                </div>
                                                <ul class="grid grid-rows-2 grid-cols-3 gap-3 mt-24">
                                                    <li class="w-[100px] h-[100px] rounded-xl bg-cover bg-center" style="background-image: url(/assets/metal.png)"></li>
                                                    <li class="w-[100px] h-[100px] rounded-xl bg-cover bg-center" style="background-image: url(/assets/Cuir.jpg)"></li>
                                                    <li class="w-[100px] h-[100px] rounded-xl bg-cover bg-center" style="background-image: url(/assets/poteries-artisanat.jpeg)"></li>
                                                    <li class="w-[100px] h-[100px] rounded-xl bg-cover bg-center" style="background-image: url(/assets/tap-compressor.jpg)"></li>
                                                    <li class="w-[100px] h-[100px] rounded-xl bg-cover bg-center" style="background-image: url(/assets/travailleur-bois.jpeg)"></li>
                                                    <li class="w-[100px] h-[100px] rounded-xl bg-cover bg-center" style="background-image: url(/assets/vannerie.jpg)"></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="subMenu">
                                    <a href="#" class="flex flex-col gap-3 p-4 hover:bg-[#44baae] rounded-xl">
                                        <div class="z-50 flex flex-col gap-3">
                                            <h1>Bénéficiez des conseils d'un expert du secteur</h1> 
                                            <p>Consultations</p>
                                        </div>
                                    </a>
                                    <div class="container h-full dropdown-subMenu absolute mx-auto top-0 p-3">
                                        <a href="#" class="rounded-xl w-full flex flex-col items-center ml-20 mt-20">
                                            <div class="p-3 flex flex-col gap-3">
                                                <h1 class="text-[#1b1b1b] text-xl font-normal">Façons de sssss</h1>
                                                <p class="text-[#1b1b1b] text-sm font-light">Découvrez pourquoi Upwork a les bonnes opportunités pour vous.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown h-full flex items-center">
                    <li class="cursor-pointer poppins-regular">Chercher du travail</li>
                    <div class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img"><path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M18 10l-6 5-6-5"></path></svg>
                    </div>
                    <div class="dropdown-menu absolute top-[70px] left-0 w-full shadow-md z-50 bg-white">
                        <div class="container mx-auto flex items-center justify-between py-14">
                            <a href="#" class="block p-3 hover:bg-[#44baae] w-[250px] rounded-xl h-fit">
                                <div class="p-3 flex flex-col gap-3">
                                    <h1 class="text-[#1b1b1b] text-xl font-normal">Façons de gagner</h1>
                                    <p class="text-[#1b1b1b] text-sm font-light">Découvrez pourquoi Khadamats a les bonnes opportunités pour vous.</p>
                                </div>
                            </a>
                            <a href="#" class="block p-3 hover:bg-[#44baae] w-[250px] rounded-xl h-fit">
                                <div class="p-3 flex flex-col gap-3">
                                    <h1 class="text-[#1b1b1b] text-xl font-normal">Trouvez du travail pour vos compétences</h1>
                                    <p class="text-[#1b1b1b] text-sm font-light">Explorez le type de travail disponible dans votre domaine.</p>
                                </div>
                            </a>
                            <a href="#" class="block p-3 hover:bg-[#44baae] w-[250px] rounded-xl h-fit">
                                <div class="p-3 flex flex-col gap-3">
                                    <h1 class="text-[#1b1b1b] text-xl font-normal">Gagnez du travail avec les publicités</h1>
                                    <p class="text-[#1b1b1b] text-sm font-light">Faites-vous remarquer par le bon client.</p>
                                </div>
                            </a>
                            <a href="#" class="block p-3 hover:bg-[#44baae] w-[250px] rounded-xl h-fit">
                                <div class="p-3 flex flex-col gap-3">
                                    <h1 class="text-[#1b1b1b] text-xl font-normal">Rejoignez Freelancer Plus</h1>
                                    <p class="text-[#1b1b1b] text-sm font-light">Accédez à davantage de Connects, obtenez des informations stratégiques sur vos concurrents et essayez les derniers outils.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown h-full flex items-center">
                    <li class="cursor-pointer poppins-regular">Pourquoi Khadamats</li>
                </div>
            </ul>
        </div>
        <div class="flex gap-10 items-center">
            <div>
                <div>
                    <div class="flex items-center justify-between border-[#d5e0d5] border-[1px] rounded-full px-4 py-2">
                        <div class="w-[25px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="full" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img"><path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M10.688 18.377a7.688 7.688 0 100-15.377 7.688 7.688 0 000 15.377zm5.428-2.261L21 21"></path></svg>
                        </div>
                        <input class="focus:border-none focus:outline-none w-[80%] bg-transparent" type="text" placeholder="Que Recherchez-vous">
                    </div>
                </div>
                <div></div>
            </div>
            <div class="flex gap-5 items-center">
                <button class="poppins-regular">Log in</button>
                <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]">Sign up</button>
            </div>
        </div>
    </div>
</div>
<div class="container h-[60px] mx-auto">
    <ul class="flex gap-8 items-center h-full">
        <li class="poppins-regular font-medium hover:text-[#44baae] hover:underline transition"><a href="">Travail du Bois</a></li>
        <li class="poppins-regular font-medium hover:text-[#44baae] hover:underline transition"><a href="">Travail du Métal</a></li>
        <li class="poppins-regular font-medium hover:text-[#44baae] hover:underline transition"><a href="">Travail d'Electricité</a></li>
        <li class="poppins-regular font-medium hover:text-[#44baae] hover:underline transition"><a href="">Travail du Cuir</a></li>
        <li class="poppins-regular font-medium hover:text-[#44baae] hover:underline transition"><a href="">Livraison</a></li>
        <li class="poppins-regular font-medium hover:text-[#44baae] hover:underline transition"><a href="">Voir toutes les spécialisations</a></li>
    </ul>
</div>
