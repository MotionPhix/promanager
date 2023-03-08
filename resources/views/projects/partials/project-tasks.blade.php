<section class="bg-white dark:bg-gray-900">
  <div class="container mb-4 mx-auto">
    <div class="grid grid-cols-1 gap-3 md:grid-cols-2">

      @foreach ($project->tasks as $key => $task)

        <section class="flex flex-col p-4 bg-gray-700 group rounded-xl hover:bg-gray-800 transition duration-300 ease-in-out">
          <h4 class="text-white font-semibold leading-6 mb-1">
            {{ $task->name }}
          </h4>

          <div class="flex justify-between items-center mb-4">
            <div class="flex gap-1 items-center">
              <span class="h-2 w-2 bg-[{{ $task->colour }}] rounded-full" />
              <span class="text-xs font-medium text-[{{ $task->colour }}]/90">{{ $task->status() }}</span>
            </div>

            <article class="flex items-center gap-1">

              <Drop v-slot="{ dropdown, toggleDropdown, ask }">
                <div v-if="dropdown" class="absolute divide-y overflow-hidden right-0 top-7 bg-white z-10 rounded-lg border-gray-300 py-1 w-auto">
                  <Link class="px-4 py-1.5 flex items-center gap-2 hover:bg-gray-200" preserve-scroll href="{{ route('projects.tasks.edit', ['project' => $project, 'task' => $task]) }}" modal>
                    <Icon>
                      <Edit />
                    </Icon> <span>Edit</span>
                  </Link>

                  <Link
                    class="px-4 py-1.5 flex items-center gap-2 hover:bg-gray-200"
                    href="#re-assign"
                    preserve-scroll>
                    <Icon>
                      <UserRole />
                    </Icon> <span>Reassign</span>
                  </Link>
                </div>
              </Drop>

              <x-splade-form confirm require-password="password_confirmation">
                <button class="rounded-md h-6 w-6 bg-white p-1 hover:(bg-rose-500 text-white) transition duration-300 ease-in-out" type="submit">
                  <Icon size="16">
                    <Delete20Regular />
                  </Icon>
                </button>
              </x-splade-form>

            </article>
          </div>

          <p class="text-sm text-gray-200 leading-normal mb-5 group-hover:(text-gray-300) transition duration-300 ease-in-out">
            {{ $task->description }}
          </p>

          <span class="flex-1" />

          <div class="pt-4 border-t border-gray-500">
            <div class="flex flex-wrap items-center justify-between -m-2">
              <div class="w-auto p-2">
                <div class="flex items-center p-2 bg-gray-600 rounded-md">

                  <span class="ml-2 text-xs font-medium text-gray-200">
                    {{ $task->updated_at->diffForHumans() }}
                  </span>
                </div>
              </div>

              <div class="w-auto p-2">
                <div class="flex gap-1 text-xs items-center text-gray-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 1024 1024">
                    <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5a375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1c-.4.2-.8.3-1.2.5c-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8c2-77.2 33-149.5 87.8-204.3c56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z" fill="currentColor"></path>
                  </svg>

                  <span>
                    {{ $task->user_id === auth()->user()->id ? 'Me' : $task->user->name}}
                  </span>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- re-assign modal --}}
        <x-splade-modal name="re-assign" max-width="sm" :close-button="false">

          <h2 class="font-semibold text-xl mb-4">Re-assign task</h2>

          <x-splade-form
            class="flex flex-col gap-5"
            :action="route('projects.tasks.partial', [$project, $task])"
            preserve-scroll
            method="patch">

            <x-splade-select
              name="assigned_to"
              label="Assign task to"
              choices="{ searchEnabled: false }">

              <option value="" disabled>Pick a user to be re-assigned the task</option>

              <option value="{{ Auth::user()->id }}">Me</option>

              @foreach ($task->assignees() as $user)
                <option value="{{ $user->id }}">
                  {{ $user->name }}
                </option>
              @endforeach
            </x-splade-select>

            <div class="flex justify-end gap-2">
              <button type="button" class="btn btn-outline px-4" @click="modal.close">Cancel</button>

              <x-splade-submit class="flex items-center gap-2 btn">
                <Icon>
                  <UserRole />
                </Icon> <span>Re-assign</span>
              </x-splade-submit>
            </div>

          </x-splade-form>

        </x-splade-modal>

      @endforeach

    </div>
  </div>
</section>
