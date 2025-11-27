<!-- Sidebar -->
    <aside class="my-4 hidden lg:block w-80 shrink-0 overflow-y-auto px-4 -mx-4">
      <input
        type="text"
        placeholder="#Search for an idea or pixel"
        class="w-full text-sm"
      />
      <hr class="border-pixl-light/10 mt-2" />

      <!-- Artists to follow section -->
      <x-artists-to-follow />

      <!-- Follow idea streams -->
      <div class="border-pixl-light/10 mt-4 border p-4">
        <h2 class="text-pixl-light/60 text-sm">Follow Idea Streams</h2>
        <ol class="mt-4 flex flex-col gap-2.5">
          <li class="flex items-center justify-between gap-4">
            <p class="truncate text-sm">Breakfast ideas and routines</p>
            <button
              class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/60 active:border-pixl/75 text-pixl border px-1.5 py-0.5 text-2xl leading-none"
            >
              +
            </button>
          </li>
          <li class="flex items-center justify-between gap-4">
            <p class="truncate text-sm">Quick books to read</p>
            <button
              class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/60 active:border-pixl/75 text-pixl border px-1.5 py-0.5 text-2xl leading-none"
            >
              +
            </button>
          </li>
          <li class="flex items-center justify-between gap-4">
            <p class="truncate text-sm">Inspiration for Art</p>
            <button
              class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/60 active:border-pixl/75 text-pixl border px-1.5 py-0.5 text-2xl leading-none"
            >
              +
            </button>
          </li>
        </ol>
        <a href="#" class="text-pixl-light/60 mt-4 inline-block text-sm"
          >Show more</a
        >
      </div>
    </aside>