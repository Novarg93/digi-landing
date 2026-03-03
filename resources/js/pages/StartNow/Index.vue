<script setup lang="ts">
import { computed } from 'vue'
import { Link, useForm, usePage } from '@inertiajs/vue3'
import AppHeaderLayout from '@/layouts/app/AppHeaderLayout.vue'


const form = useForm({
  contact_person: '',
  company_name: '',
  email: '',
  country_of_registration: '',
  phone: '',
  about: '',
  agreed_to_terms: false,
})


const page = usePage() as any
const success = computed(() => page.props.flash?.success)

const termsHref = computed(() => '/legal/terms')
const privacyHref = computed(() => '/legal/privacy')
</script>

<template>
    <AppHeaderLayout>
  <section class="bg-gray-50 py-20">
    <div class="container mx-auto px-3">
      <div class="mx-auto max-w-3xl">
        <div class="mb-10 text-center">
          <h1 class="text-3xl font-bold text-gray-800">Start Now</h1>
          <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-gray-400">
            Start fast and easy. Please fill the form below and we will assist you as fast as we can.
          </p>
          <span class="mt-4 inline-block h-0.5 w-16 bg-red-500"></span>
        </div>

        <div class="rounded bg-white p-8 shadow-md">
          <form
            @submit.prevent="
              form.post('/start-now', {
                preserveScroll: true,
                onSuccess: () => form.reset(),
              })
            "
          >
            <div class="-mx-3 flex flex-wrap">
              <div class="w-full px-3 md:w-1/2">
                <label class="mb-2 block text-sm font-semibold text-gray-800">Contact person</label>
                <input
                  v-model="form.contact_person"
                  type="text"
                  class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600"
                />
                <p v-if="form.errors.contact_person" class="mb-4 text-xs text-red-500">
                  {{ form.errors.contact_person }}
                </p>
              </div>

              <div class="w-full px-3 md:w-1/2">
                <label class="mb-2 block text-sm font-semibold text-gray-800">Company name</label>
                <input
                  v-model="form.company_name"
                  type="text"
                  class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600"
                />
                <p v-if="form.errors.company_name" class="mb-4 text-xs text-red-500">
                  {{ form.errors.company_name }}
                </p>
              </div>

              <div class="w-full px-3 md:w-1/2">
                <label class="mb-2 block text-sm font-semibold text-gray-800">Email</label>
                <input
                  v-model="form.email"
                  type="email"
                  class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600"
                />
                <p v-if="form.errors.email" class="mb-4 text-xs text-red-500">
                  {{ form.errors.email }}
                </p>
              </div>

              <div class="w-full px-3 md:w-1/2">
                <label class="mb-2 block text-sm font-semibold text-gray-800">Country of registration</label>
                <input
                  v-model="form.country_of_registration"
                  type="text"
                  class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600"
                />
                <p v-if="form.errors.country_of_registration" class="mb-4 text-xs text-red-500">
                  {{ form.errors.country_of_registration }}
                </p>
              </div>

              <div class="w-full px-3">
                <label class="mb-2 block text-sm font-semibold text-gray-800">Phone</label>
                <input
                  v-model="form.phone"
                  type="text"
                  class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600"
                />
                <p v-if="form.errors.phone" class="mb-4 text-xs text-red-500">
                  {{ form.errors.phone }}
                </p>
              </div>

              <div class="w-full px-3">
                <label class="mb-2 block text-sm font-semibold text-gray-800">Tell about yourself</label>
                <textarea
                  v-model="form.about"
                  rows="7"
                  class="mb-2 w-full rounded border border-gray-200 bg-white px-4 py-2 text-sm text-gray-600"
                />
                <p v-if="form.errors.about" class="mb-4 text-xs text-red-500">
                  {{ form.errors.about }}
                </p>
              </div>

              <div class="w-full px-3">
                <label class="mb-4 inline-flex items-start gap-3 text-sm text-gray-600">
                  <input v-model="form.agreed_to_terms" type="checkbox" class="mt-1" />
                  <span>
                    I agree with
                    <Link :href="termsHref" class="text-red-500 hover:underline">Terms &amp; Conditions</Link>
                    and
                    <Link :href="privacyHref" class="text-red-500 hover:underline">Privacy Policy</Link>
                  </span>
                </label>

                <p v-if="form.errors.agreed_to_terms" class="mb-4 text-xs text-red-500">
                  {{ form.errors.agreed_to_terms }}
                </p>
              </div>

              <div class="w-full px-3">
                <button
                  type="submit"
                  :disabled="form.processing"
                  class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white transition hover:bg-white hover:text-red-500 disabled:opacity-50"
                >
                  Submit Request
                </button>

                <p v-if="success" class="mt-3 text-sm text-green-600">
                  {{ success }}
                </p>
              </div>
            </div>
          </form>
        </div>

        <div class="mt-6 text-center text-xs text-gray-400">
          Prefer email? <a href="mailto:support@talisman-pay.com" class="text-red-500 hover:underline">support@talisman-pay.com</a>
        </div>
      </div>
    </div>
  </section>
  </AppHeaderLayout>
</template>