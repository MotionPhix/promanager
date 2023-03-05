<x-splade-modal max-width="md">

  <h2 class="font-semibold text-xl mb-4">Edit project</h2>

  <x-splade-form
    class="flex flex-col gap-3"
    action="{{ route('projects.update', $project) }}"
    :default="[
      'name' => $project->name,
      'description' => $project->description,
      'start_date' => $project->start_date,
      'end_date' => $project->end_date,
      'customer_id' => $project->customer_id,
      'budget' => $project->budget
    ]"
    method="patch"
    preserve-scroll>

    <x-splade-input label="Project name" placeholder="Give your project a name" name="name" />

    <section class="flex items-start gap-3">
      <x-splade-input label="Start date" name="start_date" date />
      <x-splade-input label="End date" name="end_date" date />
    </section>

    <x-splade-input label="Budget" placeholder="What's the project's budget" name="budget" />

    <x-splade-select
      name="customer_id"
      label="Project for"
      placeholder="Pick a customer..."
      choices="{ searchEnabled: true }">

      <option value="">
        <Link href="#new-customer">
          New customer
        </Link>
      </option>

      @foreach ($customers as $customer)
        <option value="{{ $customer->id }}">
          {{ $customer->name }}
        </option>
      @endforeach

    </x-splade-select>

    <x-splade-textarea autosize name="description" placeholder="Describe what the project is about" label="Project description" />

    <div class="flex justify-end">
      <x-splade-submit class="btn btn-outline" type="submit">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5"
          viewBox="0 0 1024 1024">
          <path
            d="M280 752h80c4.4 0 8-3.6 8-8V280c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8v464c0 4.4 3.6 8 8 8zm192-280h80c4.4 0 8-3.6 8-8V280c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8v184c0 4.4 3.6 8 8 8zm192 72h80c4.4 0 8-3.6 8-8V280c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8v256c0 4.4 3.6 8 8 8zm216-432H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-40 728H184V184h656v656z"
            fill="currentColor">
          </path>
        </svg>

        <span>Update</span>
      </x-splade-submit>
    </div>
  </x-splade-form>
</x-splade-modal>

<x-splade-modal name="new-customer">
  New customer
</x-splade-modal>
