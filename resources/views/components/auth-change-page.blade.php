@props(['route', 'title'])
<div {{ $attributes }}>
    <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

    <a href="{{ $route }}" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">
      or <span class="font-bold">{{ $title }}</span>
    </a>

    <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
</div>