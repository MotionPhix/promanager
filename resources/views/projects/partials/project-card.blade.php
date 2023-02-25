<x-splade-link
  class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300"
  href="{{ route('projects.show', $project) }}">
  <div class="p-4">
    <h3 class="text-lg font-semibold text-gray-900 pb-2">
      {{ $project->name }}
    </h3>

    <p class="text-sm text-gray-500 mb-2">
      <span></span>
      <span>
        {{ $project->end_date }}
      </span>
    </p>
    <p class="text-sm text-gray-500 mb-2">Budget: $50,000</p>
    <p class="text-sm text-gray-500 mb-2">Assigned to: John Doe, Jane Smith, Alex Kim</p>
    <p class="text-sm text-gray-500 mb-2">Status: In Progress</p>
    <a href="#" class="text-sm text-gray-700 hover:text-blue-500">View Project</a>
  </div>
</x-splade-link>
