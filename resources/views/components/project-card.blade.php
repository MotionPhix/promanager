{{-- <Link href="{{ route('projects.show', $project) }}">
  <div class="relative h-full p-6 bg-white border hover:border-gray-300 rounded-xl">
    <img class="absolute top-0 left-0" src="flaro-assets/images/career/gradient.svg" alt="">
    <div class="relative z-10 flex flex-col justify-between h-full">
      <div class="flex-1 mb-24">
        <h3 class="mb-2 text-lg font-bold leading-snug font-heading">
          {{ $project->name }}
        </h3>
        <p class="text-sm font-medium text-gray-500">
          <span>Contractor</span>
          <span class="px-2">&bull;</span>
          <span>{{ $project->customer->name }}</span>
        </p>
      </div>

      <div class="flex-1">
        <img src="flaro-assets/logos/brands/brand-medium.png" alt="">
      </div>
    </div>
  </div>
</Link> --}}

<div class="flex flex-col max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600">

  <section class="flex items-start justify-between mb-2">

    <x-project-action-menu :project="$project" />

    <div>
      <h5 class="order-1 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
        {{ $project->name }}
      </h5>

      <p class="flex items-center gap-2 text-sm font-semibold text-gray-400">
        <x-phosphor-buildings-bold class="w-4" />

        <span>
          {{ $project->customer->name }}
        </span>
      </p>
    </div>
  </section>

  <p class="mb-2 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">
    {{ $project->description }}
  </p>

  <p class="flex-1" />

  <section class="flex items-center justify-end gap-2 text-sm font-semibold text-gray-500">
    <x-phosphor-clock-clockwise-bold class="w-4" />
    <span>clos{{ $project->end_date > now() ? 'es ' : 'ed ' . $project->end_date->diffForHumans() }}</span>
  </section>

</div>

