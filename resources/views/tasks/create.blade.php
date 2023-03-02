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

    {{-- <div class="w-full">
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
    </div> --}}

    {{-- <MenuDrop :members="@js($users)" /> --}}

    <div class="relative">
      <SelectMember v-slot="{ isOpen, members, selected, select, toggle }" :members="@js($users)">
        <span
          class="w-full bg-white border py-1.5 px-3.5 flex justify-between items-center transition-all duration-200"
          :class="isOpen ? 'rounded-t-lg' : 'rounded-lg'"
          @click="toggle"
        >
          <h3 class="font-heading" v-text="selected"  />

          <svg
            :class="{ 'rotate-180': isOpen }"
            class="h-5 w-5 text-neutral-500 transform transition-all duration-200"
            viewBox="0 0 20 20"
          >
            <path
              fill="currentColor"
              d="M6.5 8.5L10 12l3.5-3.5L15 9l-5 5-5-5z"
            />
          </svg>
        </span>

        <input v-model="selected" name="assigned_to" class="" />

        <div
          v-if="isOpen"
          class="absolute z-10 w-full rounded-b-lg bg-white border-l border-r border-b overflow-hidden h-44 overflow-y-auto transition-all duration-200"
        >
        {{-- @foreach ($users as $member) --}}

          <div
            class="block px-5 py-3 hover:bg-gray-100"
            @click.stop="select(member)"
            v-for="(member, index) in members"
            :key="index"
          >
            <div class="flex items-center">
              {{-- <img
                :src="member.image"
                :alt="member.name"
                class="w-6 h-6 mr-2"> --}}

              <div>
                {{-- <h3 class="font-heading text-sm font-medium">
                  {{ $member->name }}
                </h3> --}}
                <h3 class="font-heading text-sm font-medium" v-text="member.name" />

                {{-- <span class="text-sm text-neutral-500">{{ member.pro }}</span> --}}
              </div>
            </div>
          </div>
        {{-- @endforeach --}}
        </div>
      </SelectMember>
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
