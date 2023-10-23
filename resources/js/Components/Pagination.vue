<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    links: Array
})

</script>

<template>
    <div class="flex">
        <Link href="#"
            :is="link.url ? 'Link' : 'span' "
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            class="mx-1 flex  h-9 w-9 items-center justify-center rounded-full border border-blue-gray-100 bg-transparent p-0 text-sm text-blue-gray-500 transition duration-150 ease-in-out hover:bg-light-300"
            :class="{ 'text-gray-500': ! link.url, 'font-bold text-xl text-black' : link.active}"
        />

    </div>
</template>
