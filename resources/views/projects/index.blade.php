<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Projects') }}
    </h2>

    <span class="flex-1" />

    <Link
      href="{{ route('projects.create') }}"
      class="btn btn-primary"
      modal>
      <PlusIcon class="h-5" /> New project
    </Link>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          {{-- projects grid list --}}
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($projects as $project)
              @include('projects.partials.project-card')
            @endforeach
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
