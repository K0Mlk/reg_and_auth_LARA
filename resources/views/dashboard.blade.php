<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Registration</title>
  </head>
  <body
    class="bg-[#0099ff] bg-opacity-10 min-h-screen bg-[url('/resources/assets/svg/wave.svg')] bg-no-repeat bg-bottom bg-fixed"
  >
    <header class="flex justify-between items-center p-9">
      <a href="{{ route('welcome') }}" class="flex items-center gap-2">
        <svg
          class="h-10 text-[#0099ff] text-opacity-50"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
            clip-rule="evenodd"
          />
        </svg>
        <span class="text-xl font-black">Security</span>
      </a>
      <div>
        <a
          href="{{ route('welcome') }}"
          class="rounded-md bg-gray-400 bg-opacity-30 py-3 px-3 text-white font-semibold shadow-lg hover:shadow-xl hover:bg-opacity-65 transition duration-280 ease-in-out"
          >Log Out</a
        >
      </div>
    </header>
    <main>
        <div class="m-6 mb-12 rounded-xl p-6 shadow-xl sm:p-10">
            <h1 class="text-3xl font-semibold">Dashboard</h1>
        </div>
    </main>
  </body>
</html>
