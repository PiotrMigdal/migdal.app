@props(["filename"])

<img {{ $attributes->merge(['class' => 'm-auto rounded-xl border-gray-50 border-2 object-cover']) }} src="{{ asset('storage/' . $filename) }}">

