@extends('connectedUsers.profileParameter')
@section('head_content')
@vite('resources/css/multi-select-tag.css')
<link rel="shortcut icon" href="assets/tag.png" type="image/x-icon">
@endsection
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
                <select class="border border-[#d5e0d5] px-6 py-2 poppins-regular text-lg rounded-xl block appearance-none w-full bg-gray-200  text-gray-700 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="categorie" placeholder="Categories" name="categorie[]" multiple>
                    <option value="Services de Santé et de Soins">Services de Santé et de Soins</option>
                    <option value="Services Informatique et Technologique">Services Informatique et Technologique</option>
                    <option value="Services éducatif et de formation">Services éducatif et de formation</option>
                    <option value="Services de transport et de livraison">Services de transport et de livraison</option>
                    <option value="Services de maintenace et de reparation">Services de maintenace et de reparation</option>
                    <option value="Services domestiques / menage">Services domestiques / menage</option>
                    <option value="Services de construction">Services de construction</option>
                    <option value="Services financieres et comptables">Services financieres et comptables</option>
                    <option value="Services juridiques et legaux">Services juridiques et legaux</option>
                    <option value="Services artisanaux">Services artisanaux</option>
                    <option value="Autres">Autres</option>
                </select>
            </div>
            <button class="poppins-regular bg-[#44baae] px-4 py-2 rounded-full text-white hover:bg-[#286d66]" type="submit">Mettre à jour votre profile</button>
        </form>
@endforeach
<script>
    function MultiSelectTag(e,t={shadow:!1,rounded:!0}){var n=null,l=null,d=null,a=null,s=null,i=null,o=null,r=null,c=null,u=null,p=null,v=null,m=t.tagColor||{},h=new DOMParser;function f(e=null){for(var t of(v.innerHTML="",l))if(t.selected)!w(t.value)&&g(t);else{const n=document.createElement("li");n.innerHTML=t.label,n.dataset.value=t.value,e&&t.label.toLowerCase().startsWith(e.toLowerCase())?v.appendChild(n):e||v.appendChild(n)}}function g(e){const t=document.createElement("div");t.classList.add("item-container"),t.style.color=m.textColor||"#2c7a7b",t.style.borderColor=m.borderColor||"#81e6d9",t.style.background=m.bgColor||"#e6fffa";const n=document.createElement("div");n.classList.add("item-label"),n.style.color=m.textColor||"#2c7a7b",n.innerHTML=e.label,n.dataset.value=e.value;const d=(new DOMParser).parseFromString('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="item-close-svg">\n                <line x1="18" y1="6" x2="6" y2="18"></line>\n                <line x1="6" y1="6" x2="18" y2="18"></line>\n                </svg>',"image/svg+xml").documentElement;d.addEventListener("click",(t=>{l.find((t=>t.value==e.value)).selected=!1,C(e.value),f(),E()})),t.appendChild(n),t.appendChild(d),o.append(t)}function L(){for(var e of v.children)e.addEventListener("click",(e=>{l.find((t=>t.value==e.target.dataset.value)).selected=!0,c.value=null,f(),E(),c.focus()}))}function w(e){for(var t of o.children)if(!t.classList.contains("input-body")&&t.firstChild.dataset.value==e)return!0;return!1}function C(e){for(var t of o.children)t.classList.contains("input-body")||t.firstChild.dataset.value!=e||o.removeChild(t)}function E(e=!0){selected_values=[];for(var d=0;d<l.length;d++)n.options[d].selected=l[d].selected,l[d].selected&&selected_values.push({label:l[d].label,value:l[d].value});e&&t.hasOwnProperty("onChange")&&t.onChange(selected_values)}n=document.getElementById(e),function(){l=[...n.options].map((e=>({value:e.value,label:e.label,selected:e.selected}))),n.classList.add("hidden"),(d=document.createElement("div")).classList.add("mult-select-tag"),(a=document.createElement("div")).classList.add("wrapper"),(i=document.createElement("div")).classList.add("body"),t.shadow&&i.classList.add("shadow"),t.rounded&&i.classList.add("rounded"),(o=document.createElement("div")).classList.add("input-container"),(c=document.createElement("input")).classList.add("input"),c.placeholder=`${t.placeholder||"Search..."}`,(r=document.createElement("inputBody")).classList.add("input-body"),r.append(c),i.append(o),(s=document.createElement("div")).classList.add("btn-container"),(u=document.createElement("button")).type="button",s.append(u);const e=h.parseFromString('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">\n            <polyline points="18 15 12 21 6 15"></polyline></svg>',"image/svg+xml").documentElement;u.append(e),i.append(s),a.append(i),(p=document.createElement("div")).classList.add("drawer","hidden"),t.shadow&&p.classList.add("shadow"),t.rounded&&p.classList.add("rounded"),p.append(r),v=document.createElement("ul"),p.appendChild(v),d.appendChild(a),d.appendChild(p),n.nextSibling?n.parentNode.insertBefore(d,n.nextSibling):n.parentNode.appendChild(d)}(),f(),L(),E(!1),u.addEventListener("click",(()=>{p.classList.contains("hidden")&&(f(),L(),p.classList.remove("hidden"),c.focus())})),c.addEventListener("keyup",(e=>{f(e.target.value),L()})),c.addEventListener("keydown",(e=>{if("Backspace"===e.key&&!e.target.value&&o.childElementCount>1){const e=i.children[o.childElementCount-2].firstChild;l.find((t=>t.value==e.dataset.value)).selected=!1,C(e.dataset.value),E()}})),window.addEventListener("click",(e=>{d.contains(e.target)||p.classList.add("hidden")}))}

    new MultiSelectTag('categorie',{
    rounded: true,
    tagColor: {
        textColor: '#327b2c',
        borderColor: '#92e681',
        bgColor: '#eaffe6',

        },
    onChange: function(values) {
        console.log(values)
    }
    })
</script>
@endsection