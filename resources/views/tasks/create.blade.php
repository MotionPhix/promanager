<x-splade-modal max-width="lg">

  <h2 class="font-semibold text-xl mb-4">Add new task</h2>

  <x-splade-form
    class="flex flex-col gap-3"
    action="{{ route('projects.tasks.store', $project) }}"
    :default="[
      'task' => $task,
      'users' => $users,
      'statuses' => $statuses,
    ]"
    preserve-scroll
    method="post">

    <x-splade-input
      label="Task"
      placeholder="What's the task"
      name="name" />

    <x-splade-group name="status" label="Pick a status for the task..." inline>
      @foreach ($statuses as $status)
        <x-splade-radio name="status" value="{{ $status['slug'] }}" label="{{ $status['name'] }}" />
      @endforeach
    </x-splade-group>

    <x-splade-textarea
      autosize
      name="description"
      placeholder="Say more about the task"
      label="Task description" />

    <x-splade-select
      name="assigned_to"
      label="Assign task to"
      choices="{ searchEnabled: false }">

      <option value="" disabled>Select a user to assign this task to...</option>

      <option value="{{ Auth::user()->id }}">Me</option>

      @foreach ($users as $user)
        <option value="{{ $user->id }}">
          {{ $user->name }}
        </option>
      @endforeach
    </x-splade-select>

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
