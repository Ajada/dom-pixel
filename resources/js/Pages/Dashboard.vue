<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import TableVue from '@/Components/Table.vue';
import { ref } from 'vue';

const dataTable = ref([
    { image_url: 'https://static.todamateria.com.br/upload/ab/ac/abacate-cke.jpg', name: 'Abacate Manteiga', category: 'Technology', price: '200.00$', action: 'available' },
    { image_url: 'https://static.todamateria.com.br/upload/ba/na/banana-0-cke.jpg', name: 'Banana Nanica', category: 'Fruta', price: '300.00$', action: 'available' },
])

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <TableVue :data="dataTable" />
    </AppLayout>
</template>
