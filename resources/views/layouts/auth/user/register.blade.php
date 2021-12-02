<html>

<head>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer=""></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://tailwindui.com/css/components-v2.css" />
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>

<body>
  <div>
    <div class="min-h-screen bg-white flex">
      <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/img/sp/v6.jpg') }}" alt="" />
      </div>
      <div
        class="
            flex-1 flex flex-col
            justify-center
            py-12
            px-4
            sm:px-6
            lg:flex-none lg:px-20
            xl:px-24
          ">
        <div class="mx-auto w-full max-w-sm lg:w-96">
          <div>
            <img class="h-12 w-auto" src="{{ asset('/img/logo-sp.png') }}" alt="Workflow" />
            <h2 class="mt-6 text-3xl font-bold text-gray-900">
              Selamat Datang
            </h2>
          </div>

          <div class="mt-8">
            <div class="mt-6">
              <form action="{{ route('user.register.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                  <label for="nama" class="block text-sm font-medium text-gray-700">
                    Nama
                  </label>
                  <div class="mt-1">
                    <input id="nama" name="nama" type="text" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </div>

                <div class="space-y-1">
                  <label for="email" class="block text-sm font-medium text-gray-700">
                    Email
                  </label>
                  <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </div>

                <div class="space-y-1">
                  <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                  </label>
                  <div class="mt-1">
                    <input id="password" name="password" type="password" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </div>

                <div class="space-y-1">
                  <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                    Password
                  </label>
                  <div class="mt-1">
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </div>

                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox"
                      class="
                        h-4
                        w-4
                        text-indigo-600
                        focus:ring-sp-primary-100
                        border-gray-300
                        rounded
                      " />
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                      Ingat saya
                    </label>
                  </div>

                  <div class="text-sm">
                    <a href="#"
                      class="
                        font-medium
                        text-sp-primary-100
                        hover:text-sp-primary-300
                      ">
                      Lupa password?
                    </a>
                  </div>
                </div>

                <div>
                  <button type="submit"
                    class="
                      w-full
                      flex
                      justify-center
                      py-2
                      px-4
                      border border-transparent
                      rounded-md
                      shadow-sm
                      text-sm
                      font-medium
                      text-white
                      bg-sp-primary-100
                      hover:bg-sp-primary-300
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-sp-primary-100
                    ">
                    Daftar
                  </button>
                </div>
              </form>
              <p
                class="
                  mt-6
                  text-center text-base
                  font-medium
                  text-gray-500
                ">
                Sudah pernah daftar?
                <a href="{{ route('user.login') }}" class="text-sp-primary-100"> Masuk </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
