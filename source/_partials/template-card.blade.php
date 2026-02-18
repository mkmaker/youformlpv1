<a href="/templates/t/{{$template['slug']}}" onclick="sa_event('click_template')" class="bg-white group rounded-md shadow-md overflow-hidden cursor-pointer hover:shadow-xl">
    
    <div class="h-48 overflow-hidden flex items-center justify-center transform transition-transform duration-300 group-hover:scale-105 bg-gray-100">
        <img 
            src="{{$template['image']}}" 
            alt="{{ $template['title'] ?? 'Template image' }}" 
            loading="lazy" 
            class="object-cover w-full h-full"
            style="max-width:600px;"
        >
    </div>
    
    <div class="px-8 pt-3 pb-5">
        <h3 class="text-xl font-bold mt-2">
            {{$template['title']}}
        </h3>
        <p class="text-gray-700 mt-2 line-clamp-3">
            {{$template['description'] ?? ''}}
        </p>
    </div>
</a>