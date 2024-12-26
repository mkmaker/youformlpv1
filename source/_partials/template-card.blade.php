<a href="/templates/t/{{$template['slug']}}" class="bg-white group rounded-md shadow-md overflow-hidden cursor-pointer hover:shadow-xl">
    
    <div class="h-48 bg-cover bg-center transform transition-transform duration-300 group-hover:scale-105" style="background-image: url({{$template['image']}});"></div>
    
    <div class="px-8 py-3">
        <h3 class="text-xl font-bold mt-2">
            {{$template['title']}}
        </h3>
        <p class="text-gray-700 mt-2 pb-3">
            {{$template['description'] ?? ''}}
        </p>
    </div>
</a>