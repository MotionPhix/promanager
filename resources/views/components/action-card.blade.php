@props(['bg' => 'bg-teal-500/20'])

<div class="flex h-full flex-col p-6 text-center items-center gap-2 sm:gap-4 bg-white border border-gray-200 rounded-xl shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
  <div class="w-16 h-16 items-center font-bold text-teal-800 flex justify-center rounded-xl {{ $bg }}">
    {{ $icon }}
  </div>

  <p class="text-gray-700 dark:text-gray-400">
    {{ $slot }}
  </p>
</div>
