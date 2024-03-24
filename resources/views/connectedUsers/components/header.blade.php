<style>
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .show{
        display:block
    }
    .dropdown-content a:hover {background-color: #f1f1f1;border-radius: 0.75rem}
</style>
@foreach($UserData as $data)
<div class="w-full h-[70px] sticky top-0 bg-white border-b border-[#d5e0d5] shadow-sm z-50">
    <div class="h-full container flex mx-auto justify-between items-center px-4">
        <div class="flex gap-10 items-center h-full">
            <div>
                <a href="/"><img class="w-[196px] cursor-pointer" src="/assets/khadamats.png" alt="tt"></a>
            </div>
            <ul class="lg:flex gap-3 items-center h-full z-50 hidden">
                <li class="cursor-pointer poppins-regular hover:text-[#44baae] hover:underline transition">Khadamats Blog</li>
                <li class="cursor-pointer poppins-regular hover:text-[#44baae] hover:underline transition">khadamats plus</li>
            </ul>
        </div>
        <div class="flex gap-2 md:gap-5 lg:gap-12 items-center justify-end w-[60%]">
            <div class="sm:flex items-center hidden w-[70%] md:w-[50%]  justify-between border-[#d5e0d5] border-[1px] rounded-full px-4 py-2">
                <div class="w-[25px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="full" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img"><path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M10.688 18.377a7.688 7.688 0 100-15.377 7.688 7.688 0 000 15.377zm5.428-2.261L21 21"></path></svg>
                </div>
                <input class="focus:border-none focus:outline-none w-[90%] bg-transparent" type="text" placeholder="Que Recherchez-vous">
            </div>
            <div class="flex gap-4 items-center">
                <div class="rounded-full cursor-pointer border border-[#d5e0d5] p-2 hidden md:block">
                    @include('icons.menu',['width' => '25px'])
                </div>
                <div class="rounded-full cursor-pointer border border-[#d5e0d5] p-2 hidden md:block">
                    @include('icons.notification',['width' => '25px'])
                </div>
                <div class="dropdown">
                    <div class="w-[56px] h-[56px] cursor-pointer bg-cover bg-center rounded-full dropbtn border border-[#d5e0d5]" style="background-image: url(/profileimages/{{ $data->profile_image }})" onclick="toggleDropdown()"></div>
                    <div class="dropdown-content hidden bg-[#f9f9f9] border rounded-xl border-[#d5e0d5] absolute top-[55px] right-0" id="myDropdown">
                        <a class="block px-4 py-2" href="/{{ $data->username }}">Profile</a>
                        <a class="block px-4 py-2" href="/{{ $data->username }}/parameter">Parameter</a>
                        <a class="block px-4 py-2" href="/disconnect">Se Deconnecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Inline script for simplicity, but consider using an external JS file in production
function toggleDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
@endforeach
