<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadirin | Landing Page</title>
    <link rel="icon" href="{{ asset('images/ic_logo.png') }}" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div
      class="page-loading fixed top-0 bottom-0 left-0 right-0 z-[99999] flex items-center justify-center bg-primary-light-1 dark:bg-primary-dark-1 opacity-100 visible pointer-events-auto"
      role="status"
      aria-live="polite"
      aria-atomic="true"
      aria-label="Loading..."
    >
      <div class="grid-loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <main class="main relative">
      <section
        id="home"
        class="relative bg-blue-500 overflow-hidden bg-primary text-primary-color"
      >
        <div class="container mx-auto px-4">
          <div class="-mx-5 flex flex-wrap items-center">
            <div class="w-full px-5">
              <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                <h1
                    class="mt-16 mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight"
                  >
                Hadirin Page by Student SMKN 1 Kota Bengkulu
                </h1>

                <p
                  class="mx-auto mb-9 max-w-[600px] text-white sm:text-lg sm:leading-normal"
                >
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus qui impedit veniam, nesciunt ex sit illo?
                </p>

                <ul class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5">
                  <li>
                    <a href="{{ route('anggotas.index') }}" class="inline-flex items-center justify-center rounded-md bg-primary-color text-white px-5 py-3 text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]">
                      Tools
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('dashboard', ['category' => 'prints']) }}" class="inline-flex items-center justify-center rounded-md bg-primary-color text-white px-5 py-3 text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]">
                      Prints
                    </a>
                  </li>
                  <li>
                    <a href="#info" class="inline-flex items-center justify-center rounded-md bg-primary-color text-white px-5 py-3 text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]">
                      Info
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="info" class="section-area py-16"> {{-- Pastikan ID ini ada di landing page --}}
        <div class="container mx-auto px-4">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              About
            </h6>
            <h2 class="mb-6 text-3xl font-bold">About Hadirin</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptatum dolores autem quidem odit beatae perspiciatis!
              Rem. Lorem ipsum dolor sit amet consectetuadipisicing elit.
              Voluptatum dolores autem quidem odit beatae perspiciatis!
              Rem.
            </p>
            <div class="flex justify-center items-center mt-6 py-4 rounded-md">
              <a href="{{ route('dashboard') }}" {{-- Arahkan ke dashboard tanpa kategori, defaultnya tools --}}
                 class="font-semibold px-5 py-2 rounded-md bg-primary text-white hover:text-gray-900 focus:bg-primary focus:text-white active:bg-primary-light-5 active:text-primary"
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
      <div class="container py-8 mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/2">
            <div class="my-1">
              <div
                class="flex flex-wrap justify-center gap-x-3 md:justify-start"
              >
                <a
                  href="javascript:void(0)"
                  class="text-body-dark-11 hover:text-body-dark-12"
                  >Privacy Policy</a
                >
                <a
                  href="javascript:void(0)"
                  class="text-body-dark-11 hover:text-body-dark-12"
                  >Legal Notice</a
                >
                <a
                  href="javascript:void(0)"
                  class="text-body-dark-11 hover:text-body-dark-12"
                  >Terms of Service</a
                >
              </div>
            </div>
          </div>

          <div class="w-full md:w-1/2">
            <div class="my-1 flex justify-center md:justify-end">
              <p class="text-body-dark-11">
                &#169; 2025 Rayan 7k. All rights reserved</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <button
      type="button"
      class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
      data-web-trigger="scroll-top"
      aria-label="Scroll to top"
    >
      <i class="lni lni-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>
 </body>
</html>