<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { dashboard, login, register } from '@/routes';
import AppHeaderLayout from '@/layouts/app/AppHeaderLayout.vue'
import Hero from '@/components/Hero.vue';
import Services from '@/components/Services.vue';
import About from '@/components/About.vue';
import Features from '@/components/Features.vue';
import Team from '@/components/Team.vue';
import Pricing from '@/components/Pricing.vue';
import Testimonials from '@/components/Testimonials.vue';
import CTA from '@/components/CTA.vue';
import Contact from '@/components/Contact.vue';





</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <AppHeaderLayout>
    <Hero/>
    <Services />
    <About />
    <Features />
    <!-- <Team /> -->
    <!-- <Pricing /> -->
    <!-- <Testimonials /> -->
    <CTA />
    <Contact />
    </AppHeaderLayout>
</template>
