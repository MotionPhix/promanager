<div class="relative flex justify-end order-2" x-data="{ open: false }" x-cloak>
  <button x-on:click="open = true" x-on:click.away="open = false" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
    <span class="sr-only">Open dropdown</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
    </svg>
  </button>

  <!-- Dropdown menu -->
  <div
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    class="absolute z-10 text-base bg-white divide-y divide-gray-100 rounded-lg shadow -top-1 -right-2 w-44 dark:bg-gray-700">
    <ul class="py-2" aria-labelledby="dropdownButton">
      <li>
        <Link
          modal
          preserve-scroll
          href="{{ route('projects.tasks.edit', ['project' => $task->project, 'task' => $task]) }}"
          class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
          <x-phosphor-pencil-simple-line-bold class="h-5" /> <span>Edit</span>
        </Link>
      </li>

      <li>
        <Link
          preserve-scroll
          href="#re-assign"
          class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
          <x-phosphor-user-circle-plus-bold class="h-5" /> <span>Re-assign</span>
        </Link>
      </li>

      <li>
        <Link
          preserve-scroll
          method="delete"
          require-password
          confirm-button="Delete task"
          confirm-danger="Sure you want to delete this task?"
          href="{{ route('projects.tasks.destroy', [$task->project, $task]) }}"
          confirm-text="This action is irreversible. Please enter your password to confirm."
          class="flex items-center gap-2 px-4 py-2 text-sm text-left text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
          <x-phosphor-trash-simple-bold class="5-5" /> <span>Delete</span>
        </Link>
      </li>
    </ul>
  </div>
</div>
