<script setup lang="ts">
import startNow from '@/routes/start-now';
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-3">
      <div class="flex flex-wrap items-center">
        <div class="w-full px-3 md:w-2/3 lg:w-1/2">
          <div class="mb-8 text-center md:mb-0 md:text-left">
            <h2 class="mb-3 text-4xl font-bold text-gray-800">
              Start accepting payments with Talisman-Pay
            </h2>
            <p class="text-sm leading-relaxed text-gray-400">
              Tell us about your business and our team will guide you through onboarding,
              integration, and settlement setup.
            </p>
          </div>
        </div>

        <div class="w-full px-3 md:w-1/3 lg:w-1/2">
          <div class="text-center md:text-right">
            <Link
              :href="startNow.index.url()"
              class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white hover:bg-white hover:text-red-500 transition"
            >
              Get Started
            </Link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>