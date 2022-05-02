@props(['imagesrc','responsivesrc'])
<img src="{{ $imagesrc }}" class="hidden absolute bottom-0 left-0 lg:block w-1/2 -z-2" width="100%" height="100%"/>
<div class="hidden relative lg:flex lg:justify-center lg:items-center lg:w-1/2 pr-6" >
    <img src="{{ $responsivesrc }}" class="mx-auto max-w-sm" width="100%" height="100%"/>
</div>