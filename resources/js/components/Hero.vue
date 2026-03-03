<script setup lang="ts">
import startNow from '@/routes/start-now/index'
import { Link } from '@inertiajs/vue3'

const heroBg = "url('/images/hero-area.svg')"
</script>

<template>
  <section
    id="home"
    class="bg-center bg-cover bg-no-repeat "
    :style="{ backgroundImage: heroBg }"
  >
    <div class="container mx-auto px-3">
      <div class="flex flex-wrap items-center">
        <div class="w-full px-3 md:w-10/12 lg:w-1/2">
          <div class="pb-20 pt-20 lg:mb-16">
            <h1 class="mb-8 text-[34px] font-bold leading-snug text-black sm:text-[40px]">
              Scale your business with Talisman-Pay
            </h1>

            <p class="mb-10 text-base leading-normal text-gray-400">
              We help merchants grow revenue with reliable payment infrastructure.
              Accept card payments globally and manage settlements and payouts in one place.
            </p>

            <ul class="flex flex-wrap">
              <li class="mr-4 py-2">
                <Link
                  :href="startNow.index.url()"
                  class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white hover:bg-white hover:text-red-500"
                >
                  Get Started
                </Link>
              </li>

              <li class="mr-4 py-2">
                <a
                  href="#features"
                  class="inline-flex rounded-full border border-red-500 bg-white px-8 py-3 text-sm uppercase tracking-wide text-red-500 hover:bg-red-500 hover:text-white"
                >
                  Explore Features
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
</template>