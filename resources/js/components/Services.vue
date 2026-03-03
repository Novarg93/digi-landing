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
          <h2 class="text-3xl font-bold text-gray-800">What Talisman-Pay delivers</h2>
          <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-gray-400">
            Everything you need to accept payments, manage settlements, and send payouts — built for scale.
          </p>
          <span class="mt-4 inline-block h-0.5 w-16 bg-red-500"></span>
        </div>
      </div>

      <div class="flex flex-wrap justify-center">
        <!-- 1 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Settings class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">Card Processing</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Accept card payments with smooth checkout flows, smart routing, and clear reporting — optimized for
              conversion.
            </p>
          </div>
        </div>

        <!-- 2 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <TrendingUp class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">Flexible Settlements</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Settle in multiple currencies, simplify reconciliation, and keep full control over fees, timings, and
              payout schedules.
            </p>
          </div>
        </div>

        <!-- 3 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Users class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">Mass Payouts</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Pay partners, creators, vendors, or customers at scale — automated, trackable, and built for operational
              speed.
            </p>
          </div>
        </div>

        <!-- 4 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Layers class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">Local Payment Methods</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Expand globally with region-preferred payment options and tailored checkout experiences for local markets.
            </p>
          </div>
        </div>

        <!-- 5 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Smartphone class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">Merchant Dashboard</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Real-time analytics, transaction history, exports, and settlement tracking — everything in one clean
              interface.
            </p>
          </div>
        </div>

        <!-- 6 -->
        <div class="w-full px-3 sm:w-3/4 md:w-1/2 lg:w-1/3">
          <div class="group mb-6 rounded bg-white p-6 text-center shadow-md transition duration-200 hover:shadow-lg">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border border-gray-100 bg-white text-red-500 transition duration-200 group-hover:bg-red-500 group-hover:text-white">
              <Rocket class="h-8 w-8" />
            </div>
            <h3 class="mb-4 text-md font-semibold uppercase text-gray-800">Fast Integration</h3>
            <p class="text-sm leading-relaxed text-gray-400">
              Integrate via API and webhooks, go live quickly, and scale without rewrites — from first payment to high
              volume.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>