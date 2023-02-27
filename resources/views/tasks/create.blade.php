<x-splade-modal max-width="md">

  <h2 class="font-semibold text-xl mb-4">Add new task</h2>

  <x-splade-form
    class="flex flex-col gap-3"
    action="{{ route('projects.tasks.store', $project) }}"
    method="post">
    <x-splade-input
      label="Task"
      placeholder="What's the task"
      name="name" />

    <x-splade-textarea
      autosize
      name="description"
      placeholder="Say more about the task"
      label="Task description" />

    <div class="w-full">
      <label class="text-sm text-gray-800">Assign task to</label>
      <div class="mt-1">
        <select
          name="assigned_to"
          placeholder="Pick an as"
          class="mt-1 block w-full rounded-md border border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">

          <option value="{{ Auth::user()->id }}">Me</option>

          @foreach ($users as $user)
            <option value="{{ $user->id }}">
              <span class="flex flex-col">
                <span>{{ $user->id }}</span>
                <span>{{ $user->name }}</span>
              </span>
            </option>
          @endforeach

        </select>
      </div>
    </div>

    <div class="flex justify-end">
      <x-splade-submit
        class="btn btn-outline"
        type="submit">
        <CheckIcon class="h-5" />

         <span>Add</span>
      </x-splade-submit>
    </div>
  </x-splade-form>
</x-splade-modal>
