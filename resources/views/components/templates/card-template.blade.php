<div class="flex flex-col flex-1 min-w-xs bg-gray-100 overflow-hidden rounded shadow">
    <!-- Image -->
    <div class="flex-1 w-full overflow-hidden">
        <img src="{{ $imgPath }}" 
             alt="UNIVERSAL STUDIO" 
             class="w-full h-full object-cover object-center">
    </div>

    <!-- Details -->
    <div class="p-4">
        <h3 class="font-semibold text-gray-800">{{ $title }}</h3>
        <p class="text-gray-600 text-sm">{{ $description }}</p>
    </div>
</div>
