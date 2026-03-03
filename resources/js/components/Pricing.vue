<script setup lang="ts">
import { Droplet, Package, Star } from 'lucide-vue-next'
</script>

<template>
  <section id="pricing" class="py-20">
    <div class="container mx-auto px-3">
      <div class="w-full px-3">
        <div class="mb-12 text-center">
          <h2 class="text-3xl font-bold text-gray-800">Pricing</h2>
          <span class="inline-block h-0.5 w-16 bg-red-500"></span>
        </div>
      </div>

      <div class="flex flex-wrap justify-center">
        <div class="w-full px-3 sm:w-5/6 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-8 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div
              class="mx-auto mb-5 flex h-20 w-20 items-center justify-center rounded-full bg-gray-100 text-3xl text-red-500 group-hover:bg-red-500 group-hover:text-white"
            >
              <Package class="h-9 w-9" />
            </div>
            <p class="mb-3 text-2xl text-red-500">$10 <span class="text-sm text-gray-400">/mo</span></p>
            <h3 class="mb-3 text-lg font-semibold uppercase text-gray-800">Pro</h3>

            <ul class="pb-4">
              <li><p class="mb-3 text-sm text-gray-400">1 user</p></li>
              <li><p class="mb-3 text-sm text-gray-400">10 GB storage</p></li>
              <li><p class="mb-3 text-sm text-gray-400">Email support</p></li>
              <li><p class="mb-3 text-sm text-gray-400">Lifetime updates</p></li>
            </ul>

            <a
              href="#0"
              class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white"
            >
              Buy Now
            </a>
          </div>
        </div>

        <div class="w-full px-3 sm:w-5/6 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-8 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-5 flex h-20 w-20 items-center justify-center rounded-full bg-red-500 text-3xl text-white">
              <Droplet class="h-9 w-9" />
            </div>
            <p class="mb-3 text-2xl text-red-500">$35 <span class="text-sm text-gray-400">/mo</span></p>
            <h3 class="mb-3 text-lg font-semibold uppercase text-gray-800">Plus</h3>

            <ul class="pb-4">
              <li><p class="mb-3 text-sm text-gray-400">10 user</p></li>
              <li><p class="mb-3 text-sm text-gray-400">30 GB storage</p></li>
              <li><p class="mb-3 text-sm text-gray-400">Priority Email support</p></li>
              <li><p class="mb-3 text-sm text-gray-400">Lifetime updates</p></li>
            </ul>

            <a
              href="#0"
              class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white"
            >
              Buy Now
            </a>
          </div>
        </div>

        <div class="w-full px-3 sm:w-5/6 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-8 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div
              class="mx-auto mb-5 flex h-20 w-20 items-center justify-center rounded-full bg-gray-100 text-3xl text-red-500 group-hover:bg-red-500 group-hover:text-white"
            >
              <Star class="h-9 w-9" />
            </div>
            <p class="mb-3 text-2xl text-red-500">$150 <span class="text-sm text-gray-400">/mo</span></p>
            <h3 class="mb-3 text-lg font-semibold uppercase text-gray-800">Premium</h3>

            <ul class="pb-4">
              <li><p class="mb-3 text-sm text-gray-400">Unlimited user</p></li>
              <li><p class="mb-3 text-sm text-gray-400">Unlimited storage</p></li>
              <li><p class="mb-3 text-sm text-gray-400">24/7 support</p></li>
              <li><p class="mb-3 text-sm text-gray-400">Lifetime updates</p></li>
            </ul>

            <a
              href="#0"
              class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white"
            >
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>