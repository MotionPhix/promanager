<div class="relative">
  <span @click="{{ $isOpen = !$isOpen }}" class="w-full bg-white border py-2 px-3.5 flex justify-between items-center transition-all duration-200" :class="$isOpen ? 'rounded-t-lg' : 'rounded-lg'">
    <h3 class="font-heading">{{ $selected }}</h3>
    <svg :class="{ 'rotate-180': $isOpen }" class="h-5 w-5 text-neutral-500 transform transition-all duration-200" viewBox="0 0 20 20">
      <path fill="currentColor" d="M6.5 8.5L10 12l3.5-3.5L15 9l-5 5-5-5z" />
    </svg>
  </span>

  <div v-if="$isOpen" class="absolute z-10 w-full rounded-b-lg bg-white border-l border-r border-b overflow-hidden h-44 overflow-y-auto transition-all duration-200">
    @foreach ($members as $member)
    <div key="{{ $loop->index }}" class="block px-5 py-3 hover:bg-gray-100" on:click="select({{ htmlspecialchars(json_encode($member), ENT_QUOTES, 'UTF-8') }})">
      <div class="flex items-center">

        {{-- <img
          :src="$member['image']"
          :alt="$member['name']"
          class="w-6 h-6 mr-2" /> --}}

        <div>
          <h3 class="font-heading text-sm font-medium">
            {{ $member->name }}
          </h3>

          {{-- <span class="text-sm text-neutral-500">{{ $member['pro'] }}</span> --}}
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
