@props(['active' => false])
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md py-2 px-3 text-sm font-medium"
    {{ $attributes }}
    aria-current="{{ $active ? 'page' : '' }}"
>
    {{ $slot }}
</a>
