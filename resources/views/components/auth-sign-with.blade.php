@props(['to', 'title'])
<a {{ $attributes }} href="{{ $to }}">
    <div class="px-4 py-2">
        {{  $slot  }}
    </div>
    <span class="w-5/6 px-4 py-3 font-bold text-center">{{ $title }}</span>
</a>