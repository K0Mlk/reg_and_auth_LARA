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
          href="{{ route('register') }}"
          class="rounded-md bg-[#0099ff] bg-opacity-50 py-3 px-3 text-white font-semibold shadow-lg hover:shadow-xl hover:bg-opacity-65 transition duration-280 ease-in-out"
          >Log In</a
        >
      </div>
    </header>
    <main class="flex flex-col justify-center p-6 pb-12">
      <div class="mx-auto max-w-md">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-10 mx-auto text-[#0099ff] text-opacity-50"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
          />
        </svg>

        <h2 class="mt-2 ssm:mt-6 text-2xl font-bold font-black sm:mt-5 sm:text-2xl">Create your account</h2>
      </div>
      <div
        class="bg-white/65 sm:t-10 backdrop-blur-xl mt-10 p-6 sm:p-10 mx-auto rounded-xl shadow-xl w-full max-w-md"
      >
        <form action="{{ route('register') }}" method="post" novalidate autocomplete="off" class="space-y-6">
        @csrf
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700"
              >Name:</label
            >
            <div class="relative rounded-md shadow-sm mt-1">
              <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-5 w-5 text-gray-400"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                  />
                </svg>
              </div>
              <input
                type="text"
                id="name"
                name="name"
                required
                class="pl-10 border-gray-300 rounded-md focus:border-[#0099ff] focus:border-opacity-[0.5] focus:ring-[#0099ff] focus:ring-opacity-[0.5] text-sm w-full"
                placeholder="Vasya"
              />
            </div>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700"
              >Email:</label
            >
            <div class="relative rounded-md shadow-sm mt-1">
              <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-5 w-5 text-red-400"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25"
                  />
                </svg>
              </div>
              <div class="absolute right-0 inset-y-0 flex items-center pl-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  class="h-6 w-6 text-red-500 pr-1"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              <input
                type="email"
                id="email"
                name="email"
                required
                class="pl-10 pr-8 border-red-300 rounded-md text-sm text-red-900 placeholder-red-300 focus:border-red-500 focus:ring-red-500 w-full"
                placeholder="vasya@lox.org"
              />
            </div>
            <p class="mt-2 text-sm text-red-600">Your email must be valid email address.</p>
          </div>
          <div>
            <label
              for="password"
              class="block text-sm font-medium text-gray-700"
              >Password:</label
            >
            <div class="relative rounded-md shadow-sm mt-1">
              <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-5 w-5 text-gray-400"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"
                  />
                </svg>
              </div>
              <input
                type="password"
                id="password"
                name="password"
                minlength="8"
                class="pl-10 border-gray-300 rounded-md focus:border-[#0099ff] focus:border-opacity-[0.5] focus:ring-[#0099ff] focus:ring-opacity-[0.5] text-sm w-full"
                placeholder="********"
              />
            </div>
          </div>
          <div>
            <label
              for="password_confirmation"
              class="block text-sm font-medium text-gray-700"
              >Confirm password:</label
            >
            <div class="relative rounded-md shadow-sm mt-1">
              <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-5 w-5 text-gray-400"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"
                  />
                </svg>
              </div>
              <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                minlength="8"
                class="pl-10 border-gray-300 rounded-md focus:border-[#0099ff] focus:border-opacity-[0.5] focus:ring-[#0099ff] focus:ring-opacity-[0.5] text-sm w-full"
                placeholder="********"
              />
            </div>
          </div>
          <div>
            <button type="submit" 
              href="{{ route('dashboard') }}"
              class="w-full flex justify-center items-center rounded-md bg-[#0099ff] bg-opacity-50 py-3 px-3 
              font-semibold text-white  shadow-lg hover:shadow-xl hover:bg-opacity-65 transition duration-280 ease-in-out
              focus:shadow-xl focus:outline-none"
              >Sign Up</button
            >
          </div>
        </form>
        <div class="flex justify-center items-center mt-4">
          <a href="login.html" class="text-sm text-[#0099ff] text-opacity-50 hover:text-opacity-35">Already have an account?</a>
        </div>
      </div>
    </main>
  </body>
</html>
