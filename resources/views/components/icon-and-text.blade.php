
<div  {{ $attributes->merge(['class' => 'flex justify-center items-center']) }}>
    <div class="p-4 text-5xl tracking-widerk transition-transform">
        <a href="{{ $href }}">
        @if ($icon = 'plus')
        <svg class="stroke-current text-brand-pink hover:text-brand-pink-dark" xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
            <g id="Group_99" data-name="Group 99" transform="translate(-34 -9)">
              <line id="Line_44" data-name="Line 44" y2="26" transform="translate(49.5 11.5)" fill="none" stroke-linecap="round" stroke-width="5"/>
              <line id="Line_45" data-name="Line 45" y2="26" transform="translate(36.5 24.5) rotate(-90)" fill="none" stroke-linecap="round" stroke-width="5"/>
            </g>
          </svg>
        @endif
        </a>
    </div>
    @isset($slot)
    <div class="text-gray-50 text-xl lowercase">
        {{ $slot }}
    </div>
    @endisset
</div>
