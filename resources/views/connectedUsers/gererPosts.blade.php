@extends('connectedUsers.master')
@section('contents')
<style>
.toast {
    display: none;
}

.show2 {
    min-width: 250px; 
    background-color: #fff; 
    color: #44baae; 
    text-align: center; 
    border-radius: 10px; 
    padding: 16px;
    position: absolute;
    z-index: 1;
    left: 50%;
    bottom: 50%;
    transform: translate(-50%, 50%);
    font-size: 17px;
    border-width: 1px;
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-border-opacity));
    display:block;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 50%; opacity: 1;}
}

@keyframes fadeout {
    to {bottom: 0; opacity: 0;}
}
</style>
<div class="container mx-auto my-20 p-4">
    <h1 class="poppins-regular text-6xl">Votre <span class="text-[#44baae]">Khadamats</span></h1>
    <div class="w-full py-8">
        @if($Posts->isEmpty())
        <a href="/newpost" class=" poppins-regular text-xl capitalize">créez votre première publication <span class="underline text-[#44baae]">ici</span></a>
        @else
        <table class="w-full table-auto text-left shadow-md rounded-lg overflow-hidden">
            <thead class="bg-[#44baae] text-white w-full">
                <tr class="w-full">
                    <th class="w-1/5 poppins-regular text-xl px-6 py-3 border-b-2 border-blue-300 capitalize text-center">votre post</th>
                    <th class="w-1/5 poppins-regular text-xl px-6 py-3 border-b-2 border-blue-300 capitalize text-center">totals des offres</th>
                    <th class="w-1/5 poppins-regular text-xl px-6 py-3 border-b-2 border-blue-300 capitalize text-center">Lien Du Post</th>
                    <th class="w-1/5 poppins-regular text-xl px-6 py-3 border-b-2 border-blue-300 capitalize text-center">Modifier le post</th>
                    <th class="w-1/5 poppins-regular text-xl px-6 py-3 border-b-2 border-blue-300 capitalize text-center">mettre fin à votre service</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($Posts as $Post) 
                <tr class="border-b">
                    <td class="px-6 py-4 border-r poppins-regular text-xl border-gray-200 hover:bg-emerald-50 cursor-pointer text-center">{{$Post->title}}</td>
                    <td class="px-6 py-4 border-r poppins-regular text-xl border-gray-200 hover:bg-emerald-50 cursor-pointer text-center">le total de vos offres actuelles est 25</td>
                    <td onclick="copyText({{$Post->id}})" class="px-6 py-4 border-r border-gray-200 poppins-regular text-xl hover:bg-emerald-50 cursor-pointer text-center relative"><div id="{{$Post->id}}" >localhost:8000/post/{{$Post->id}}</div> <div id="{{$Post->id}}/2" class="toast" >localhost:8000/post/{{$Post->id}}</div></td>
                    <td class="px-6 py-4 border-r border-gray-200 poppins-regular text-xl hover:bg-emerald-50 cursor-pointer capitalize text-center"><a href="" class="hover:text-[#44baae] hover:underline">modifier ici</a></td>
                    <td class="px-6 py-4 border-r poppins-regular text-xl border-gray-200 hover:bg-emerald-50 cursor-pointer text-center"><button class="border border-[#e5e7eb] px-6 py-2 rounded-full w-2/3 hover:bg-white">Supprimer</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
<script>
function copyText(id) {
    var text = document.getElementById(id).innerText;
    var textarea = document.createElement('textarea');
    textarea.value = text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);
    var toast = document.getElementById(id+"/2");
    toast.className = "show2";
    setTimeout(function(){ toast.className = toast.className.replace("show2", "toast"); }, 3000);
}
</script>
@endsection