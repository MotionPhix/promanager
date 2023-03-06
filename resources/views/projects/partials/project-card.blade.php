<x-splade-link class="relative flex flex-col p-4 bg-white overflow-hidden border border-gray-200 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 shadow-md transition duration-300" href="{{ route('projects.show', $project) }}">

  <div class="absolute bg-gray-200 -top-0.5 inset-x-0 rounded-full h-1.5 dark:bg-gray-700">
    <div class="bg-{{ $project->progress_colour }}-600 h-1.5 rounded" style="width: {{ $project->progress() }}%" />
  </div>

  <h3 class="font-semibold pb-2 flex flex-col">
    <span class="text-xl text-gray-800">{{ $project->name }}</span>
    <span class="text-lg text-gray-400">{{ $project->customer->name }}</span>
  </h3>

  <p class="text-gray-600 truncate">
    {{ $project->description }}
  </p>

  <span class="flex-1" />

  <div class="flex items-center justify-between border-t mt-4 pt-4">

    <p class="text-sm flex items-start gap-1 text-gray-500">
      <span>
        <DeadlineIcon class="w-5" />
      </span>

      <div class="flex flex-col">
        <span>
          {{ $project->deadline }}
        </span>

        <span class="text-xs text-{{ $project->time_colour ? 'green' : 'red' }}-500">
          Deadline {{ $project->end_date->lt(now()) ? 'was' : 'is' }} {{ $project->end_date->diffForHumans() }}
        </span>
      </div>
    </p>

    <p class="text-sm text-gray-500 flex -space-x-3 items-center">
      @foreach ($project->members as $member)
        <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800" src="https://free-images.com/lg/097c/face_profile_smile_look.jpg" alt="">
      @endforeach

      <Link class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-2 border-white rounded-full hover:bg-gray-500 dark:border-gray-800" href="#">
      <UserPlusIcon class="w-6" />
      </Link>
    </p>

  </div>
</x-splade-link>
