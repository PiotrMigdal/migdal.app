@props(["filename", "user"])

@isset($filename)
    <img {{ $attributes->merge(['class' => 'm-auto rounded-full border-gray-50 border-2 object-cover']) }} src="{{ asset('storage/' . $filename)  }}" alt="User photo"">
@else
    <div {{ $attributes->merge(['class' => 'bg-brand-pink-dark border-2 border-gray-50 flex m-auto object-cover rounded-full uppercase']) }}><span class="m-auto">{{ substr($user->username, 0, 1) }}</span></div>
@endisset
