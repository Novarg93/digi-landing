<script setup lang="ts">
import { Link } from '@inertiajs/vue3'


const heroBg = "url('/images/hero-area.svg')"
</script>

<template>
  <!-- Hero Section Start -->
  <section
    id="home"
    class="bg-center bg-cover bg-no-repeat scroll-mt-[120px] lg:scroll-mt-[100px]"
    :style="{ backgroundImage: heroBg }"
  >
    <div class="container mx-auto px-3">
      <div class="flex flex-wrap items-center">
        <div class="w-full px-3 md:w-10/12 lg:w-1/2">
          <div class="pb-20 pt-20 lg:mb-16">
            <h1 class="mb-8 text-[34px] font-bold leading-snug text-black sm:text-[40px]">
              App, Business &amp; SaaS Landing Page Template
            </h1>

            <p class="mb-10 text-base leading-normal text-gray-400">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
              nesciunt dolorum nulla magnam veniam sapiente, fugiat! fuga nesciunt dolorum nulla
              magnam veniam sapiente, fugiat!
            </p>

            <ul class="flex flex-wrap">
              <li class="mr-4 py-2">
              
                <a
                  href="#0"
                  class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white hover:bg-white hover:text-red-500"
                >
                  Download Now
                </a>
              </li>

              <li class="mr-4 py-2">
                <a
                  href="#0"
                  class="inline-flex rounded-full border border-red-500 bg-white px-8 py-3 text-sm uppercase tracking-wide text-red-500 hover:bg-red-500 hover:text-white"
                >
                  Learn More
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full px-3 lg:w-1/2">
          <div class="lg:py-10">
            <img src="/images/intro-mobile.png" alt="" class="w-full" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->
</template>