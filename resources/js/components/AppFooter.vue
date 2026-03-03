<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { Facebook, Twitter, Instagram, Linkedin } from 'lucide-vue-next'
import AppLogoIcon from './AppLogoIcon.vue';

const year = new Date().getFullYear()
</script>

<template>
    <!-- Footer Start -->
    <footer class="pt-40">
        <div class="container mx-auto px-3">
            <!-- Top -->
            <div class="pb-20">
                <div class="flex flex-wrap">
                    <!-- Col 1 -->
                    <div class="w-full px-3 md:w-1/2 lg:w-1/4">
                        <div class="mb-8">
                            <Link :href="'/'" class="inline-block mb-4">

                                <AppLogoIcon />
                            </Link>

                            <p class="mb-5 text-sm leading-relaxed text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                lobortis tincidunt est, et euismod purus suscipit quis.
                            </p>

                            <ul class="flex flex-wrap">
                                <li>
                                    <a href="#0"
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded text-gray-700 transition duration-200 hover:bg-indigo-700 hover:text-white"
                                        aria-label="Facebook">
                                        <Facebook class="h-4 w-4" />
                                    </a>
                                </li>

                                <li>
                                    <a href="#0"
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded text-gray-700 transition duration-200 hover:bg-blue-400 hover:text-white"
                                        aria-label="Twitter">
                                        <Twitter class="h-4 w-4" />
                                    </a>
                                </li>

                                <li>
                                    <a href="#0"
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded text-gray-700 transition duration-200 hover:bg-red-500 hover:text-white"
                                        aria-label="Instagram">
                                        <Instagram class="h-4 w-4" />
                                    </a>
                                </li>

                                <li>
                                    <a href="#0"
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded text-gray-700 transition duration-200 hover:bg-blue-600 hover:text-white"
                                        aria-label="LinkedIn">
                                        <Linkedin class="h-4 w-4" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Col 2 -->
                    <div class="w-full px-3 md:w-1/2 lg:w-1/4">
                        <div class="mb-8 pt-3">
                            <h3 class="mb-5 text-lg font-semibold text-gray-800">
                                Products
                            </h3>
                            <ul>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Tracking
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Application
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Resource Planning
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Enterprise
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Employee Management
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Col 3 -->
                    <div class="w-full px-3 md:w-1/2 lg:w-1/4">
                        <div class="mb-8 pt-3">
                            <h3 class="mb-5 text-lg font-semibold text-gray-800">
                                Resources
                            </h3>
                            <ul>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Payment Options
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Fee Schedule
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Getting Started
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Identity Verification
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#0" class="text-sm text-gray-600 hover:text-red-500">
                                        Card Verification
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Col 4 -->
                    <div class="w-full px-3 md:w-1/2 lg:w-1/4">
                        <div class="mb-8 pt-3">
                            <h3 class="mb-5 text-lg font-semibold text-gray-800">
                                Contact
                            </h3>
                            <ul>
                                <li class="mb-4">
                                    <a href="#0" class="inline-flex text-sm text-gray-600 hover:text-red-500">
                                        <span class="pr-2 text-xl">📍</span>
                                        <span>
                                            105 Madison Avenue - Third Floor New York, NY 10016
                                        </span>
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#0" class="inline-flex text-sm text-gray-600 hover:text-red-500">
                                        <span class="pr-2 text-xl">📞</span>
                                        <span> +84 846 250 592 </span>
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#0" class="inline-flex text-sm text-gray-600 hover:text-red-500">
                                        <span class="pr-2 text-xl">✉️</span>
                                        <span> contact@uideck.com </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom -->
            <div class="border-0 border-t border-gray-300 py-6 text-center">
                <p class="text-sm text-gray-600">
                    Copyright
                    <span  class="text-red-500">
                        Temporary placeholder
                    </span>
                    · © {{ year }}
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
</template>