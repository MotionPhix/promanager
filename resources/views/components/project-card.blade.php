{{-- <Link href="{{ route('projects.show', $project) }}">
  <div class="relative p-6 h-full bg-white border hover:border-gray-300 rounded-xl">
    <img class="absolute left-0 top-0" src="flaro-assets/images/career/gradient.svg" alt="">
    <div class="relative z-10 flex flex-col justify-between h-full">
      <div class="mb-24 flex-1">
        <h3 class="mb-2 text-lg font-bold font-heading leading-snug">
          {{ $project->name }}
        </h3>
        <p class="text-sm text-gray-500 font-medium">
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
          {{ $project->company_name }}
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
    <span>clos{{ $project->end_date->lt(now()) ? 'ed ' : 'es ' . $project->end_date->diffForHumans() }}</span>
  </section>

</div>

