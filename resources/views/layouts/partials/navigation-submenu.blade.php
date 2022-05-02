{{-- 
<div class="text-sm flex flex-col gap-y-1 text-left" style="">
    <a href="{{ route('profile.show') }}" class="block py-2 px-2 hover:bg-gray-800 hover:text-white rounded">
        Profile
    </a>
    <a href="#" class="block py-2 px-2 hover:bg-gray-800 hover:text-white rounded">
        Privacy
    </a>
    <a href="#" class="block py-2 px-2 hover:bg-gray-800 hover:text-white rounded">
        Settings
    </a>
</div>
--}}

<ul class="flex list-reset flex-col align-left text-center md:text-left w-full">
    <li class="md:mr-3 flex-1 w-full">
      <a href="{{ route('profile.show') }}" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
        Profile
      </a>
    </li>
    <li class="md: mr-3 flex-1 w-full">
      <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
        Privacy
      </a>
    </li>
    <li class="md: mr-3 flex-1 w-full">
      <a href="#" class="block py-2 px-4 hover:bg-gray-800 hover:text-white rounded">
        Help
      </a>
    </li>
</ul>