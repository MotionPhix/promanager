@props(['path' => '#', 'as' => 'Link'])

@php
$classes = 'group w-1/2 xl:w-full';
@endphp

<{{ $as }} href="{{ $path !== '#' ? route($path) : $path }}" preserve-scroll {{ $attributes->class($classes) }} role="link">
  <div class="p-6 rounded-xl hover:bg-gray-200 cursor-pointer transition duration-300">
    <div class="flex w-full">
      <div class="ml-6 first:ml-0">
        <svg aria-hidden="true" class="text-gray-200 transition duration-300 group-hover:text-gray-400" height="48" viewBox="0 0 48 48" width="48">
          <rect height="48" ry="12" style="fill: currentcolor;" width="48"></rect>
          <svg height="27.839999999999996" width="27.839999999999996" x="21%" y="21%">
            {{ $icon }}
          </svg>
        </svg>
      </div>

      <div class="ml-6 first:ml-0">
        <div class="flex w-full items-center">
          <div class="ml-6 flex items-center first:ml-0">
            <div class="flex flex-col w-full">
              <h3 class="break-words max-w-full text-sm text-gray-600 text-left font-bold m-0">
                {{ $title }}
              </h3>

              <p class="break-words max-w-full text-xs text-gray-600 text-left font-normal normal-case font-sans m-0">
                {{ $slot }}
              </p>
            </div>
          </div>

          <div class="ml-6 flex items-center first:ml-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24" color="text-gray-200" name="shortcut" class="text-gray-200 custom-color">
              <path d="M17.5858 5L11.2929 11.2929C10.9024 11.6834 10.9024 12.3166 11.2929 12.7071C11.6834 13.0976 12.3166 13.0976 12.7071 12.7071L19 6.41421V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4.00098C21 4.00131 21 4.00065 21 4.00098C21 3.98498 20.9996 3.96801 20.9989 3.95203C20.9874 3.71232 20.8902 3.47595 20.7071 3.29289C20.6112 3.19702 20.5007 3.12468 20.3828 3.07588C20.2649 3.02699 20.1356 3 20 3H15C14.4477 3 14 3.44772 14 4C14 4.55228 14.4477 5 15 5H17.5858Z"></path>
              <path d="M8 7C6.89543 7 6 7.89543 6 9V16C6 17.1046 6.89543 18 8 18H15C16.1046 18 17 17.1046 17 16V13C17 12.4477 17.4477 12 18 12C18.5523 12 19 12.4477 19 13V16C19 18.2091 17.2091 20 15 20H8C5.79086 20 4 18.2091 4 16V9C4 6.79086 5.79086 5 8 5H11C11.5523 5 12 5.44772 12 6C12 6.55228 11.5523 7 11 7H8Z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</{{ $as }}>
