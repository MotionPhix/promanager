<x-splade-modal max-width="md">

  <h2 class="font-semibold text-xl mb-4">Edit task</h2>

  <x-splade-form
    class="flex flex-col gap-3"
    action="{{ route('projects.tasks.update', [$project, $task]) }}"
    :default="[
      'users' => $users,
      'name' => $task->name,
      'statuses' => $statuses,
      'status' => $task->status,
      'description' => $task->description,
      'assigned_to' => $assigned_to
    ]"
    method="patch">

    <x-splade-input label="Task" placeholder="What's the task" name="name" />

    <x-splade-select
      name="status"
      label="Status"
      choices="{ searchEnabled: false }">
      @foreach ($statuses as $status)
        <option value="{{ $status['slug'] }}">
          {{ $status['name'] }}
        </option>
      @endforeach
    </x-splade-select>

    <x-splade-textarea autosize name="description" placeholder="Describe the task" label="Task description" />

    <x-splade-select
      name="assigned_to"
      label="Assign task to"
      placeholder="Select a user to assign this task to..."
      choices="{ searchEnabled: false }">

      <option value="{{ Auth::user()->id }}">Me</option>

      @foreach ($users as $user)
        <option value="{{ $user->id }}">
          {{ $user->name }}
        </option>
      @endforeach
    </x-splade-select>

    <div class="flex justify-end">
      <x-splade-submit class="btn btn-outline" type="submit">
        <CheckIcon class="h-5" />

        <span>Update</span>
      </x-splade-submit>
    </div>
  </x-splade-form>
</x-splade-modal>
