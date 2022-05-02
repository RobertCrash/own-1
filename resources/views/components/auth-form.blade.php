@props(['name'])
<form {{ $attributes }}>
    @csrf
    {{ $slot }}
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-auth-submit-button class="w-full px-4 py-2 btn"  btnname="{{ $name }}" />
</form>