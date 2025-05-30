@props(['href', 'active' => false])

<a href="{{ $href }}" class="h-7 block px-4 py-1 text-sm font-bold {{ $active ? 'bg-gray-900 text-white' : 'text-[#153261] hover:bg-gray-700 hover:text-white' }}">
    {{ $slot }}
</a>
