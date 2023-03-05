<div class="relative min-h-screen grid bg-black ">
  <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 ">
    <div class="relative sm:w-1/2 xl:w-3/5 bg-blue-500 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden  text-white bg-no-repeat bg-cover" style="background-image: url(https://abs.twimg.com/sticky/illustrations/lohp_en_1302x955.png);">

      <div class="absolute bg-black  opacity-25 inset-0 z-0" />

      {{-- <div class="w-full  lg:max-w-2xl md:max-w-md z-10 items-center text-center ">
        <div class=" font-bold leading-tight mb-6 mx-auto w-full content-center items-center ">
          <svg viewBox="0 0 24 24" class=" text-white ml-3 w-auto lg:h-20 h-15 inline" fill="currentColor">
            <g>
              <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
              </path>
            </g>
          </svg>
        </div>
      </div>
    </div> --}}

    <div class="md:flex md:items-center md:justify-left w-full sm:w-auto md:h-full xl:w-1/2 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none ">
      <div class="max-w-xl w-full space-y-12 bg-sky-900/80 rounded-xl p-10">
        <div class="lg:text-left text-center">
          <h2 class="mt-6  font-bold text-gray-100">
            <x-application-logo class="h-10" />
          </h2>

          <p class="mt-5 text-4xl text-gray-200">Join the winning team.</p>

          <h2 class="mt-3 text-7xl font-bold text-gray-100">
            Simplify your life.
          </h2>
        </div>

        <div>
          <Link href="{{ route('login') }}" class="lg:w-3/5 w-full btn btn-lg btn-outline bg-sky-900 hover:bg-sky-800 z-40 relative">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10" viewBox="0 0 512 512">
            <path d="M192 176v-40a40 40 0 0 1 40-40h160a40 40 0 0 1 40 40v240a40 40 0 0 1-40 40H240c-22.09 0-48-17.91-48-40v-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M288 336l80-80l-80-80"></path>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M80 256h272"></path>
          </svg> <span>Log in</span>
          </Link>
        </div>
      </div>
    </div>
  </div>
</div>
