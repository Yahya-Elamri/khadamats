
<style>
    .slider-container {
        width: 100%;
        overflow: hidden;
    }
    .slide {
        display: none;
        width: 100%;
    }
    .active-slide {
        display: block;
    }
</style>
    
<div class="slider-container flex justify-center items-center gap-10">
    <button id="prev">
        @include('icons.arrow')
    </button>
    <div>
        <div class="slide active-slide">
            <div class="w-[600px] flex flex-col justify-center items-center gap-5 border broder-black p-4 rounded-2xl">
                <ul class="flex justify-center items-center gap-1">
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li class="opacity-50">@include('icons.star')</li>
                </ul>
                <p class="poppins-regular font-normal text-xl">J'ai trouvé un menuisier nommé Ahmed via Khadamats pour une réparation rapide à domicile. Il a été ponctuel, a fourni un devis clair et son savoir-faire était excellent. La réparation a dépassé mes attentes et le processus s'est déroulé sans problème et de manière professionnelle. Je recommande vivement Khadamats pour un service fiable et de qualité.</p>
                <h1 class="poppins-regular font-normal text-2xl">Abdellah Benjelloun</h1>
            </div>
        </div>
        <div class="slide">
        <div class="w-[600px] flex flex-col justify-center items-center gap-5 border broder-black p-4 rounded-2xl">
                <ul class="flex justify-center items-center gap-1">
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li class="opacity-50">@include('icons.star')</li>
                    <li class="opacity-50">@include('icons.star')</li>
                </ul>
                <p class="poppins-regular font-normal text-xl">J'ai trouvé un super mécanicien nommé Karim grâce au service. Il a réparé ma voiture efficacement, a tout expliqué clairement et m'a proposé des prix équitables. Maintenant, ma voiture fonctionne bien. Je recommande vivement ce service et Karim pour des réparations automobiles fiables.</p>
                <h1 class="poppins-regular font-normal text-2xl">Jamal El Amrani</h1>
            </div>
        </div>
        <div class="slide">
        <div class="w-[600px] flex flex-col justify-center items-center gap-5 border broder-black p-4 rounded-2xl">
                <ul class="flex justify-center items-center gap-1">
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                    <li>@include('icons.star')</li>
                </ul>
                <p class="poppins-regular font-normal text-xl">J'avais besoin d'un électricien de toute urgence et le service m'a mis en contact avec le technicien Hassan. Il a rapidement résolu le problème électrique chez moi, assurant la sécurité et expliquant clairement le problème. Service efficace, professionnel et à prix raisonnable. Reconnaissant pour une expérience fluide. Je recommande vivement Hassan pour les besoins électriques.</p>
                <h1 class="poppins-regular font-normal text-2xl">Fatima Zidane</h1>
            </div>
        </div>
    </div>
    <button id="next"><svg xmlns="http://www.w3.org/2000/svg" width="50px" class="-rotate-90 p-3 border border-black rounded-full" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img"><path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M18 10l-6 5-6-5"></path></svg></button>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    document.getElementById('next').addEventListener('click', () => {
        slides[currentSlide].classList.remove('active-slide');
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].classList.add('active-slide');
    });

    document.getElementById('prev').addEventListener('click', () => {
        slides[currentSlide].classList.remove('active-slide');
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        slides[currentSlide].classList.add('active-slide');
    });
</script>
