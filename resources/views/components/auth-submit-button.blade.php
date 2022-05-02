@props(['btnname'])
<div class="mt-4">
    <button {{ $attributes }}
      type="submit">
        {{ $btnname }}
    </button>
</div>