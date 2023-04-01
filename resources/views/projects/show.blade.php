<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold flex gap-1 items-center text-xl text-gray-800 leading-tight">
      <Link href="{{ route('projects.index') }}">{{ __('Project') }}</Link>

      <span class="text-sm text-gray-400">
        <x-phosphor-arrow-right-bold class="h-5" />
      </span>

      <p>
        <span class="block text-sm text-gray-400 font-light">{{ $project->name }}</span>
        <span class="block text-xs text-gray-400 -mt-1">{{ $project->customer->name }}</span>
      </p>
    </h2>

    <span class="flex-1" />

    <Link modal class="btn btn-outline" href="{{ route('projects.edit', $project) }}">
    Edit project
    </Link>

    <Link href="{{ route('projects.tasks.create', $project) }}" class="btn btn-primary" modal>
    <x-phosphor-plus-bold class="h-5" /> Add task
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
                <div class="bg-white rounded-lg shadow overflow-hidden border-t">
                  <div class="px-4 pt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bock h-10" viewBox="0 0 24 24">
                      <g fill="none">
                        <path d="M3.75 3.5a.25.25 0 0 0-.25.25v12.5c0 .138.112.25.25.25H9V18H3.75A1.75 1.75 0 0 1 2 16.25V3.75C2 2.784 2.784 2 3.75 2h5.5c.966 0 1.75.784 1.75 1.75v3c0 .138.112.25.25.25h1c.966 0 1.75.784 1.75 1.75v.072l-1.5 1.4V8.75a.25.25 0 0 0-.25-.25h-1A1.75 1.75 0 0 1 9.5 6.75v-3a.25.25 0 0 0-.25-.25h-5.5zM6 5.75a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0zM5.25 9.5a.75.75 0 1 0 0-1.5a.75.75 0 0 0 0 1.5zM6 11.75a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0zM7.75 6.5a.75.75 0 1 0 0-1.5a.75.75 0 0 0 0 1.5zm.75 2.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0zm-.75 3.75a.75.75 0 1 0 0-1.5a.75.75 0 0 0 0 1.5zm9.444-3.061a1.75 1.75 0 0 0-2.388 0l-4.25 3.966a1.75 1.75 0 0 0-.556 1.28V20.5a1.5 1.5 0 0 0 1.5 1.5h2a1.5 1.5 0 0 0 1.5-1.5V18h2v2.5a1.5 1.5 0 0 0 1.5 1.5h2a1.5 1.5 0 0 0 1.5-1.5v-5.815a1.75 1.75 0 0 0-.556-1.28l-4.25-3.966zm-1.365 1.096a.25.25 0 0 1 .342 0l4.25 3.967a.25.25 0 0 1 .079.183V20.5h-2V18a1.5 1.5 0 0 0-1.5-1.5h-2a1.5 1.5 0 0 0-1.5 1.5v2.5h-2v-5.815a.25.25 0 0 1 .08-.183l4.25-3.967z" fill="currentColor"></path>
                      </g>
                    </svg>

                    <h2 class="text-2xl font-semibold">{{ $project->name }}</h2>
                    <p class="text-sm font-bold text-gray-600">
                      {{ $project->customer->name }}
                    </p>
                  </div>

                  <div class="px-4 pb-4 mt-3">
                    <p class="text-gray-600">{{ $project->description }}</p>
                  </div>

                  <div class="px-4 py-4 border-t">
                    <h3 class="text-base font-semibold">Team members</h3>
                    <p class="explainer">Users working on this project</p>

                    <section class="flex {{ $project->tasks->count() ? 'justify-between' : 'justify-center' }} items-center mt-2">
                      <div class="flex -space-x-3 items-center">
                        @forelse ($project->members as $member)
                        <span class="w-8 h-8 border-2 bg-gray-500 text-white border-white rounded-full dark:border-gray-800">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33A7.95 7.95 0 0 1 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" fill="currentColor">
                            </path>
                          </svg>
                        </span>
                        @empty
                        <div class="text-gray-500 items">

                          <section class="py-4 overflow-hidden">
                            <div class="container px-4 mx-auto">

                              <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-16" viewBox="0 0 20 20">
                                <g fill="none">
                                  <path d="M5.854 3.354a.5.5 0 1 0-.708-.708L3.5 4.293l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2zM8.5 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm1.522 6c.031-.343.094-.678.185-1H8.5a.5.5 0 0 0 0 1h1.522zM5.854 8.854a.5.5 0 1 0-.708-.708L3.5 9.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2zm0 4.292a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647l1.646-1.647a.5.5 0 0 1 .708 0zM20 15.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0zm-4-2a.5.5 0 0 0-1 0V15h-1.5a.5.5 0 0 0 0 1H15v1.5a.5.5 0 0 0 1 0V16h1.5a.5.5 0 0 0 0-1H16v-1.5z" fill="currentColor"></path>
                                </g>
                              </svg>

                              <div class="max-w-md mx-auto text-center mt-2 space-y-5">
                                <h2 class="text-2xl font-semibold">It's a bit empty here</h2>

                                <p class="text-neutral-500">
                                  Create a task for this project and then assign one of the users available in the system.
                                  You can also assign the task to yourself should that be the case.
                                </p>

                                <div class="flex items-center justify-center">

                                  <Link modal class="text-sm font-medium btn btn-outline w-1/2" href="{{ route('projects.tasks.create', $project) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24">
                                      <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 5v14"></path>
                                        <path d="M5 12h14"></path>
                                      </g>
                                    </svg>

                                    <span>Add your first task</span>
                                  </Link>

                                </div>

                              </div>
                            </div>
                          </section>
                        </div>
                        @endforelse

                        {{-- <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-400 border-2 border-white rounded-full hover:bg-gray-500 dark:border-gray-800" href="#">+3</a> --}}
                      </div>
                    </section>
                  </div>
                </div>

                {{-- tasks section --}}
                @if($project->tasks->count())
                  <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-4 py-4">
                      <h2 class="text-lg font-semibold">Tasks</h2>
                      <p class="explainer">Related to this project only</p>
                    </div>

                    <div class="px-4 py-4 border-t">
                      @include('projects.partials.project-tasks')
                    </div>
                  </div>
                @endif
              </section>

              <section class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow overflow-hidden relative">
                  <div class="px-4 py-4 border-y">
                    <h3 class="text-lg font-semibold">Project details</h3>
                  </div>

                  <div class="px-4 py-4 space-y-2 divide-y">
                    <p class="text-sm text-gray-600">
                      <span class="block font-bold">
                        Start date
                      </span>

                      <span class="block">
                        {{ $project->commence }}
                      </span>
                    </p>

                    <p class="text-sm text-gray-600 pt-2">
                      <span class="block font-bold">
                        Budget
                      </span>

                      <span class="block">
                        {{ $project->project_budget }}
                      </span>
                    </p>

                    <p class="text-sm text-gray-600 pt-2">
                      <span class="block font-bold">
                        Contact person
                      </span>

                      <span class="block">
                        {{ $project->customer->contact_first_name . ' ' . $project->customer->contact_last_name }}
                      </span>

                      <span class="block text-gray-400">
                        {{ $project->customer->contact_phone . ' | ' . $project->customer->contact_email }}
                      </span>
                    </p>

                    <p class="text-sm text-gray-600 py-4">
                      <span class="block font-bold">Deadline</span>
                      <span class="block">{{ $project->deadline }}</span>
                    </p>

                    <Link class="text-sm text-gray-300 bottom-0 px-4 py-2 absolute inset-x-0 bg-gray-500" href="{{ route('profile.edit') }}" preserve-scroll>

                    <span class="block font-bold">
                      Project owner
                    </span>

                    <div class="flex items-center justify-between">

                      <span class="block">
                        {{ $project->owner->name }}
                      </span>

                      @if(
                        $project->user_id === Auth::user()->id ||
                        Auth::user()->hasAnyRole(['admin', 'manager'])
                      )
                        <span class="block font-bold text-gray-300 border px-2 py-1 rounded">
                          {{ $project->commission }}
                        </span>
                      @endif

                    </div>

                    <span class="block text-gray-400">
                      {{ $project->owner->email }}
                    </span>
                    </Link>

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
