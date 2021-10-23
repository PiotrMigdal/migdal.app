@props(['link', 'color', 'image'])

<li {{ $attributes->merge(['class' => 'card-shadow m-4 md:w-1/2 hover:bg-brand-gray-dark']) }}>
    <a href="{{ $link }}" title="See details">
        <div class="p-4 lg:flex lg:items-center text-sm">
            <div class="lg:flex-shrink-0 lg:p-5">
                <x-image-circle :filename="$image" class="h-16 w-16"/>
            </div>
            <div class="text-center lg:text-left">
                <p class="font-mono pt-4 lg:pt-0 text-xs text-{{ $color }}">
                    {{ $date }}
                </p>
                <h3>{{ $header }}</h3>
            </div>
        </div>
    </a>
</li>