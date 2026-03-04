<script setup lang="ts">
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'
import AppLogoIcon from './AppLogoIcon.vue'

const year = new Date().getFullYear()

const navItems = [
  { title: 'Home', href: '#home' },
  { title: 'Services', href: '#services' },
  { title: 'Features', href: '#features' },
  { title: 'Contact', href: '#contact' },
]

type LegalItem = { title: string; href: string }

const legals = computed<LegalItem[]>(() => {
  const props = usePage().props as any
  return (props.legals ?? []) as LegalItem[]
})
</script>

<template>
 <footer class="pt-40">
  <div class="container mx-auto px-3">
    <div class="pb-20">
      <div class="flex flex-wrap">

        <!-- Col 1 -->
        <div class="w-full px-3 md:w-1/2 lg:w-1/4">
          <div class="mb-8">
            <Link href="/" class="mb-4 inline-block">
              <AppLogoIcon />
            </Link>

            <p class="mb-5 text-sm leading-relaxed text-gray-600">
              Talisman-Pay is a payment infrastructure platform for merchants — built to accept
              payments globally, manage settlements, and automate payouts.
            </p>
          </div>
        </div>

        <!-- Col 2 -->
        <div class="w-full px-3 md:w-1/2 lg:w-1/4">
          <div class="mb-8 pt-3">
            <h3 class="mb-5 text-lg font-semibold text-gray-800">Legals</h3>

            <ul v-if="legals.length">
              <li v-for="item in legals" :key="item.href" class="mb-3">
                <Link :href="item.href" class="text-sm text-gray-600 hover:text-red-500">
                  {{ item.title }}
                </Link>
              </li>
            </ul>

            <p v-else class="text-sm text-gray-400">
              No legal pages yet.
            </p>
          </div>
        </div>

        <!-- Company info (2 columns) -->
        <div class="w-full px-3 lg:w-1/2">
          <div class="mb-8 pt-3">
            <h3 class="mb-6 text-lg font-semibold text-gray-800">
              Company Information
            </h3>

            <div class="grid gap-8 md:grid-cols-2 text-sm text-gray-600">

              <!-- Column A -->
              <div class="space-y-4">
                <div>
                  <p class="font-semibold text-gray-800">Company</p>
                  <p>Talis Man Pay LTD.</p>
                  <p>Incorporation number: BC1332052</p>
                </div>

                <div>
                  <p class="font-semibold text-gray-800">Website</p>
                  <a
                    href="https://talisman-pay.com"
                    class="transition hover:text-red-500"
                  >
                    talisman-pay.com
                  </a>
                </div>
              </div>

              <!-- Column B -->
              <div class="space-y-4">
                <div>
                  <p class="font-semibold text-gray-800">Address</p>
                  <p>
                    1095 McKenzie Ave, Suite 300<br />
                    Victoria, BC V8P 2L5<br />
                    Canada
                  </p>
                </div>

                <div>
                  <p class="font-semibold text-gray-800">Contact</p>
                  <a
                    href="mailto:info@talisman-pay.com"
                    class="transition hover:text-red-500"
                  >
                    info@talisman-pay.com
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="border-0 border-t border-gray-300 py-6 text-center">
      <p class="text-sm text-gray-600">
        © {{ year }} <span class="text-red-500">Talisman-Pay</span>. All rights reserved.
      </p>
    </div>
  </div>
</footer>
</template>