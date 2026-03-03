<script setup lang="ts"></script>

<template>
  <section id="contact" class="bg-gray-50 py-20">
    <div class="container mx-auto px-3">
      <div class="w-full px-3">
        <div class="mb-12 text-center">
          <h2 class="text-3xl font-bold text-gray-800">Contact Us</h2>
          <span class="inline-block h-0.5 w-16 bg-red-500"></span>
        </div>
      </div>

      <div class="flex flex-wrap">
        <div class="w-full px-3 lg:w-7/12">
          <div class="mb-8 lg:mb-0">
            <form action="#">
              <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 md:w-1/2">
                  <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    class="mb-5 w-full rounded border border-gray-100 bg-white px-4 py-2 text-sm text-gray-600"
                  />
                </div>

                <div class="w-full px-3 md:w-1/2">
                  <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    class="mb-5 w-full rounded border border-gray-100 bg-white px-4 py-2 text-sm text-gray-600"
                  />
                </div>

                <div class="w-full px-3">
                  <input
                    type="text"
                    name="subject"
                    placeholder="Subject"
                    class="mb-5 w-full rounded border border-gray-100 bg-white px-4 py-2 text-sm text-gray-600"
                  />
                </div>

                <div class="w-full px-3">
                  <textarea
                    rows="8"
                    name="message"
                    placeholder="Your Message"
                    class="mb-5 w-full rounded border border-gray-100 bg-white px-4 py-2 text-sm text-gray-600"
                  ></textarea>
                </div>

                <div class="w-full px-3">
                  <button
                    class="inline-flex rounded-full border border-red-500 bg-red-500 px-8 py-3 text-sm uppercase tracking-wide text-white"
                  >
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="w-full px-3 lg:w-5/12">
          <div>
            <iframe
              class="w-full border-0"
              style="height: 300px"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>