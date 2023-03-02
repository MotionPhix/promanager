<!-- component -->
<section class="bg-white dark:bg-gray-900">
  <div class="container mb-4 mx-auto">
    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">

      @foreach ($project->tasks as $task)


      <section class="flex flex-col p-4 bg-[{{ $task->colour }}] group rounded-xl hover:bg-[{{ $task->colour }}]/75 transition duration-200">
        <h4 class="text-white font-semibold leading-6 mb-1">
          {{ $task->name }}
        </h4>

        <div class="flex justify-between items-center mb-4">
          <div class="flex items-center">
            <span class="h-2 w-2 mr-1 bg-white/70 rounded-full"></span>
          <span class="text-xs font-medium text-[{{ $task->color }}]/80">{{ $task->status() }}</span>
          </div>

          <Drop v-slot="{ dropdown, toggleDropdown }">
            <div v-if="dropdown" class="absolute divide-y right-0 top-7 bg-white z-10 rounded-lg border-gray-300 py-1 ">
              <Link class="px-2 flex items-center gap-2 hover:bg-gray-200" preserve-scroll href="{{ route('projects.tasks.edit', ['project' => $project, 'task' => $task]) }}" modal>
                <Icon>
                  <NoteEdit20Regular />
                </Icon> <span>Edit</span>
              </Link>

              <Link class="px-2 flex items-center gap-2 hover:bg-gray-200" preserve-scroll href="{{ route('projects.tasks.edit', ['project' => $project, 'task' => $task]) }}" modal>
                <Icon>
                  <Delete20Regular />
                </Icon> <span>Delete</span>
              </Link>
            </div>
          </Drop>
        </div>

        <p class="text-sm text-gray-200 leading-normal mb-5 group-hover:(text-gray-500 font-semibold) transition duration-300">
          {{ $task->description }}
        </p>

        <span class="flex-1" />

        <div class="pt-4 border-t border-gray-500">
          <div class="flex flex-wrap items-center justify-between -m-2">
            <div class="w-auto p-2">
              <div class="flex items-center p-2 bg-gray-500 rounded-md">
                <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.0001 2.33337H3.00008C2.2637 2.33337 1.66675 2.93033 1.66675 3.66671V11.6667C1.66675 12.4031 2.2637 13 3.00008 13H11.0001C11.7365 13 12.3334 12.4031 12.3334 11.6667V3.66671C12.3334 2.93033 11.7365 2.33337 11.0001 2.33337Z" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M9.66675 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M4.3335 1V3.66667" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M1.66675 6.33337H12.3334" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M6.3335 9H7.00016" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M7 9V11" stroke="#3D485B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="ml-2 text-xs font-medium text-gray-200">
                  {{ $task->created_at->diffForHumans() }}
                </span>
              </div>
            </div>

            <div class="w-auto p-2">
              <div class="flex h-full items-center">
                <img class="w-7 h-7 rounded-full object-cover" src="trizzle-assets/images/avatar-men-circle-border.png" alt="">
                <img class="w-7 h-7 -ml-3 rounded-full object-cover" src="trizzle-assets/images/avatar-women-circle-border.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      @endforeach

    </div>
  </div>
</section>
