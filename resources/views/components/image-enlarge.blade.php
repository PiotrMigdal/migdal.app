@props(["filename"])

<img {{ $attributes->merge(['class' => 'enlarge m-auto rounded-md border-gray-50 border-2 object-cover cursor-pointer hover:opacity-90 w-72 h-48 transition']) }} title="Click to enlarge" src="{{ asset('storage/' . $filename) }}">

<div class='enlarged top-0 left-0 w-screen h-screen fixed bg-black bg-opacity-80 hidden cursor-pointer transition'>
    <img class="m-auto object-cover" src="{{ asset('storage/' . $filename) }}">
</div>

