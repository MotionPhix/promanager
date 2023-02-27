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

    <button class="btn btn-outline">
      Tasks
    </button>

    <Link
      href="{{ route('projects.tasks.create', $project) }}"
      class="btn btn-primary"
      modal>
      <PlusIcon class="h-5" /> Add task
    </Link>
  </x-slot>

  <div class="py-12 text-gray-700">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          {{-- project details --}}
          <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
              <section class="w-full md:w-2/3 px-4 mb-8 space-y-6">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                  <div class="px-4 pt-4">
                    <h2 class="text-lg font-semibold">{{ $project->name }}</h2>
                    <p class="text-sm text-gray-600">{{ $project->customer?->first_name }}</p>
                  </div>

                  <div class="px-4 pb-4">
                    <p class="text-gray-600">{{ $project->description }}</p>
                  </div>

                  <div class="px-4 py-4 border-t">
                    <h3 class="text-base font-semibold mb-2">Team Members</h3>

                    <section class="flex justify-between items-center">
                      <div class="flex -space-x-3 items-center">
                        @forelse ($project->members as $member)
                          <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800" src="https://free-images.com/lg/097c/face_profile_smile_look.jpg" alt="">
                        @empty
                          <div class="text-gray-500 items">
                            Project is assigned to you only.
                          </div>
                        @endforelse

                        {{-- <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-2 border-white rounded-full hover:bg-gray-500 dark:border-gray-800" href="#">+3</a> --}}
                      </div>

                      <Link class="btn rounded-lg h-6 w-6 p-0 btn-outline justify-center group" href="#">
                        <UserPlusIcon class="w-5 text-gray-500 transition-all duration-300 group-hover:text-gray-600" />
                      </Link>
                    </section>

                    {{-- <ul class="list-disc pl-6">
                      @foreach ($project->members as $member)
                      <li>{{ $member->name }}</li>
                      @endforeach
                    </ul> --}}
                  </div>
                </div>

                {{-- tasks section --}}
                <div class="bg-white rounded-lg shadow overflow-hidden">
                  <div class="px-4 py-4">
                    <h2 class="text-lg font-semibold">Tasks</h2>
                    <p class="text-xs text-gray-400">Related to this project only</p>
                  </div>

                  <div class="px-4 py-4 border-t">
                    <ul class="list-disc pl-6">
                      @foreach ($project->tasks as $task)
                      <li>{{ $task->name }}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </section>

              <section class="w-full md:w-1/3 px-4 mb-8">
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
              </section>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
