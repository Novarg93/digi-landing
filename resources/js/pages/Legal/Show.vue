<script setup lang="ts">
import AppHeaderLayout from '@/layouts/app/AppHeaderLayout.vue';
import { Head } from '@inertiajs/vue3'


const props = defineProps<{
  page: {
    title: string
    code: string
    content: string | null
    updated_at?: string | null
  }
}>()
</script>

<template>

  <Head :title="props.page.title" />
  <AppHeaderLayout>
    <section class="py-16">
      <div class="container mx-auto px-3">
        <h1 class="text-3xl font-bold text-gray-800">{{ props.page.title }}</h1>

        <p v-if="props.page.updated_at" class="mt-2 text-sm text-gray-500">
          Updated: {{ new Date(props.page.updated_at).toLocaleDateString() }}
        </p>

        <div class="prose prose-sm max-w-none mt-8">
          
          <div class="legal" v-html="props.page.content ?? ''"></div>
        </div>
      </div>
    </section>
  </AppHeaderLayout>
</template>