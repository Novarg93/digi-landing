<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  company: '',
  message: '',
})
</script>

<template>
  <section id="contact" class="bg-gray-50 py-20">
    <div class="container mx-auto px-3">
      <div class="w-full px-3">
        <div class="mb-12 text-center">
          <h2 class="text-3xl font-bold text-gray-800">Contact Talisman-Pay</h2>
          <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-gray-400">
            Have questions about onboarding or integration? Send us a message and our team will get back to you.
          </p>
          <span class="mt-4 inline-block h-0.5 w-16 bg-red-500"></span>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full px-3 lg:w-7/12">
          <div class="mb-8 lg:mb-0">
            <form @submit.prevent="form.post('/contact', { preserveScroll: true })">
              <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 md:w-1/2">
                  <input v-model="form.name" type="text" name="name" placeholder="Full Name"
                    class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600" />
                  <p v-if="form.errors.name" class="mb-3 text-xs text-red-500">{{ form.errors.name }}</p>
                </div>

                <div class="w-full px-3 md:w-1/2">
                  <input v-model="form.email" type="email" name="email" placeholder="Business Email"
                    class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600" />
                  <p v-if="form.errors.email" class="mb-3 text-xs text-red-500">{{ form.errors.email }}</p>
                </div>

                <div class="w-full px-3">
                  <input v-model="form.company" type="text" name="company" placeholder="Company Name"
                    class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600" />
                  <p v-if="form.errors.company" class="mb-3 text-xs text-red-500">{{ form.errors.company }}</p>
                </div>

                <div class="w-full px-3">
                  <textarea v-model="form.message" rows="6" name="message"
                    placeholder="Tell us about your business and expected payment volume"
                    class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600"></textarea>
                  <p v-if="form.errors.message" class="mb-3 text-xs text-red-500">{{ form.errors.message }}</p>
                </div>

                <div class="w-full px-3">
                  <button type="submit" :disabled="form.processing"
                    class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white transition hover:bg-white hover:text-red-500 disabled:opacity-50">
                    Submit Request
                  </button>

                  <p v-if="form.recentlySuccessful" class="mt-3 text-sm text-green-600">
                    Request submitted. We’ll reply within 1 business day.
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- COMPANY INFO PLACEHOLDER -->
        <div class="w-full px-3 lg:w-5/12">
          <div class="rounded bg-white p-8 shadow-md h-full">
            <h3 class="mb-6 text-xl font-semibold text-gray-800">
              Company Information
            </h3>

            <div class="space-y-5 text-sm text-gray-600">
              <div>
                <p class="font-semibold text-gray-800">What happens next</p>
                <p>We review your message and business model <br>
                  We clarify geography, risk profile and volumes <br>
                  We propose routing, methods and a tailored offer</p>
              </div>

              <div>
                <p class="font-semibold text-gray-800">Security & compliance</p>
                <p>We can align onboarding requirements to your region and industry. <br> Share any compliance
                  constraints up front.</p>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>