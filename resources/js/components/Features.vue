<script setup lang="ts">
import { Cog, Leaf, Layers, Laptop, Rocket } from 'lucide-vue-next'
</script>

<template>
  <section id="features" class="py-20">
    <div class="container mx-auto px-3">
      <div class="w-full px-3">
        <div class="mb-12 text-center">
          <h2 class="text-3xl font-bold text-gray-800">Platform Features</h2>
          <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-gray-400">
            Built for high-volume payments: faster integration, higher approval rates, and full operational control.
          </p>
          <span class="mt-4 inline-block h-0.5 w-16 bg-red-500"></span>
        </div>
      </div>

      <div class="flex flex-wrap items-center">
        <!-- LEFT -->
        <div class="w-full px-3 md:w-1/2 lg:w-1/3">
          <div class="mb-6 flex flex-row-reverse rounded-md bg-white p-4 shadow-md hover:shadow-lg md:flex-row">
            <div class="w-full md:text-right">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Fast API & Webhooks</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Integrate quickly with clear API endpoints and webhooks for payment status, refunds, and settlements.
              </p>
            </div>
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Rocket class="mx-auto h-8 w-8" />
            </div>
          </div>

          <div class="mb-6 flex flex-row-reverse rounded-md bg-white p-4 shadow-md hover:shadow-lg md:flex-row">
            <div class="w-full md:text-right">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Smart Payment Routing</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Improve authorization rates with intelligent routing, retries, and configurable payment flows.
              </p>
            </div>
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Laptop class="mx-auto h-8 w-8" />
            </div>
          </div>

          <div class="mb-6 flex flex-row-reverse rounded-md bg-white p-4 shadow-md hover:shadow-lg md:flex-row">
            <div class="w-full md:text-right">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Security & Compliance</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Designed with security-first practices: tokenization, risk controls, and audit-ready reporting.
              </p>
            </div>
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Cog class="mx-auto h-8 w-8" />
            </div>
          </div>
        </div>

        <!-- CENTER IMAGE -->
        <div class="order-last w-full px-3 lg:order-2 lg:w-1/3">
          <div class="text-center">
            <img src="/images/intro-mobile-1.png" alt="Talisman-Pay platform preview" />
          </div>
        </div>

        <!-- RIGHT -->
        <div class="w-full px-3 md:w-1/2 lg:order-3 lg:w-1/3">
          <div class="mb-6 flex rounded-md bg-white p-4 shadow-md hover:shadow-lg">
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Leaf class="mx-auto h-8 w-8" />
            </div>
            <div class="w-full">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Multi-currency Settlements</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Settle in the currencies you operate in, track balances, and streamline reconciliation.
              </p>
            </div>
          </div>

          <div class="mb-6 flex rounded-md bg-white p-4 shadow-md hover:shadow-lg">
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Layers class="mx-auto h-8 w-8" />
            </div>
            <div class="w-full">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Unified Operations</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Payments, refunds, chargebacks, and payouts — managed from one dashboard with exports and logs.
              </p>
            </div>
          </div>

          <div class="mb-6 flex rounded-md bg-white p-4 shadow-md hover:shadow-lg">
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Leaf class="mx-auto h-8 w-8" />
            </div>
            <div class="w-full">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Automated Payouts</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Schedule payouts, send mass transfers, and keep full visibility over statuses and confirmations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>