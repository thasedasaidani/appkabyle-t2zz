@props(['active' => false])

<li>
    <a {{ $attributes->merge([
            'class' => ($active ? 'text-yellow-300 font-bold border-b-2 border-yellow-300' : 'text-white hover:text-yellow-200 transition duration-200')
        ]) }}>
        {{ $slot }}
    </a>
</li>
