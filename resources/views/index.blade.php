<section class="py-24 bg-bluegray-100 overflow-hidden">
  <div class="container px-4 mx-auto">

    <article class="grid grid-cols-3 gap-6">
      <section class="col-span-2 grid grid-cols-2 sm:grid-cols-3 gap-4">
        <div class="col-span-3 flex flex-col gap-6">
          <article class="flex flex-col gap-4">
            <h3 class="text-gray-600">
              Hi <strong class="font-semibold">{{ Auth::user()->name }}</strong>! Let's get started
            </h3>

            <p>
              Start driving your fleet toward immediate success! Utilize these core actions to instantly get up and running with Fleetio.
            </p>
          </article>

          <section class="col-span-3 grid grid-cols-3 gap-4">
            <x-splade-link href="#">
              <x-action-card bg="bg-[#c4e6fa]">
                <x-slot name="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-blue-900" name="vehicle" class="text-blue-900 custom-color">
                    <path fill="" d="M18 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM9 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                    <path fill="" fill-rule="evenodd" d="M4.596 7.342A4 4 0 018.54 4h6.918a4 4 0 013.945 3.342l.11.658H21a1 1 0 110 2h-1.153l.087.52 1.187 1.187A3 3 0 0122 13.828v.7a3 3 0 01-.317 1.341L21 17.236V20a1 1 0 01-1 1h-1a1 1 0 01-1-1v-1H6v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-2.764l-.683-1.367A3 3 0 012 14.529v-.7a3 3 0 01.879-2.12l1.187-1.188.087-.52H3a1 1 0 010-2h1.486l.11-.658zM5.414 12l-1.121 1.121a1 1 0 00-.293.707v.7a1 1 0 00.106.447l.736 1.472a1 1 0 00.894.553h12.528a1 1 0 00.894-.553l.736-1.472a1 1 0 00.106-.447v-.7a1 1 0 00-.293-.707L18.586 12H5.414zm12.405-2l-.388-2.329A2 2 0 0015.46 6H8.54A2 2 0 006.57 7.671L6.18 10h11.64z" clip-rule="evenodd"></path>
                  </svg>
                </x-slot>

                Add a Vehicle
              </x-action-card>
            </x-splade-link>

            <x-splade-link href="#">
              <x-action-card bg="bg-[#c8f4dd]">
                <x-slot name="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-green-900" name="check-circle" class="text-green-900 custom-color">
                    <path fill="" fill-rule="evenodd" d="M4 12a8 8 0 1116 0 8 8 0 01-16 0zm8-10C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.707 8.707a1 1 0 00-1.414-1.414L11 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                </x-slot>

                Inspection
              </x-action-card>
            </x-splade-link>

            <x-splade-link href="#">
              <x-action-card bg="bg-[#fff1cf]">
                <x-slot name="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-yellow-900" name="warning" class="text-yellow-900 custom-color">
                    <path fill="" fill-rule="evenodd" d="M21.527 15.476L14.987 4.85c-1.317-2.468-4.658-2.468-5.975 0L2.473 15.476a3.87 3.87 0 00-.024 3.66C3.006 20.186 4.079 21 5.445 21h13.112c1.366 0 2.439-.815 2.994-1.864a3.87 3.87 0 00-.023-3.66zm-10.76-9.667c.563-1.079 1.902-1.079 2.465 0 .01.021.023.042.035.062l6.536 10.62a1.87 1.87 0 01-.02 1.71c-.268.505-.72.799-1.227.799H5.444c-.508 0-.96-.294-1.227-.8a1.87 1.87 0 01-.02-1.71l6.535-10.619a.978.978 0 00.035-.062zM12 8a1 1 0 011 1v5a1 1 0 11-2 0V9a1 1 0 011-1zm1 9a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                  </svg>
                </x-slot>

                Create an Issue
              </x-action-card>
            </x-splade-link>

            <x-splade-link href="#">
              <x-action-card>
                <x-slot name="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-teal-900" name="wrench" class="text-teal-900 custom-color">
                    <path fill="" fill-rule="evenodd" d="M13.48 4.022a6.025 6.025 0 00-3.686 1.732 5.982 5.982 0 000 8.485 6 6 0 008.485 0c.992-.991 1.576-2.33 1.723-3.599.09-.785.01-1.48-.195-2.03l-3.083 3.084a2.4 2.4 0 01-3.395 0l-.99-.99a2.4 2.4 0 010-3.394l3.077-3.076c-.522-.19-1.183-.28-1.937-.212zm-.181-1.991c1.653-.15 3.347.251 4.415 1.319a1 1 0 010 1.414l-3.96 3.96a.4.4 0 000 .566l.99.99a.4.4 0 00.565 0l3.96-3.96a1 1 0 011.415 0c1.144 1.144 1.496 2.893 1.305 4.55-.194 1.68-.96 3.447-2.296 4.784a8.001 8.001 0 01-8.443 1.844l-3.56 3.559a3.333 3.333 0 11-4.714-4.714l3.557-3.556A7.978 7.978 0 018.38 4.34a8.025 8.025 0 014.919-2.31zM7.515 14.633L4.39 17.757a1.333 1.333 0 001.885 1.886l3.125-3.125a8.043 8.043 0 01-1.886-1.885z" clip-rule="evenodd"></path>
                  </svg>
                </x-slot>

                Log a Service
              </x-action-card>
            </x-splade-link>

            <x-splade-link href="#">
              <x-action-card bg="bg-[#fdd2cf]">
                <x-slot name="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-red-900" name="user-add" class="text-red-900 custom-color">
                    <path fill="" fill-rule="evenodd" d="M9 3a5 5 0 100 10A5 5 0 009 3zM6 8a3 3 0 116 0 3 3 0 01-6 0zm13 2a1 1 0 10-2 0v2h-2a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2v-2zm-5.176 5.688C12.51 14.593 10.777 14 8.997 14c-1.78 0-3.513.595-4.826 1.692-1.317 1.1-2.118 2.633-2.169 4.285a1 1 0 102 .062c.03-1.027.529-2.041 1.451-2.812C6.38 16.453 7.65 16 8.998 16c1.347 0 2.618.451 3.545 1.225.924.77 1.423 1.783 1.455 2.81a1 1 0 002-.063c-.053-1.653-.856-3.184-2.174-4.284z" clip-rule="evenodd"></path>
                  </svg>
                </x-slot>

                Add User
              </x-action-card>
            </x-splade-link>

            <x-splade-link href="#">
              <x-action-card bg="bg-[#e1dff9]">
                <x-slot name="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-purple-900" name="bar-chart" class="text-purple-900 custom-color">
                    <path fill="" fill-rule="evenodd" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v3h4a2 2 0 012 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1v-5a2 2 0 012-2h4V5zm0 10H4v4h4v-4zm2 4h4V5h-4v14zm6 0h4v-9h-4v9z" clip-rule="evenodd"></path>
                  </svg>
                </x-slot>

                Run Reports
              </x-action-card>
            </x-splade-link>
          </section>

          <section class="col-span-3 first:mt-0 mt-6">

            <article class="grid grid-cols-3 gap-4 col-span-3 border-t mt-6 pt-6">

              @foreach ($projects as $project)
                <x-project-card :project="$project" />
              @endforeach

              <Link class="flex justify-center items-center text-center font-semibold text-indigo-600 hover:text-indigo-700 leading-normal" href="{{ route('projects.index') }}">
                <span class="mr-2.5">See all {{ $projectsCount }} projects</span>
                <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.83333 3.33337L14.5 8.00004M14.5 8.00004L9.83333 12.6667M14.5 8.00004L2.5 8.00004" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </Link>

            </article>
          </section>
        </div>
      </section>

      <section class="space-y-10">
        <h2 class="mb-2">
          Learn
        </h2>

        <x-learn-link path="projects.index" max-width="7xl">
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" class="text-gray-600 group-hover:text-gray-100 transition duration-200">
              <path fill="" d="M18 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM9 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
              <path fill="" fill-rule="evenodd" d="M4.596 7.342A4 4 0 018.54 4h6.918a4 4 0 013.945 3.342l.11.658H21a1 1 0 110 2h-1.153l.087.52 1.187 1.187A3 3 0 0122 13.828v.7a3 3 0 01-.317 1.341L21 17.236V20a1 1 0 01-1 1h-1a1 1 0 01-1-1v-1H6v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-2.764l-.683-1.367A3 3 0 012 14.529v-.7a3 3 0 01.879-2.12l1.187-1.188.087-.52H3a1 1 0 010-2h1.486l.11-.658zM5.414 12l-1.121 1.121a1 1 0 00-.293.707v.7a1 1 0 00.106.447l.736 1.472a1 1 0 00.894.553h12.528a1 1 0 00.894-.553l.736-1.472a1 1 0 00.106-.447v-.7a1 1 0 00-.293-.707L18.586 12H5.414zm12.405-2l-.388-2.329A2 2 0 0015.46 6H8.54A2 2 0 006.57 7.671L6.18 10h11.64z" clip-rule="evenodd"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Projects
          </x-slot>

          Projects are at the core of Onreels and can represent any current or otherwise.
        </x-learn-link>

        <x-learn-link>
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="equipment" class="text-gray-600 custom-color">
              <path fill="" fill-rule="evenodd" d="M2.75 6a4 4 0 014-4h7c.889 0 1.687.386 2.236 1h1.764c1.398 0 2.573.956 2.905 2.25h.595a1.25 1.25 0 110 2.5h-.595A3.001 3.001 0 0117.75 10h-1.14c-.224.817-.697 1.443-1.318 1.907-.709.532-1.58.83-2.353 1.04L12.431 16H13.75a3 3 0 013 3v1a2 2 0 01-2 2h-9a2 2 0 01-2-2v-2a2 2 0 012-2h.153l.667-4h-.82a3 3 0 01-3-3V6zm12 2.898V5a1 1 0 00-1-1h-7a2 2 0 00-2 2v3a1 1 0 001 1h1.41a1.5 1.5 0 011.48 1.747L7.93 16h2.5c0-.108.01-.218.028-.329l.561-3.37c.1-.595.543-1.064 1.114-1.21.832-.212 1.5-.44 1.96-.784.393-.294.657-.687.657-1.409zm2-.898h1a1 1 0 001-1V6a1 1 0 00-1-1h-1v3zm-4 10H13.75a1 1 0 011 1v1h-9v-2H12.749zm-1-10a1 1 0 100-2h-3a1 1 0 000 2h3z" clip-rule="evenodd"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Equipment
          </x-slot>

          Equipment are non-rolling assets that your fleet uses to perform a job or in daily operations.
        </x-learn-link>

        <x-learn-link>
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="box" class="text-gray-600 custom-color">
              <path fill="" d="M18.261 14.019a1 1 0 10-.866-1.803l-2.375 1.14a1 1 0 10.866 1.803l2.375-1.14z"></path>
              <path fill="" fill-rule="evenodd" d="M13.737 2.388a4 4 0 00-3.474 0L3.697 5.554A3 3 0 002 8.256v6.858a4 4 0 002.266 3.605l6 2.886a4 4 0 003.468 0l6-2.886A4 4 0 0022 15.114V8.256a3 3 0 00-1.697-2.702l-6.566-3.166zm-2.606 1.801a2 2 0 011.738 0l6.565 3.166.014.007-2.486 1.199a.984.984 0 00-.032-.016L9.514 4.969l1.617-.78zm-3.92 1.89L14.66 9.67 12 10.952l-7.45-3.59.016-.007L7.212 6.08zM4 9.317v5.797a2 2 0 001.133 1.802L11 19.74v-7.048L4 9.317zm9 10.422l5.867-2.823A2 2 0 0020 15.114V9.317l-7 3.374v7.048z" clip-rule="evenodd"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Parts & Inventory
          </x-slot>

          Manage all fleet parts and inventory locations, track usage, and use actionable data to improve purchasing decisions.
        </x-learn-link>

        <x-learn-link>
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="calendar-check" class="text-gray-600 custom-color">
              <path fill="" d="M15.707 12.207a1 1 0 00-1.414-1.414L11 14.086l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
              <path fill="" fill-rule="evenodd" d="M9 4a1 1 0 00-2 0v1a4 4 0 00-4 4v8a4 4 0 004 4h10a4 4 0 004-4V9a4 4 0 00-4-4V4a1 1 0 10-2 0v1H9V4zM5 9a2 2 0 012-2v1a1 1 0 002 0V7h6v1a1 1 0 102 0V7a2 2 0 012 2v8a2 2 0 01-2 2H7a2 2 0 01-2-2V9z" clip-rule="evenodd"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Service Entries
          </x-slot>

          Track all of your maintenance activities, costs, vendor info, photos, documents, receipts and more.
        </x-learn-link>

        <x-learn-link>
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="wrench" class="text-gray-600 custom-color">
              <path fill="" fill-rule="evenodd" d="M13.48 4.022a6.025 6.025 0 00-3.686 1.732 5.982 5.982 0 000 8.485 6 6 0 008.485 0c.992-.991 1.576-2.33 1.723-3.599.09-.785.01-1.48-.195-2.03l-3.083 3.084a2.4 2.4 0 01-3.395 0l-.99-.99a2.4 2.4 0 010-3.394l3.077-3.076c-.522-.19-1.183-.28-1.937-.212zm-.181-1.991c1.653-.15 3.347.251 4.415 1.319a1 1 0 010 1.414l-3.96 3.96a.4.4 0 000 .566l.99.99a.4.4 0 00.565 0l3.96-3.96a1 1 0 011.415 0c1.144 1.144 1.496 2.893 1.305 4.55-.194 1.68-.96 3.447-2.296 4.784a8.001 8.001 0 01-8.443 1.844l-3.56 3.559a3.333 3.333 0 11-4.714-4.714l3.557-3.556A7.978 7.978 0 018.38 4.34a8.025 8.025 0 014.919-2.31zM7.515 14.633L4.39 17.757a1.333 1.333 0 001.885 1.886l3.125-3.125a8.043 8.043 0 01-1.886-1.885z" clip-rule="evenodd"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Work Orders
          </x-slot>

          Work Orders are used to plan and complete service needed for a particular vehicle via in-house maintenance.
        </x-learn-link>

        <x-learn-link>
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="clipboard-note" class="text-gray-600 custom-color">
              <path fill="" fill-rule="evenodd" d="M7.23 6.154A2 2 0 006 8v10a2 2 0 002 2h8a2 2 0 002-2V8a2 2 0 00-1.23-1.846A3.001 3.001 0 0114 8h-4a3 3 0 01-2.77-1.846zm9.63-2.061A4.001 4.001 0 0120 8v10a4 4 0 01-4 4H8a4 4 0 01-4-4V8a4.001 4.001 0 013.14-3.907A3.001 3.001 0 0110 2h4c1.34 0 2.476.88 2.86 2.093zM9 5a1 1 0 011-1h4a1 1 0 110 2h-4a1 1 0 01-1-1zm0 10a1 1 0 100 2h6a1 1 0 100-2H9zm-1-3a1 1 0 011-1h6a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Inspections
          </x-slot>

          Inspections help drivers and operators complete their DVIRs electronically, surface and resolve defects quickly and produce a complete “paper-trail” in the event of an audit.
        </x-learn-link>

        <x-learn-link>
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="fuel" class="text-gray-600 custom-color">
              <path fill="" d="M7 14a1 1 0 011-1h3a1 1 0 110 2H8a1 1 0 01-1-1z"></path>
              <path fill="" fill-rule="evenodd" d="M3 5a3 3 0 013-3h7a3 3 0 013 3v15a1 1 0 110 2H3a1 1 0 110-2V5zm2 15h9v-9H5v9zm9-11H5V5a1 1 0 011-1h7a1 1 0 011 1v4z" clip-rule="evenodd"></path>
              <path fill="" d="M17.4 5.2a1 1 0 011.4.2l2.6 3.467a3 3 0 01.6 1.8V17.5a2.5 2.5 0 01-5 0V14a1 1 0 112 0v3.5a.5.5 0 001 0v-6.833a1 1 0 00-.2-.6L17.2 6.6a1 1 0 01.2-1.4z"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Fuel
          </x-slot>

          Log fuel entries or connect fuel cards and gain insight into how fuel contributes to asset operating costs. Identify high-consumption vehicles and track metrics related to fuel usage.
        </x-learn-link>

        <x-learn-link>
          <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="users" class="text-gray-600 custom-color">
              <path fill="" fill-rule="evenodd" d="M4 8a5 5 0 1110 0A5 5 0 014 8zm5-3a3 3 0 100 6 3 3 0 000-6zm3 9.591A7.842 7.842 0 008.997 14c-1.78 0-3.513.595-4.826 1.692-1.317 1.1-2.118 2.633-2.169 4.285a1 1 0 102 .062c.03-1.027.529-2.041 1.451-2.812C6.38 16.453 7.65 16 8.998 16c1.347 0 2.618.451 3.545 1.225.924.77 1.423 1.783 1.455 2.81a1 1 0 002-.063c-.048-1.478-.695-2.86-1.774-3.922.25-.032.504-.05.76-.05.891-.002 1.761.194 2.524.561.762.368 1.382.89 1.812 1.501a3.62 3.62 0 01.678 1.973 1 1 0 002-.063 5.62 5.62 0 00-1.042-3.06c-.641-.912-1.534-1.648-2.58-2.152A7.796 7.796 0 0014.98 14a7.838 7.838 0 00-2.979.591zm4.696-11.295a5 5 0 00-2.008-.286 1 1 0 00.125 1.996 3 3 0 11-.004 5.988 1 1 0 00-.128 1.996 5 5 0 002.015-9.694z" clip-rule="evenodd"></path>
            </svg>
          </x-slot>

          <x-slot name="title">
            Users
          </x-slot>

          Users represent the Fleet Managers, Technicians, Operators, others who are part of your fleet's daily operations. Contacts can be enabled as Users, which grants them access to log in to Fleetio with their own credentials.
        </x-learn-link>
      </section>

    </article>
  </div>
</section>

<x-footer />
