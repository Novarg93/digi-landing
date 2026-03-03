<script setup lang="ts">
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { Link } from '@inertiajs/vue3'
import AppLogo from '@/components/AppLogo.vue'
import type { BreadcrumbItem } from '@/types'
import startNow from '@/routes/start-now'



type Props = {
  breadcrumbs?: BreadcrumbItem[]
}

const props = withDefaults(defineProps<Props>(), {
  breadcrumbs: () => [],
})

const navItems = [
  { title: 'Home', href: '#home' },
  { title: 'Services', href: '#services' },
  { title: 'Features', href: '#features' },
  // { title: 'Team', href: '#team' },
  // { title: 'Pricing', href: '#pricing' },
  { title: 'Contact', href: '#contact' },
]

const mobileOpen = ref(false)
const isScrolled = ref(false)

function toggleMobile() {
  mobileOpen.value = !mobileOpen.value
}

function closeMobile() {
  mobileOpen.value = false
}

function onKeydown(e: KeyboardEvent) {
  if (e.key === 'Escape') closeMobile()
}

function handleScroll() {
  isScrolled.value = window.scrollY > 10
}

onMounted(() => {
  window.addEventListener('keydown', onKeydown)
  window.addEventListener('scroll', handleScroll)
  handleScroll()
})

onBeforeUnmount(() => {
  window.removeEventListener('keydown', onKeydown)
  window.removeEventListener('scroll', handleScroll)
})

const linkClass = () =>
  'text-gray-600 text-md hover:text-red-600 block py-2 lg:py-0 lg:ml-10 transition-colors'
</script>

<template>
  <header class="fixed left-0 top-0 z-20 w-full bg-white transition-all duration-300"
    :class="isScrolled ? 'shadow-md' : 'shadow-none'">
    <div class="container relative mx-auto px-3">
      <div class="flex items-center justify-between">
        <div class="logo px-3 py-3 ">
          <Link href="/" class="inline-flex items-center">
            <AppLogo class="w-12! lg:w-14!" />
          </Link>
        </div>

        <button type="button" class="menu-btn block lg:hidden" :aria-expanded="mobileOpen ? 'true' : 'false'"
          aria-label="Toggle menu" @click="toggleMobile">
          <span class="relative my-[6px] block h-0.5 w-8 bg-gray-700 transition duration-200"></span>
          <span class="relative my-[6px] block h-0.5 w-8 bg-gray-700 transition duration-200"></span>
          <span class="relative my-[6px] block h-0.5 w-8 bg-gray-700 transition duration-200"></span>
        </button>

        <nav
          class="nav-box absolute right-0 top-full w-64 rounded bg-white px-6 py-6 shadow-lg lg:static lg:block lg:w-full lg:rounded-none lg:px-3 lg:py-0 lg:shadow-none"
          :class="[mobileOpen ? 'block' : 'hidden', 'lg:!block']">
          <ul class="lg:flex lg:justify-end">
            <li v-for="item in navItems" :key="item.title">
              <a :href="item.href" :class="linkClass()" @click="closeMobile">
                {{ item.title }}
              </a>
            </li>
            <li class="  ">
              <Link :href="startNow.index.url()" @click="closeMobile"
                class="text-red-500  lg:ml-10 hover:text-red-800 transition-colors">
                Start Now
              </Link>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div v-if="props.breadcrumbs.length > 1" class="border-t border-gray-200">
      <div class="container mx-auto px-3">
        <div class="flex h-12 items-center text-sm text-gray-500"></div>
      </div>
    </div>
  </header>

  <div class="h-[88px] lg:h-[72px]" />
</template>