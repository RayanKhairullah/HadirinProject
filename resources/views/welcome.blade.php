<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadirin | Landing Page</title>
    <link rel="icon" href="{{ asset('images/ic_logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="main relative">
      <section
        id="home"
        class="relative bg-blue-500 overflow-hidden bg-primary text-primary-color py-16 md:py-24 lg:py-32" {{-- Menambahkan padding responsif --}}
      >
        <div class="container mx-auto px-4">
          <div class="-mx-5 flex flex-wrap items-center">
            <div class="w-full px-5">
              <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                <h1
                    class="mt-8 mb-4 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight" {{-- Mengurangi mt dan mb untuk ukuran kecil, menyesuaikan font size --}}
                  >
                Hadirin Page by Student SMKN 1 Kota Bengkulu
                </h1>

                <p
                  class="mx-auto mb-6 max-w-[600px] text-white text-base sm:text-lg sm:leading-normal" {{-- Menyesuaikan mb dan font size --}}
                >
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus qui impedit veniam, nesciunt ex sit illo?
                </p>

                <ul class="mb-10 flex flex-wrap items-center justify-center gap-3 md:gap-4 lg:gap-5"> {{-- Menyesuaikan gap antar tombol --}}
                  <li>
                    <a href="{{ route('anggotas.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-blue-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-blue-600 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base"> {{-- Tombol diperbagus --}}
                      Tools
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('prints.daily.form') }}" class="inline-flex items-center justify-center rounded-md bg-white text-blue-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-blue-600 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base"> {{-- Tombol diperbagus --}}
                      Prints
                    </a>
                  </li>
                  <li>
                    <a href="#info" class="inline-flex items-center justify-center rounded-md bg-white text-blue-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-blue-600 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base"> {{-- Tombol diperbagus --}}
                      Info
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="info" class="section-area py-12 md:py-16 lg:py-20"> {{-- Menambahkan padding responsif --}}
        <div class="container mx-auto px-4">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-8 md:mb-12"> {{-- Menyesuaikan mb --}}
            <h6 class="mb-1 block text-base font-semibold text-primary sm:text-lg"> {{-- Menyesuaikan font size --}}
              About
            </h6>
            <h2 class="mb-4 text-2xl font-bold sm:text-3xl">About Hadirin</h2> {{-- Menyesuaikan font size --}}
            <p class="text-sm sm:text-base"> {{-- Menyesuaikan font size --}}
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptatum dolores autem quidem odit beatae perspiciatis!
              Rem. Lorem ipsum dolor sit amet consectetuadipisicing elit.
              Voluptatum dolores autem quidem odit beatae perspiciatis!
              Rem.
            </p>
            <div class="flex justify-center items-center mt-4 py-3 rounded-md sm:mt-6 sm:py-4"> {{-- Menyesuaikan mt dan py --}}
              <a href="{{ route('dashboard') }}"
                 class="font-semibold px-4 py-2 rounded-md bg-primary text-white text-sm hover:text-gray-900 focus:bg-primary focus:text-white active:bg-primary-light-5 active:text-primary sm:px-5 sm:py-2 md:text-base" {{-- Menyesuaikan padding dan font size tombol --}}
                 role="button">
                 Get Started
              </a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <footer class="text-black">
      <div class="w-full border-t border-solid border-alpha-dark"></div>
      <div class="container py-6 mx-auto px-4 md:py-8"> {{-- Menyesuaikan padding --}}
        <div class="flex flex-wrap flex-col md:flex-row justify-between items-center"> {{-- Mengubah flex-direction untuk mobile dan desktop --}}
          <div class="w-full md:w-1/2 order-2 md:order-1"> {{-- Mengatur urutan untuk mobile dan desktop --}}
            <div class="my-1">
              <div
                class="flex flex-wrap justify-center gap-x-2 md:justify-start text-xs sm:text-sm" {{-- Menyesuaikan gap dan font size --}}
              >
                <a
                  href="#"
                  class="text-body-dark-11 hover:text-body-dark-12"
                  >Privacy Policy</a
                >
                <a
                  href="#"
                  class="text-body-dark-11 hover:text-body-dark-12"
                  >Legal Notice</a
                >
                <a
                  href="#"
                  class="text-body-dark-11 hover:text-body-dark-12"
                  >Terms of Service</a
                >
              </div>
            </div>
          </div>

          <div class="w-full md:w-1/2 order-1 md:order-2 mb-2 md:mb-0"> {{-- Mengatur urutan dan margin untuk mobile dan desktop --}}
            <div class="my-1 flex justify-center md:justify-end">
              <p class="text-body-dark-11 text-xs sm:text-sm"> {{-- Menyesuaikan font size --}}
                &#169; 2025 Rayan 7k. All rights reserved</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <button
      type="button"
      class="inline-flex w-10 h-10 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[80px] right-[15px] hover:-translate-y-1 opacity-100 visible z-50 is-hided md:w-12 md:h-12 md:bottom-[117px] md:right-[20px]" {{-- Menyesuaikan ukuran dan posisi tombol untuk mobile dan desktop --}}
      data-web-trigger="scroll-top"
      aria-label="Scroll to top"
    >
      <i class="lni lni-chevron-up"></i>
    </button>
 </body>
</html>