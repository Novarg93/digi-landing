<script setup lang="ts">
import { Cog, Leaf, Layers, Laptop, Rocket } from 'lucide-vue-next'
</script>

<template>
  <section id="features" class="py-20">
    <div class="container mx-auto px-3">
      <div class="w-full px-3">
        <div class="mb-12 text-center">
          <h2 class="text-3xl font-bold text-gray-800">Awesome Features</h2>
          <span class="inline-block h-0.5 w-16 bg-red-500"></span>
        </div>
      </div>

      <div class="flex flex-wrap items-center">
        <div class="w-full px-3 md:w-1/2 lg:w-1/3">
          <div class="mb-6 flex flex-row-reverse rounded-md bg-white p-4 shadow-md hover:shadow-lg md:flex-row">
            <div class="w-full md:text-right">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Tailwind Based</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Rocket class="mx-auto h-8 w-8" />
            </div>
          </div>

          <div class="mb-6 flex flex-row-reverse rounded-md bg-white p-4 shadow-md hover:shadow-lg md:flex-row">
            <div class="w-full md:text-right">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Fully Responsive</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Laptop class="mx-auto h-8 w-8" />
            </div>
          </div>

          <div class="mb-6 flex flex-row-reverse rounded-md bg-white p-4 shadow-md hover:shadow-lg md:flex-row">
            <div class="w-full md:text-right">
              <h3 class="mb-2 text-md font-semibold text-gray-800">HTML5, CSS3 &amp; SASS</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Cog class="mx-auto h-8 w-8" />
            </div>
          </div>
        </div>

        <div class="order-last w-full px-3 lg:order-2 lg:w-1/3">
          <div class="text-center">
            <img src="/images/intro-mobile-1.png" alt="" />
          </div>
        </div>

        <div class="w-full px-3 md:w-1/2 lg:order-3 lg:w-1/3">
          <div class="mb-6 flex rounded-md bg-white p-4 shadow-md hover:shadow-lg">
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Leaf class="mx-auto h-8 w-8" />
            </div>
            <div class="w-full">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Modern Design</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
          </div>

          <div class="mb-6 flex rounded-md bg-white p-4 shadow-md hover:shadow-lg">
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Layers class="mx-auto h-8 w-8" />
            </div>
            <div class="w-full">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Multi-purpose Template</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
          </div>

          <div class="mb-6 flex rounded-md bg-white p-4 shadow-md hover:shadow-lg">
            <div class="w-20 max-w-full px-3 text-center text-3xl text-red-500">
              <Leaf class="mx-auto h-8 w-8" />
            </div>
            <div class="w-full">
              <h3 class="mb-2 text-md font-semibold text-gray-800">Working Contact Form</h3>
              <p class="text-sm leading-relaxed text-gray-400">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>