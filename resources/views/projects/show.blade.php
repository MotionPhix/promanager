<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold flex gap-2 items-center text-xl text-gray-800 leading-tight">
      <Link href="{{ route('projects.index') }}">{{ __('Project') }}</Link>

      <span class="text-(xs gray-400)">
        <ArrowRightIcon class="w-5" />
      </span>

      <span class="text-(xs gray-400)">{{ $project->name }}</span>
    </h2>

    <span class="flex-1" />

    <button class="btn">
      Tasks
    </button>

    <button class="btn">
      New task
    </button>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          {{-- project details --}}
          <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
              <div class="w-full md:w-2/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                  <div class="px-4 py-4 border-b">
                    <h2 class="text-lg font-semibold">{{ $project->name }}</h2>
                    <p class="text-sm text-gray-600">{{ $project->customer?->first_name }}</p>
                  </div>
                  <div class="px-4 py-4">
                    <p class="text-sm text-gray-600">{{ $project->description }}</p>
                  </div>
                  <div class="px-4 py-4 border-t">
                    <h3 class="text-base font-semibold mb-2">Team Members</h3>
                    <ul class="list-disc pl-6">
                      @foreach ($project->members as $member)
                      <li>{{ $member->name }}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>

              <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                  <div class="px-4 py-4 border-b">
                    <h3 class="text-lg font-semibold">Project Details</h3>
                  </div>
                  <div class="px-4 py-4">
                    <p class="text-sm text-gray-600">Start Date: {{ $project->start_date }}</p>
                    <p class="text-sm text-gray-600">End Date: {{ $project->end_date }}</p>
                    <p class="text-sm text-gray-600">Budget: {{ $project->budget }}</p>
                    <p class="text-sm text-gray-600">Contact Person: {{ $project->customer?->contact_first_name }}</p>
                    <p class="text-sm text-gray-600">Deadline: {{ $project->end_date }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
