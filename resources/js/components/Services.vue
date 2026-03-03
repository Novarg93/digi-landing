<script setup lang="ts">
import {
  Settings,
  TrendingUp,
  Users,
  Layers,
  Smartphone,
  Rocket,
} from 'lucide-vue-next'
</script>

<template>
  <section id="services" class="py-20">
    <div class="container mx-auto px-3">
      <div class="w-full px-3">
        <div class="mb-12 text-center">
          <h2 class="text-3xl font-bold text-gray-800">Our Services</h2>
          <span class="inline-block h-0.5 w-16 bg-red-500"></span>
        </div>
      </div>

      <div class="flex flex-wrap justify-center">
        <!-- 1 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Settings class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">EASY TO USED</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
            </p>
          </div>
        </div>

        <!-- 2 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <TrendingUp class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">AWESOME DESIGN</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
            </p>
          </div>
        </div>

        <!-- 3 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Users class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">EASY TO CUSTOMIZE</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
            </p>
          </div>
        </div>

        <!-- 4 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Layers class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">UI/UX DESIGN</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
            </p>
          </div>
        </div>

        <!-- 5 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Smartphone class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">APP DEVELOPMENT</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
            </p>
          </div>
        </div>

        <!-- 6 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Rocket class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">USER FRIENDLY INTERFACE</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Ut maximus enim dolor. Aenean auctor risus eget tincidunt lobortis. Donec tincidunt bibendum gravida.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>