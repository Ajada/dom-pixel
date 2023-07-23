<template>
  <nav class="flex my-6 items-center justify-between border-t border-gray-200 px-4 sm:px-0">
    <!-- <Bars3Icon class="h-6 w-6" aria-hidden="true" /> -->
    <div class="-mt-px flex w-0 flex-1">
      <Link :href="items.prev_page_url" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-1 -1 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
        Anterior
      </Link>
    </div>
    <div class="hidden md:-mt-px md:flex">
      <Link
        v-for="(item, index) in items.links" :key="index"
        :href="item.url"
        :class="item.label == items.current_page ? ['inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600'] : ['inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700']"

      >
        {{ Number(item.label) || item.label == "..." ? item.label : '' }}
      </Link>
    </div>
    <div class="-mt-px flex w-0 flex-1 justify-end">
      <Link :href="items.next_page_url" class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
        Proximo
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-1 -1 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>
      </Link>
    </div>
  </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
  items: [Object, Array]
})
</script>