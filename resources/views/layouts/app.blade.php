<div class="min-h-screen bg-gray-100">
  @include('layouts.navigation')

  <!-- Page Heading -->
  <header class="bg-white shadow sticky top-0">
    <div class="max-w-7xl flex gap-1 items-center mx-auto py-6 px-4 sm:px-6 lg:px-8">
      {{ $header }}
    </div>
  </header>

  <!-- Page Content -->
  <main>
    {{ $slot }}
  </main>
</div>
